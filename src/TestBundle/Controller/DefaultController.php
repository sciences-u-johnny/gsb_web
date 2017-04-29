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
        //Création du formulaire d'ajout d'utilisateur
        $form = $this->createForm('TestBundle\Form\VisiteurType',$user);
        //Récupération du formulaire envoyer par la page HTML
        $form->handleRequest($request);


        //Verification que le formulaire a bien été remplie
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            //Création du nouvelle utilisateur
            $user_manager = $this->get("fos_user.user_manager");
            $user_manager -> updateUser($user);
            //Envoie les modification a la base de données
            $em->flush();
            //Redirectin de l'utilisateur a la page d'accueil
            return $this->redirectToRoute('test_homepage');
        }
        //Envoie du formulaire a la page d'ajout utilisateur
        return $this->render('TestBundle:Default:addVisiteur.html.twig',array('form'=>$form->createView()));
    }
    //------                Fin fonction Ajout d'un Utilisateur         ------




    //Function Page Suppretion Utilisateur :
    public function removeVisiteurAction(Request $request){


        //Verification que le formulaire a bien été envoyer avec la methode post
        if ($request->isMethod('POST'))
        {
            //Verification que id renvoie bien une valeur.
            if ($request->request->get('id') != null){
                //Récupération de l'id envoyé par le fomulaire
                $id = $request->request->get('id');
                //Récupération de l'utilisateur correspondant à l'id renvoyé
                $USER = $this->getDoctrine()->getRepository('TestBundle:Visiteur')->findOneByid($id);

                //Suppression de l'utilisateur sur la base de données
                $em = $this->getDoctrine()->getEntityManager();
                $em->remove($USER);
                $em->flush();
            }
        }

            // Recuperation des Utilisateur :
            $LesUsers = $this->getDoctrine()->getRepository('TestBundle:Visiteur')->findAll();

        //Envoie des utilisateurs a la page supretion d'utilisateur
        return $this->render('TestBundle:Default:removeVisiteur.html.twig',array('LesUtilisateurs'=>$LesUsers));
    }
    //Fin fonction supretion d'utilisateur

    //------------------------------------------------FIN PAGE ADMIN------------------------------------------------------------





    //------------------------------------------------PAGE ACCEUIL--------------------------------------------------------------
    public function acceuilAction(Request $request)
    {

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
                    //On envoie les modification a la base de données
                    $em->persist($UneFiche);
                    $em->flush();
                }

            }

        }
        //----------------      FIN  Mise a l'etat "Valide" des fiches     -----------------------
        //----------------      Mise a l'etat "Cloturé" des fiches         -----------------------
        
                //Si la jour (d) de la date du jour est > 20 on récupère toute les fiche dans l'état cloturé et on les passe dans l'état invalide
                if ($DateJ->format('d') > 20) {
                    $LesFiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findByetat('Cloturé');
                    $Etat_U = $this->getDoctrine()->getRepository('TestBundle:Etat')->findOneByid("Invalide");
                    foreach ($LesFiche as $UneFiche){
                        $em = $this->getDoctrine()->getManager();

                        //On Modifie l'état de la fiche pour la passer a l'état "Invalide"
                        $UneFiche->setEtat($Etat_U);
                        //On envoie les modification a la base de données
                        $em->persist($UneFiche);
                        $em->flush();
                    }
                }

        //Récupération de l'utilisateur actuel puis de son role
        $USER = $this->getUser();
        $role = $USER->getroles();


        //Si l'utlisateur est un comptable on le redirige vers la page de consultation
        if ($role[0] == "ROLE_COMPTABLE"){
            return $this->redirectToRoute('test_consulterfichefraisC');
        }//Si l'utilisateur est un utilisateur on le redirige vers la page de renseignement des fiches frais
        elseif ($role[0] == "ROLE_UTILISATEUR"){
            return $this->redirectToRoute('test_renseignerfichefrais');
        }
            //Si non c'est que l'utilisateur est un admin on le laisse donc sur la page d'acceuil
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


        //Récupération de la date: si elle est supérieur au 10 du mois on passe au mois suivant
        $Date = new \DateTime();
        if ($Date->format('d') >= 10 ){
            $Date->modify('+1 month');
        }


        //Déclaration de la Variable Fiche qui va prendre pour valeur la fiche qui va être enregistré
        //et la variable ficheoriginal qui va prendre pour valeur la fiche avant modification
        $FIche = null;
        $FicheOrigine = null;
        //On recherche dans les fiches de l'utilisateur si il existe une fiche pour le mois en cours
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
            //On recupere l'etat "crée" pour l'assigner a la fiche
            $Etat_U = $this->getDoctrine()->getRepository('TestBundle:Etat')->findOneByid("Crée");
            //On crée une nouvelle fiche avec le bon mois,l'etat "Crée" et l'utilisateur.
            $FIche = new FicheFrais($Etat_U,$USER,$Date);
            //On ajoute une Ligne Forfais et une Ligne hors forfais a cette nouvelle fiche
            if ($request->isMethod("POST") == false) {
                $FIche->addLigneForFai(new LigneForfais());
                $FIche->addLigneHorForFait(new LigneHorForfait());
            }
        }

        // Récuperation des Lignes Forfaits et Hors Forfaits présent dans la fiche original
        $originalFraisForfait = new ArrayCollection();
        $originalHorForfait = new ArrayCollection();
        $originalJustificatif = new ArrayCollection();

        //Si fiche original est vide c'est que nous venons de créer une nouvelle fiche.
        //Si non on récupère les Ligne Forfais et Hors Forfais pour pouvoir supprimer celle que l'utilisateur aurai supprimé
        //lors de la sauvegarde de la fiche
        if ($FicheOrigine != null) {
            //Récupération des Lignes Forfaits
            foreach ($FicheOrigine->getLigneForfais() as $Une) {
                $originalFraisForfait->add($Une);
            }

            //Récupération des Lignes Hors Forfaits
            foreach ($FicheOrigine->getLigneHorForfait() as $Une) {
                $originalHorForfait->add($Une);
            }
            //Récupération des Justificatifs
           foreach ($FicheOrigine->getJustificatif() as $Une){
               $originalJustificatif->add($Une);
           }

            // Si il existe aucune Ligne Forfait ou hors Forfait on en crée des nouvelles
            if ($originalFraisForfait->count() == 0) {
                $FIche->addLigneForfai(new LigneForfais());
            }
            if ($originalHorForfait->count() == 0) {
                $FIche->addLigneHorForfait(new LigneHorForfait());
            }
        }

        //On crée un Formulaire pour la fiche
        $form1 =$this->createForm('TestBundle\Form\FicheFraisType',$FIche);
        //On récupère les données qui aurai été retourné
        $form1->handleRequest($request);



        //Si le formulaire a été renvoyer et remplie on l'enregistre
        if ($form1->isSubmitted() && $form1->isValid()){
            $em2 = $this->getDoctrine()->getManager();

            if ($FicheOrigine != null) {

                //Suppression des Ligne supprimer par l'utilisateur
                //On récupère les tableaux remplie précédemment avec les Ligne avant modification de l'utilisateur
                //On vérifie si celle-ci sont encore présente dans le formulaire qui a été renvoyé pour les supprimer si ce n’est pas le cas
                foreach ($originalFraisForfait as $uneLigne) {
                    if ($FIche->getLigneForfais()->contains($uneLigne) != true) {
                        //On détache la ligne de la fiche
                        $uneLigne->setFichefrai(null);
                        //Suppression de la ligne sur la base de données
                        $em2->remove($uneLigne);
                    }
                }
                // de même pour les lignes hors forfais
                foreach ($originalHorForfait as $uneLigne) {
                    if ($FIche->getLigneHorForfait()->contains($uneLigne) != true) {
                        //On détache la ligne de la fiche
                        $uneLigne->setFichefrai(null);
                        //Suppression de la ligne sur la base de données
                        $em2->remove($uneLigne);

                    }
                }
                // de même pour les Justificatif :
                foreach ($originalJustificatif as $uneLigne) {
                    if ($FIche->getJustificatif()->contains($uneLigne) != true) {
                        //On détache le justificatif de la fiche
                        $uneLigne->setFichefrai(null);

                        //On supprime le justificatif qui a été enregistré sur le serveur
                        $fs = new Filesystem();
                        //Récupération de l'url du justificatif
                        $url = $this->getParameter('Justificatif_Directory')."/".$uneLigne->getId();
                        $fs->remove( $url, $uneLigne->getURL());

                        //Suppression du justificatif enregistré sur la base de données
                        $em2->remove($uneLigne);
                    }
                }
            }else{
                //Si il n'y a pas de fiche original et que la fiche est vide cela s'ignifie que l'utilisateur a rentré une fiche vide
                //On n'annule donc l'enregistrement de la fiche
                if (count($FIche->getLigneHorForFait()) == 0 && count($FIche->getLigneForFais()) == 0){
                    return $this->redirectToRoute('test_renseignerfichefrais');
                }
            }

            //On relie tout les lignes forfaits, lignes hors forfaits et justificatif qui vienne d'être entrer par l'utilisateur a la fiche de frais
            $LigneFF = $FIche->getLigneForfais();
            foreach ($LigneFF as $uneLigneFF) {
                if ($uneLigneFF->getFichefrai() == null) {
                    //On calcule le montant du frais
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
                    //Récupération de tout les justificatif
                    foreach ( $this->getDoctrine()->getRepository('TestBundle:Justificatif')->findAll() as $unefiche){
                        //On récupère l'id le plus grand 
                        if ($unefiche->getId() > $num){
                            $num = $unefiche->getId();
                        }
                    }
                    //On crée le nom du justificatif et l'url du dossier dans lequel il va être enregistré
                    $fileName = (1+$num).'.'.$file->guessExtension();
                    $url = $this->getParameter('Justificatif_Directory')."/".($num+1);
                    
                    //On crée le dossier puis enregistre le fichier dans ce dossier :
                    mkdir($url);
                    $file->move(
                        $url,
                        $fileName
                    );
                    //Mise a jour du nom du fichier et de l'id du justificatif
                    $unJustificatif->setURL($fileName);
                    $unJustificatif->setId(($num+1));

                }
            }

            //On verfier si la Fiche n'est pas vide si elle est vide on la supprime :
            if (count($FIche->getLigneForFais()) > 0 || count($FIche->getLigneHorForFait())  >0 ||count($Fiche->getJustificatif()) > 0) {
                //On envoi les donnée a la BDD
                $em2->persist($FIche);
            }else{
                    //On supprime la fiche de la base de données
                    $em2->remove($FIche);
            }

            $em2->flush();
        }
        //Recuperation de la date de jour
        $Datej = new \DateTime();

        //Envoie des données nécessaire pour le bon fonctionnement de la page (Formulaire de renseignement d'un fiche, Date du jour, ...)
        return $this->render('TestBundle:Default:RenseignerFicheFrais.html.twig',array('LesJustificatif'=>$FIche->getJustificatif(),'Datey'=>$Datej->format('Y'),'Datem'=>$Datej->format('m'),'Datej'=>$Datej->format('d'),'FicheFrais' => $FIche,'form1'=>$form1->createView(),'MontantValide'=>$FIche->getMontantValide(),'DateMois'=>$Date->format('F'),'DateAnne'=>$Date->format('Y')));
    }
