<?php

namespace TestBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use TestBundle\Entity\FicheFrais;
use TestBundle\Entity\Justificatif;
use TestBundle\Entity\LigneForfais;
use TestBundle\Entity\LigneHorForfait;
use TestBundle\Entity\RechercheFiche;
use TestBundle\Entity\Visiteur;
use TestBundle\Form\RechercheUtilisateurType;

class DefaultController extends Controller
{

    // ---------------------------------LOGIN -----------------------------------------------------------
    public function LoginAction(){

        return $this->render('TestBundle:Default:login.html.twig');
    }

    //----------------------------------------------------------------------------------------------------

    //----------------------------------Page Admin---------------------------------------------------------

    //-----              Fonction page Ajout d'un Utilisateur           ------
    public function addVisiteurAction(Request $request)
    {
        //creer un utilisateur(vide)
        $user = new Visiteur();
        $form = $this->createForm('TestBundle\Form\VisiteurType',$user);
        $form->handleRequest($request);


        //Verification que le formulaire a bien été remplie
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $user_manager = $this->get("fos_user.user_manager");
            $user_manager -> updateUser($user);
            $em->flush();
            return $this->redirectToRoute('test_homepage');
        }

        return $this->render('TestBundle:Default:addVisiteur.html.twig',array('form'=>$form->createView()));
    }
    //------                Fin fonction Ajout d'un Utilisateur         ------




    //Function Page Suppretion Utilisateur :
    public function removeVisiteurAction(Request $request){

        $USER = $this->getUser();
        if ( in_array('ROLE_ADMIN',$USER->getroles()) == false ){
            return $this->redirectToRoute('test_homepage');
        }

        //Verification que le formulaire a bien été envoyer avec la methode post
        if ($request->isMethod('POST'))
        {

            //Verification que id renvoie bien une valeur.
            if ($request->request->get('id') != null){
                $id = $request->request->get('id');

                $USER = $this->getDoctrine()->getRepository('TestBundle:Visiteur')->findOneByid($id);

                $em = $this->getDoctrine()->getEntityManager();
                $em->remove($USER);
                $em->flush();
            }
            // Un formulaire a été envoyé, on peut le traiter ici
        }

            // Recuperation des Utilisateur :
            $LesUsers = $this->getDoctrine()->getRepository('TestBundle:Visiteur')->findAll();


        return $this->render('TestBundle:Default:removeVisiteur.html.twig',array('LesUtilisateurs'=>$LesUsers));
    }
    //Fin fonction supretion d'utilisateur

    //------------------------------------------------FIN PAGE ADMIN------------------------------------------------------------





    //------------------------------------------------PAGE ACCEUIL--------------------------------------------------------------
    public function acceuilAction(Request $request)
    {
        $USER = $this->getUser();
        $role = $USER->getroles();

        //--Verification de la date :
        $DateJ = new \DateTime();

        //Si la date du jour est < a 10 on enleve 1 a date pour na pas prendre en compte les fiches du mois en cours
        if ($DateJ->format('d') < 10) {
            $Date2 = $DateJ;
            $Date2->modify('-1 month');

        }else{
            $Date2 = $DateJ;
        }


        //----------------       Mise a l'etat "Valide" des fiches       --------------------------
        // On recupère tout les fiche qui posséde l'etat crée
        $LesFiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findByetat('Crée');
        $Etat_U = $this->getDoctrine()->getRepository('TestBundle:Etat')->findOneByid("Cloturé");

        foreach ($LesFiche as $UneFiche){
            $Date3 = $UneFiche->getMois();

            // on verifie si la Date de ces fiche est inférieur a celle actuel
            if ($Date2->format('Y') >= $Date3->format('Y')){
                if ($Date2->format('m') >= $Date3->format('m')){
                    $em = $this->getDoctrine()->getManager();

                    //Si la date est inférieur on modifie l'etat de la fiche a "Cloturé"
                    $UneFiche->setEtat($Etat_U);
                    $em->persist($UneFiche);
                    $em->flush();
                }

            }

        }
        //----------------      FIN  Mise a l'etat "Valide" des fiches     -----------------------
        //----------------      Mise a l'etat "Cloturé" des fiches         -----------------------
        /*
                //Si la date du jour est < a 20 on enleve 1 a date pour na pas prendre en compte les fiches du mois en cours
                if ($DateJ->format('d') < 20) {
                    $Date2 = $DateJ;
                    $Date2->modify('-1 month');

                }else{
                    $Date2 = $DateJ;
                }

                $LesFiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findByetat('Valide');
                foreach ($LesFiche as $UneFiche){
                    $Date3 = $UneFiche->getMois();


                }

        */


        if ($role[0] == "ROLE_COMPTABLE"){
            return $this->redirectToRoute('test_consulterfichefraisC');
        }
        elseif ($role[0] == "ROLE_UTILISATEUR"){
            return $this->redirectToRoute('test_renseignerfichefrais');
        }

            return $this->render('TestBundle:Default:Acceuil.html.twig',array('role'=>$role));
    }
    //--------------------------------------------------Fin PAGE ACCEUIL ----------------------------------------------------





    //-------------------------------------------------PAGE USER--------------------------------------------------------------

    //------------------------------------------------FONCTION AJOUT/SUPPRSSION LIGNE FORFAIT ET HOR FORFAIT -----------------------------------
    public function renseignerfichefraisAction(Request $request)
    {
        //Recuperation de l'utilisateur, et des fiches de l'utilisateur
        $USER = $this->getUser();
        $LesFiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findByVisiteur($USER->getid());


        //Receration de la date: si elle est supérieur au 10 du mois on passe au mois suivant
        $Date = new \DateTime();
        if ($Date->format('d') >= 10 ){
            $Date->modify('+1 month');
        }


        //Declaration de la Varaible Fiche qui va prendre pour valeur la fiche qui va être enregistre
        //et la variable ficheoriginal qui va prendre pour valeur la fiche avant modification
        $FIche = null;
        $FicheOrigine = null;
        //On recherche dans les fiche de l'utilisateur si il existe une fiche pour le mois en cours
        foreach ($LesFiche as $UneFiche){
            if ($UneFiche->getMois()->format('Y') == $Date->format('Y')) {
                if ($UneFiche->getMois()->format('m') == $Date->format('m')){
                    //SI on trouve une fiche déja existente on la récupere
                    $FIche = $UneFiche;
                    $FicheOrigine = $FIche;
                }
            }
        }

        //Si il n'existe pas de fiche pour le mois en cours on en crée une :
        if ($FIche == null){
            //On recupere l'etat pour l'assigner a la fiche
            $Etat_U = $this->getDoctrine()->getRepository('TestBundle:Etat')->findOneByid("Crée");
            //On crée une nouvelle fiche avec le bin mois,l'etat "Crée" et l'utilisateur.
            $FIche = new FicheFrais($Etat_U,$USER,$Date);
            //On ajoute une Ligne Forfais et une Ligne hor forfais a cette nouvelle fiche
            if ($request->isMethod("POST") == false) {
                $FIche->addLigneForFai(new LigneForfais());
                $FIche->addLigneHorForFait(new LigneHorForfait());
            }
        }

        // Recuperation des Lignes Forfaits et Hors Forfaits présent dans la fiche original
        $originalFraisForfait = new ArrayCollection();
        $originalHorForfait = new ArrayCollection();
        $originalJustificatif = new ArrayCollection();

        //Si fiche original est vide c'est que nous venons de creer une nouvelle fiche.
        //Si non on recupere les Ligne Forfais et Hor Forfais pour pouvoir supprimmer celle que l'utilisateur aurai surimmer
        //lors de la sauvegarde de la fiche
        if ($FicheOrigine != null) {
            foreach ($FicheOrigine->getLigneForfais() as $Une) {
                $originalFraisForfait->add($Une);
            }

            foreach ($FicheOrigine->getLigneHorForfait() as $Une) {
                $originalHorForfait->add($Une);
            }
           foreach ($FicheOrigine->getJustificatif() as $Une){
               $originalJustificatif->add($Une);
           }

            // Si il existe aucune Ligne Forfait ou hor Forfait on en crée des nouvelles
            if ($originalFraisForfait->count() == 0) {
                $FIche->addLigneForfai(new LigneForfais());
            }
            if ($originalHorForfait->count() == 0) {
                $FIche->addLigneHorForfait(new LigneHorForfait());
                $FIche->addJustificatif(new Justificatif());
            }
        }

        //On crée un Formulaire pour la fiche
        $form1 =$this->createForm('TestBundle\Form\FicheFraisType',$FIche);
        $form1->handleRequest($request);



        //Si le formulaire a été renvoyer et remplie on l'enregistre
        if ($form1->isSubmitted() && $form1->isValid()){
            $em2 = $this->getDoctrine()->getManager();

            if ($FicheOrigine != null) {

                //Supretion des Ligne supprimer par l'utilisateur
                //On recuepere les tableau remplie précedemment avec les Ligne avant modification de l'utilisateur
                //On verifie celle qui ne sont plus pésente dans le formulaire qui a été renvoyé pour les suprimmer
                foreach ($originalFraisForfait as $uneLigne) {
                    if ($FIche->getLigneForfais()->contains($uneLigne) != true) {
                        $uneLigne->setFichefrai(null);
                        //Suppression des fiches
                        $em2->remove($uneLigne);
                    }
                }
                // de même pour les lignes hors forfais
                foreach ($originalHorForfait as $uneLigne) {
                    if ($FIche->getLigneHorForfait()->contains($uneLigne) != true) {
                        $uneLigne->setFichefrai(null);
                        $em2->remove($uneLigne);

                    }
                }
                // de même pour les Justificatif :
                foreach ($originalJustificatif as $uneLigne) {
                    if ($FIche->getJustificatif()->contains($uneLigne) != true) {
                        $uneLigne->setFichefrai(null);
                        $fs = new Filesystem();
                        $url = $this->getParameter('Justificatif_Directory')."/".$uneLigne->getId();
                        $fs->remove( $url, $uneLigne->getURL());
                        $em2->remove($uneLigne);
                    }
                }
            }else{
                //SI Il n'y a pas de fiche original et que la nouevelle fiche est vide cela s'ignifie que l'utilisateur a rentré une fiche vide
                //On n'annule donc l'enregistrement de la fiche
                if (count($FIche->getLigneHorForFait()) == 0 && count($FIche->getLigneForFais()) == 0){
                    return $this->redirectToRoute('test_renseignerfichefrais');
                }
            }

            //On relie tout les lignes forfais et lignes hor forfais qui vienne d'être entrer par l'utilisateur a la fiche de frais
            $LigneFF = $FIche->getLigneForfais();
            foreach ($LigneFF as $uneLigneFF) {
                if ($uneLigneFF->getFichefrai() == null) {
                    $uneLigneFF->setMontant($uneLigneFF->getQuantite()*$uneLigneFF->getFraisForfais()->getMontant());
                    $uneLigneFF->setFichefrai($FIche);
                }
            }
            $LigneHF = $FIche->getLigneHorForfait();
            foreach ($LigneHF as $uneLigneHF){
                if ($uneLigneHF->getFichefrai() == null ){
                    $uneLigneHF->setFichefrai($FIche);
                }
            }
            $Justificatif = $FIche->getJustificatif();
            foreach ($Justificatif as $unJustificatif) {
                if ($unJustificatif->getFichefrai() == null){
                    $unJustificatif->setFichefrai($FIche);

                    $file = $unJustificatif->getFile();

                    //On Génere un nom unique au fichié:
                    $num = 0;
                    foreach ( $this->getDoctrine()->getRepository('TestBundle:Justificatif')->findAll() as $unefiche){
                        if ($unefiche->getId() > $num){
                            $num = $unefiche->getId();
                        }
                    }
                    $fileName = (1+$num).'.'.$file->guessExtension();
                    $url = $this->getParameter('Justificatif_Directory')."/".($num+1);
                        //On enregistre le fichier dans le bon dossier :

                    mkdir($url);
                    $file->move(
                        $url,
                        $fileName
                    );
                    //Mise a jouer du nom du fichier
                    $unJustificatif->setURL($fileName);
                    $unJustificatif->setId(($num+1));

                }
            }

            //On verfier si la Fiche n'est pas vide si elle est vide on la supprime :
            if (count($FIche->getLigneForFais()) > 0 || count($FIche->getLigneHorForFait())  >0) {
                //On envoi les donnée a la BDD
                $em2->persist($FIche);
            }else{

                    $em2->remove($FIche);
            }

            $em2->flush();
            //on redirige l'utilisateur a la page d'acceuil
            //return $this->redirectToRoute('test_renseignerfichefrais');
        }
        //Recuperation de la date de jour
        $Datej = new \DateTime();

        return $this->render('TestBundle:Default:RenseignerFicheFrais.html.twig',array('LesJustificatif'=>$FIche->getJustificatif(),'Datey'=>$Datej->format('Y'),'Datem'=>$Datej->format('m'),'Datej'=>$Datej->format('d'),'FicheFrais' => $FIche,'form1'=>$form1->createView(),'MontantValide'=>$FIche->getMontantValide(),'DateMois'=>$Date->format('F'),'DateAnne'=>$Date->format('Y')));
    }
