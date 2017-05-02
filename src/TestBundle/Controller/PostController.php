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

        //Déclaration de variable à envoyer en JSON
        $success = false;
        $message = "";

        //Récupération des données transmise par l'application Android
        $Username = $request->query->get('Username');
        $password = $request->query->get('password');

        //On récupère l'utilisateur qui correspond au nom d'utilisateur récupéré précédemment
        $User = $this->getDoctrine()->getRepository('TestBundle:Visiteur')->findOneByusername($Username);
        
        //Si on a trouvé un utilisateur on continue si non on retourne un message d'erreur
        if ($User) {

            //On encode le mdp reçus puis on le compare avec celui de la base de données
            $encoder_service = $this->get('security.encoder_factory');
            $encoder = $encoder_service->getEncoder($User);
            $success = $encoder->isPasswordValid($User->getPassword(), $password, $User->getSalt());

            //Si les deux mdp corresponde on récupère l'id de l'utilisateur
            if($success){
                //On vérifie que la personne qui se connecte soit bien un utilisateur et non un comptable
                if (in_array("ROLE_UTILISATEUR", $User->getroles())){


                $token = new UsernamePasswordToken($User, $User->getPassword(), 'main', $User->getRoles());
                $context = $this->get('security.token_storage');
                $context->setToken($token);
                $message = $User->getId();
            }else{
                $success = false;
                 $message = "Connexion refusee, accès réservé aux utilisateurs";
            }
            }else{
                $message = "Connexion refusee";

            }
        }else{
            $message = "Utilisateur inconnu";
        }

        //On crée la réponse au format JSON
        $response = new JsonResponse();
        $response->setData(array(
            'success' => $success,
            'message' => $message
        ));

        //On retourne la réponse sur la page
        return $response;
    }


    //Fonction qui renvoie toute les fiche de l'utilisateur apres sa connection (ID_Fiche,Date_Fiche,Etat_Fiche) :
    public function listeficheAction(Request $request){

    //Déclaration de variable à envoyer en JSON
    $success = false;
    $message = "";

    //Récupération des données transmise par l'application Android
    $ID = $request->get('ID');

    //On récupère l'utilisateur qui correspond a l'id récupéré précédemment
    $User = $this->getDoctrine()->getRepository('TestBundle:Visiteur')->findOneByid($ID);

    //On crée un tableau pour stocker toute les fiches de l'utilisateur
    $Fiche = array();
    if ($User){

    //On récupéré dans la variables lesFiches toute les fiches de l'utilisateur
    $LesFiches = $User->getFicheFrai();

    //Si il existe au moins une fiche on va toute les parcourir afin de récupéré leur état, date, et id pour les renvoyer dans le JSON
    if ($LesFiches){
        if (count($LesFiches) > 0){
    foreach ($LesFiches as $uneFiche) {
        $LaFiche = array('ID'=>$uneFiche->getID(),
            'etat'=>$uneFiche->getetat()->getid(),
            'Date'=>$uneFiche->getMois()->format('m-Y'));
        $Fiche[] = $LaFiche;
        }
    $success = true;
    }else{
        $message = "Aucune fiche n'a été trouvé";
    }
    
    }else{
        $message = "Aucune fiche n'a été trouvé";
    }
}else{
    $message = "Erreur utilisateur introuvable";
    }


        //On crée la réponse au format JSON si success est true il n'y a eu aucune erreur donc on retourne les informations des fiches, sinon on retourne message qui contient l'erreur rencontré
        $response = new JsonResponse();
        if ($success == true){
        $response->setData(array('success' => $success,'LesFiches'=>$Fiche));
        }else{
            $response->setData(array('success' => $success,'message' => $message));
        }
         //On retourne la réponse sur la page
        return $response;
    }


    //Fonction qui renvoie tout les information d'une fiche (Ligne Fofais et hors forfais, Monatant valide,Date Fiche) :
    public function infoficheAction(Request $request){

        //Déclaration de variable à envoyer en JSON
        $success = false;
        $message = "";
        $montant_valide = "";
        $Date = "";
        $Etat_Fiche = "";

        //Récupération des données transmise par l'application Android
        $Id_Fiche = $request->get('ID');

        //On récupère la fiche qui correspond au l'id récupéré précédemment
        $LaFiche = $this->getDoctrine()->getRepository('TestBundle:FicheFrais')->findOneByid($Id_Fiche);

        //On crée deux tableaux pour stocker les lignes Forfaits et hors forfaits de la fiche
        $LigneForfais = array();
        $LigneHorForfais = array();

        //Si une fiche a été trouvé on récupère les informations de ces frais forfaits (date, type, quantité, montant du frais, si le frais a été validé ou non) et
        //de ces frais hors forfaits (date, libelle, montant du frais, si le frais a été validé ou non), sinon on retourne message qui contient l'erreur rencontré
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


        //On crée la réponse au format JSON si success est true il n'y a eu aucune erreur donc on retourne les informations de la fiches, sinon on retourne message qui contient l'erreur rencontré
         $response = new JsonResponse();
         if ($success == true){
                 $response->setData(array('success' => $success,'etat'=>$Etat_Fiche,'montant_v'=>$montant_valide,'Date_Fiche'=>$Date,'LigneForfais'=>$LigneForfais,'LigneHor'=>$LigneHorForfais));
            }else{
                $response->setData(array('success' => $success,'message' => $message));
            }
        //On retourne la réponse sur la page
        return $response;

    }

}