//------------------------------------------------FIN FONCTION AJOUT/SUPPRSSION LIGNE FORFAIT ET HOR FORFAIT -----------------------------------



//------------------------------------------------CONSULTER FICHE FRAIS POUR L'UTILISATEUR------------------------------------------------------
    public function consulterAction(Request $request)
    {
        //Verification que le formulaire a bien été envoyer avec la methode post
        if ($request->isMethod('POST')) {
            //Verification que la valeur mois a bien été revoyé :
            if ($request->request->get('mois') != null ) {
                //Récupération de valeur de "mois" qui a été envoyé
                $mois = new \DateTime($request->request->get('mois'));

                //On recherche la fiche de l'utilisateur du mois correspondant :
                $Fiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findOneBy(array('visiteur'=> $this->getUser(),'Mois' => $mois ));

                //On récupère le nom et le prénom de l'utilisateur
                $nom = $this->getUser()->getNom();
                $prenom = $this->getUser()->getPrenom();

                //On retourne les information a afficher si une fiche a été trouvée
                if ($Fiche != null) {
                    return $this->render('TestBundle:Default:FicheFrais.html.twig', array('Fiche' => $Fiche, 'Mois' => $mois->format('F'), 'Annee' => $mois->format('Y'),'nom'=>$nom,'prenom'=>$prenom));
                }
            }
        }

        //Recuperation des fiches de l'utilisateur
        $Fiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findByVisiteur($this->getUser());

        //Création d'un tableau que l'on remplit avec les années qui possèdent une ou plusieurs fiches
        $Date = new ArrayCollection();
        foreach ($Fiche as $unefiche) {
            $uneDate = $unefiche->getMois();
            if ($Date->contains($uneDate->format('Y')) == false) {
                $Date->add($uneDate->format('Y'));
            }

        }

        //On renvoie Les fiches de l'utilisateur afin d'afficher les information de ces derniere dans un tableau, ainsi que le tableau remplie ci-dessus
        return $this->render('TestBundle:Default:Consulter.html.twig',array('LesFiches' => $Fiche,'LesDates' => $Date));
    }