//------------------------------------------------FIN FONCTION AJOUT/SUPPRSSION LIGNE FORFAIT ET HOR FORFAIT -----------------------------------



//------------------------------------------------CONSULTER FICHE FRAIS POUR L'UTILISATEUR------------------------------------------------------
    public function consulterAction(Request $request)
    {
        //Recuperation de l'utilisateur actuel :
        $USER = $this->getUser();
        if ( !in_array('ROLE_UTILISATEUR',$USER->getroles()) ){
            return $this->redirectToRoute('test_homepage');///-----------------------------A MODIFIER-------------------------
        }

        //Verification que le formulaire a bien été envoyer avec la methode post
        if ($request->isMethod('POST')) {
            //Verification que la valeur mois a bien été revoyé :
            if ($request->request->get('mois') != null ) {
                $mois = new \DateTime($request->request->get('mois'));
                //On recherche la fiche de l'utilisateur du mois correspondant :
                $Fiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findOneBy(array('visiteur'=> $USER,'Mois' => $mois ));

                $nom = $USER->getNom();
                $prenom = $USER->getPrenom();

                //On retourne les information a afficher
                if ($Fiche != null) {
                    return $this->render('TestBundle:Default:FicheFrais.html.twig', array('Fiche' => $Fiche, 'Mois' => $mois->format('F'), 'Annee' => $mois->format('Y'),'nom'=>$nom,'prenom'=>$prenom));
                }
            }
        }

        //Recuperation des fiches de l'utilisateur
        $Fiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findByVisiteur($USER);

        //Creation d'un tableau que l'on replie avec les année comportent une ou plusieur fiche
        $Date = new ArrayCollection();
        foreach ($Fiche as $unefiche) {
            $uneDate = $unefiche->getMois();
            if ($Date->contains($uneDate->format('Y')) == false) {
                $Date->add($uneDate->format('Y'));
            }

        }

        //On renvoie Les fiches de l'utilisateur afin d'afficher les information de ces derniere dans un tableau, ainsi que le tableau remplie si dessus
        return $this->render('TestBundle:Default:Consulter.html.twig',array('LesFiches' => $Fiche,'LesDates' => $Date));
    }
