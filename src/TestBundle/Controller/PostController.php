<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use TestBundle\Entity\Etat;

class PostController extends Controller
{
    //Fonction qui vérifie les identifiant d'une personne qui ce connecte sur l'aplication mobile
    public function connectAction(Request $request){

        $success = false;
        $message = "";

        $Username = $request->query->get('Username');
        $password = $request->query->get('password');

        $User = $this->getDoctrine()->getRepository('TestBundle:Visiteur')->findOneByusername($Username);
        //findOneBy(array('username'=> $Username,'password' => $password));
        if ($User) {
            $encoder_service = $this->get('security.encoder_factory');
            $encoder = $encoder_service->getEncoder($User);
            $success = $encoder->isPasswordValid($User->getPassword(), $password, $User->getSalt());

            if($success){
                $token = new UsernamePasswordToken($User, $User->getPassword(), 'main', $User->getRoles());

                $context = $this->get('security.token_storage');
                $context->setToken($token);
                $message = $User->getId();
            }else{
                $message = "Connexion refusee";

            }
        }else{
            $message = "Utilisateur inconnu";
        }

        $response = new JsonResponse();
        $response->setData(array(
            'success' => $success,
            'message' => $message
        ));


        return $response;
    }

    //Fonction qui renvoie toute les fiche de l'utilisateur apres sa connection (ID_Fiche,Date_Fiche,Etat_Fiche) :
    public function listeficheAction(Request $request){

    $success = false;
    $message = "";

    $ID = $request->get('ID');

    $User = $this->getDoctrine()->getRepository('TestBundle:Visiteur')->findOneByid($ID);

    $Fiche = array();
    if ($User){

    $LesFiches = $User->getFicheFrai();
    if ($LesFiches){
    $i = 0;
    foreach ($LesFiches as $uneFiche) {
        $LaFiche = array('ID'=>$uneFiche->getID(),
            'etat'=>$uneFiche->getetat()->getid(),
            'Date'=>$uneFiche->getMois()->format('m-Y'));
        $Fiche[] = $LaFiche;
        $i = $i + 1;
    }
    $success = true;
    }else{
        $message = "Aucune fiche n'a été trouvé";
    }
}else{
    $message = "Erreur utilisateur introuvable";
    }
        $response = new JsonResponse();
        if ($success == true){
        $response->setData(array('success' => $success,'LesFiches'=>$Fiche));
        }else{
            $response->setData(array('success' => $success,'message' => $message));
        }
        return $response;
    }

    //Fonction qui renvoie tout les information d'une fiche (Ligne Fofais et hor forfais, Monatant valide,Date Fiche) :
    public function infoficheAction(Request $request){
        $success = false;
        $message = "";
        $montant_valide = "";
        $Date = "";
        $Etat_Fiche = "";

        $Id_Fiche = $request->get('ID');
        $LaFiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findOneByid($Id_Fiche);

        $LigneForfais = array();
        $LigneHorForfais = array();

        if ($LaFiche){
            $success = true;
            $Date = $LaFiche->getMois()->format('m-Y');
            $montant_valide = $LaFiche->getMontantValide();
            $Etat_Fiche = $LaFiche->getEtat()->getid();

            $LesLignes = $LaFiche->getLigneForFais();
            foreach ($LesLignes as $uneLigne) {
                $Laligne = array('date' => $uneLigne->getdate()->format('d-m-Y'),
                                'type' => $uneLigne->getFraisForfais()->getid(),
                                'quantite'=> $uneLigne->getquantite(),
                                'montant' => $uneLigne->getmontant(),
                                'valide'=> $uneLigne->getValide());
                $LigneForfais[] = $Laligne;
                }
                $LesLignes = $LaFiche->getLigneHorForFait();
                foreach ($LesLignes as $uneLigne) {
                $Laligne = array('date' => $uneLigne->getdate()->format('d-m-Y'),
                                'libelle' => $uneLigne->getlibelle(),
                                'montant'=> $uneLigne->getmontant(),
                                'valide' => $uneLigne->getValide());
                $LigneHorForfais[] = $Laligne;
                }


        }else{
            $message = "Erreur fiche introuvable";
        }

         $response = new JsonResponse();
         if ($success == true){
                 $response->setData(array('success' => $success,'etat'=>$Etat_Fiche,'montant_v'=>$montant_valide,'Date_Fiche'=>$Date,'LigneForfais'=>$LigneForfais,'LigneHor'=>$LigneHorForfais));
            }else{
                $response->setData(array('success' => $success,'message' => $message));
            }
        return $response;

    }

}