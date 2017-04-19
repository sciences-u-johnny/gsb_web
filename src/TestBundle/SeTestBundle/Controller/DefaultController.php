<?php

namespace TestBundle\SeTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function loginAction(Request $request)
    {

        $user = $this->getDoctrine()->getRepository('TestBundle:Visiteur')->findByLogin($request->get('login'));
        if (!$user){
            foreach ($user as $item) {
                if ($request->get('password') == $item->getPassword()){

                    return $this->redirectToRoute('test_homepage');
                }
            }
        }
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('test_homepage');
        }

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('login.html.twig', array('last_username' => $authenticationUtils->getLastUsername(),'error'=> ""));
    }
}