//------------------------------------------------ FIN CONSULTER FICHE FRAIS POUR L'UTILISATEUR------------------------------------------------------

    //-------------------------------------------------FIN PAGE USER--------------------------------------------------------------



    //-------------------------------------------------PAGE COMPTABLE--------------------------------------------------------------

    //-------------------------------------------------FONCTION COSULTATION/RECHERCHE FICHE FRAIS-------------
    public function consultercAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //Decaration de variable qui contiendra le message d'erreur
        $Erreur_Message =null;

        $Recherche = false;
        $LesVisiteur =null;


        //Definition du formulaire de recherche
        $formRecherche =$this->createForm(RechercheUtilisateurType::class);
        $formRecherche->handleRequest($request);

        //On verifie si le formulaire de recherche est bien remplie et valide :
        if ($formRecherche->isSubmitted() && $formRecherche->isValid()) {

            $Recherche = true;
            $data = $formRecherche->getData();

            // On récupere les données du formulaire :
            $prenom = $data['prenom'];
            $nom = $data['nom'];
            $etat = $data['etat'];
            $mois = $data['mois'];
            $annee = $data['annee'];

            //On fait appelle a la fonction de recherche:
            $LesVisiteur = $em->getRepository('TestBundle:FicheFrais')->findByCriteres($nom,$prenom,$etat,$mois,$annee);

        }

        //Fonction appelle lorsque que le comptable veut consulter ou valider une fiche :
        if ($request->isMethod('POST')) {


            //SI le mode est egal a 1 il s'agite d'une consultation de fiche :
            if ($request->request->get('mode') == 2) {
                //On verifie que les champs ne soit pas vide :
                if ($request->request->get('id') != null && $request->request->get('id_visiteur') != null) {
                    //On recupere la fiche correspondante, ainsi que l'utilisateur :
                    $Fiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findOneByid($request->request->get('id'));
                    $user = $this->getDoctrine()->getRepository('TestBundle:Visiteur')->findOneByid($request->request->get('id_visiteur'));


                    $mois = $Fiche->getMois();
                    $nom = $user->getNom();
                    $prenom = $user->getPrenom();


                    //On retourne les information a afficher
                    if ($Fiche != null) {
                        return $this->render('TestBundle:Default:FicheFrais.html.twig', array('nom' => $nom, 'prenom' => $prenom, 'Fiche' => $Fiche, 'Mois' => $mois->format('F'), 'Annee' => $mois->format('Y')));
                    }

                }
                $Erreur_Message = "Une erreur est survenue lors de l'affichage de la Fiche.";
            } else {
                //Si mode est egal a 1 le comptable souhaite valider une fiche :
                if ($request->request->get('mode') == 1) {
                    //on verifie que les champs on bien été remplie :
                    if ($request->request->get('id') != null && $request->request->get('id_visiteur') != null) {
                        //On renvoie les information sur la page de validation :
                            return $this->redirect($this->generateUrl('test_validerfichefrais',array('id_fiche'=> $request->request->get('id'),'id_visiteur'=>$request->request->get('id_visiteur'))));
                    }
                    $Erreur_Message = "Une erreur est survenue lors de l'affichage de la Fiche.";
                }
            }
        }

        return $this->render('TestBundle:Default:ConsulterC.html.twig',array("erreur"=>$Erreur_Message,"form"=>$formRecherche->createView(),"resultat"=>$LesVisiteur,"Recherche" => $Recherche));
        //return $this->render('TestBundle:Default:ConsulterC.html.twig',array('User'=>$user,'id'=>$id,'LesFiches' => $Fiche,'LesDates' => $Date));
    }
    //-------------------------------------------------FIN FONCTION COSULTATION/RECHERCHE FICHE FRAIS-------------



    //-------------------------------------------------FONCTION VALIDATION FICHE FRAIS----------------------------
    public function validerAction($id_fiche,$id_visiteur,Request $request){

        // On recupére la fiche et l'utilisateur correspondant au id fournit
        $Fiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findOneByid($id_fiche);
        $user = $this->getDoctrine()->getRepository('TestBundle:Visiteur')->findOneByid($id_visiteur);

        //Si l'etat de la fiche n'est pas cloturé la fiche ne peut pas etre valdier on redirige donc le comptable :
        if ($Fiche->getEtat()->getid() != "Cloturé"){
            return $this->redirectToRoute('test_consulterfichefraisC');
        }

        //On crée le formulaire pour la validation :
        $form1 =$this->createForm('TestBundle\Form\FicheFraisType',$Fiche);
        $form1->handleRequest($request);

        //Si le formulaire est remplie et valide :
        if ($form1->isSubmitted() && $form1->isValid()) {

            $em = $this->getDoctrine()->getManager();

            //Mise a jour du montant total :
            $MontantValide = 0;
            foreach ( $Fiche->getLigneForFais() as $uneLigne){
                if ($uneLigne->getValide()){
                    $MontantValide = $uneLigne->getMontant() + $MontantValide;
                }
            }

            foreach ( $Fiche->getLigneHorForFait() as $uneLigne){
                if ($uneLigne->getValide()){
                    $MontantValide = $uneLigne->getMontant() + $MontantValide;
                }
            }
            $Fiche->setMontantValide($MontantValide);

            //Mise a jour de l'etat de la fiche :
            $Fiche->setEtat($this->getDoctrine()->getRepository('TestBundle:Etat')->findOneByid('En paiment'));

            //On envoie les modification :
            $em->persist($Fiche);
            $em->flush();

            //On redirige le comptable a la page de consultation
            return $this->redirectToRoute('test_consulterfichefraisC');
        }

        return $this->render('TestBundle:Default:Valider.html.twig', array('Fiche' => $Fiche, 'Name' => $user->getNom(), 'Prenom' => $user->getPrenom(), 'form1' => $form1->createView(), 'DateMois' => $Fiche->getMois()->format('F'), 'DateAnne' => $Fiche->getMois()->format('Y')));
    }
    //-------------------------------------------------FIN FONCTION VALIDATION FICHE FRAIS----------------------------



//-------------------------------------------------FIN PAGE COMPTABLE--------------------------------------------------------------

    public function RembourseAction(){


        return $this->render('TestBundle:Default:Rembourse.html.twig');
    }

}