//------------------------------------------------ FIN CONSULTER FICHE FRAIS POUR L'UTILISATEUR------------------------------------------------------

    //-------------------------------------------------FIN PAGE USER--------------------------------------------------------------



    //-------------------------------------------------PAGE COMPTABLE--------------------------------------------------------------

    //-------------------------------------------------FONCTION COSULTATION/RECHERCHE FICHE FRAIS-------------
    public function consultercAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //Decaration de la variable qui contiendra le message d'erreur
        $Erreur_Message =null;

        //Variable pour vérifier si une recherche a été effectué
        $Recherche = false;

        //Variable qui contient le résultat de la recherche
        $LesVisiteur =null;


        //Création du formulaire de recherche
        $formRecherche =$this->createForm(RechercheUtilisateurType::class);
        //Récupération des données retourné par la page
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


            //SI le mode est egal a 2 il s'agite d'une consultation de fiche :
            if ($request->request->get('mode') == 2) {
                //On vérifie que les champs ne soit pas vide :
                if ($request->request->get('id') != null && $request->request->get('id_visiteur') != null) {
                    //On récupère la fiche correspondante, ainsi que l'utilisateur :
                    $Fiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findOneByid($request->request->get('id'));
                    $user = $this->getDoctrine()->getRepository('TestBundle:Visiteur')->findOneByid($request->request->get('id_visiteur'));

                    

                    //On retourne les information a afficher si une fiche a été trouvé
                    if ($Fiche != null) {
                        //On récupère le mois de la fiche ainsi que le nom et le prénom de l'utilisateur
                        $mois = $Fiche->getMois();
                        $nom = $user->getNom();
                        $prenom = $user->getPrenom();

                        return $this->render('TestBundle:Default:FicheFrais.html.twig', array('nom' => $nom, 'prenom' => $prenom, 'Fiche' => $Fiche, 'Mois' => $mois->format('F'), 'Annee' => $mois->format('Y')));
                    }

                }
                $Erreur_Message = "Une erreur est survenue lors de l'affichage de la Fiche.";
            } else {
                //Si mode est egal a 1 le comptable souhaite valider une fiche :
                if ($request->request->get('mode') == 1) {
                    //on verifie que les champs on bien été remplie :
                    if ($request->request->get('id') != null && $request->request->get('id_visiteur') != null) {
                        //On récupère la fiche corespondant a l'id
                         $Fiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findOneByid($request->request->get('id'));
                         //On vérifie qu'une fiche a bien été trouvé
                         if ($Fiche != null){
                            //On renvoie les information sur la page de validation :
                            return $this->redirect($this->generateUrl('test_validerfichefrais',array('id_fiche'=> $Fiche->getId(),'id_visiteur'=>$request->request->get('id_visiteur'))));
                        }
                    }
                    $Erreur_Message = "Une erreur est survenue lors de l'affichage de la Fiche.";
                }
            }
        }
        //On renvoie les information sur la page de consultation des comptables :
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
        //Récupération des données retourné par la page
        $form1->handleRequest($request);

        //Si le formulaire est remplie et valide :
        if ($form1->isSubmitted() && $form1->isValid()) {

            $em = $this->getDoctrine()->getManager();

            //Variable permettant de vérifier si au moin un frais a été validé
            $UneLigneValide = false;

            //Mise a jour du montant total :
            $MontantValide = 0;
            foreach ( $Fiche->getLigneForFais() as $uneLigne){
                if ($uneLigne->getValide()){
                    $UneLigneValide = true;
                    $MontantValide = $uneLigne->getMontant() + $MontantValide;
                }
            }

            foreach ( $Fiche->getLigneHorForFait() as $uneLigne){
                if ($uneLigne->getValide()){
                    $UneLigneValide = true;
                    $MontantValide = $uneLigne->getMontant() + $MontantValide;
                }
            }
            $Fiche->setMontantValide($MontantValide);

            //Si la fiche a au moins une ligne valider on la passe dans l'état 'En paiement' si non on la passe dans l'état 'Invalide'
            if ($UneLigneValide){
                //Mise a jour de l'etat de la fiche :
                $Fiche->setEtat($this->getDoctrine()->getRepository('TestBundle:Etat')->findOneByid('En paiment'));
            }else{
                //Mise a jour de l'etat de la fiche :
                $Fiche->setEtat($this->getDoctrine()->getRepository('TestBundle:Etat')->findOneByid('Invalide'));
            }

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
}
