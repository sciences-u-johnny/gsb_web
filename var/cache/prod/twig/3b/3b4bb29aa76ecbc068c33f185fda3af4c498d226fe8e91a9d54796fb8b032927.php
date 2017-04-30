<?php

/* TestBundle::layout.html.twig */
class __TwigTemplate_b3c8966a6b71c85d25bf5bb63ff2715307c0d3f15eef7223dd58bc3ead7303ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<!-- Page Permettent l'import de boostrap dans toute les autres pages mais aussi de l'affichage de la barre de menu  -->
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/jquery.js"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/StyleNav.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/jquery.easing.js"), "html", null, true);
        echo "\">
    </head>
    <body>
       <div class=\"container\" style=\"z-index: 1000;\">
           <nav class=\"navbar navbar-inverse navbar-fixed-top\">
               <div class=\"navbar-collapse collapse sidebar-navbar-collapse\">
                   <ul class=\"nav navbar-nav\">
                       <img style=\"max-width: 100%; height: auto;margin-bottom: 50px\" alt=\"logo\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/logo3.png"), "html", null, true);
        echo "\">

                       <!-- On gère l'affichage de la barre de menu en fonction de quelle utilisateur se connecte -->
                               ";
        // line 24
        if ($this->env->getExtension('security')->isGranted("ROLE_UTILISATEUR")) {
            // line 25
            echo "
                                   <li id=\"liU\"><a style=\"border-color: transparent\" class=\"btn btn-lg btn-block\" href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("test_renseignerfichefrais");
            echo "\">Renseigner Fiche</a></li>
                                   <li id=\"liU\"><a style=\"border-color: transparent\" class=\"btn btn-lg btn-block\" href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("test_consulterfichefrais");
            echo "\">Consulter</a></li>
                               ";
        }
        // line 29
        echo "
                               ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_COMPTABLE")) {
            // line 31
            echo "
                                   <li id=\"liU\"><a style=\"border-color: transparent\" class=\"btn btn-lg btn-block\" href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("test_consulterfichefraisC");
            echo "\">Consulter </a></li>
                               ";
        }
        // line 34
        echo "
                       ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "                           <li id=\"liU\"><a style=\"border-color: transparent\" class=\"btn btn-lg btn-block\" href=\"";
            echo $this->env->getExtension('routing')->getPath("test_addVisiteur");
            echo "\">Ajouter User</a></li>
                           <li id=\"liU\"><a style=\"border-color: transparent\" class=\"btn btn-lg btn-block\" href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("test_removeVisiteur");
            echo "\">Supprimer User</a></li>
                       ";
        }
        // line 39
        echo "
                                <li id=\"liD\"><a style=\"border-color: transparent\" class=\"btn btn-lg \" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("user_logout");
        echo "\">Deconnection</a></li>

                           </ul>
                              </div>
                       </nav>

        </div>


        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TestBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 49,  145 => 7,  139 => 6,  132 => 50,  130 => 49,  118 => 40,  115 => 39,  110 => 37,  105 => 36,  103 => 35,  100 => 34,  95 => 32,  92 => 31,  90 => 30,  87 => 29,  82 => 27,  78 => 26,  75 => 25,  73 => 24,  67 => 21,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  35 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <!-- Page Permettent l'import de boostrap dans toute les autres pages mais aussi de l'affichage de la barre de menu  -->*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/bootstrap/css/bootstrap.css') }}">*/
/*         <link rel="stylesheet" href="{{asset('bundles/framework/bootstrap/js/jquery.js')  }}">*/
/*         <link rel="stylesheet" href="{{asset('bundles/framework/bootstrap/js/bootstrap.min.js')  }}">*/
/*         <link rel="stylesheet" href="{{asset('bundles/framework/css/StyleNav.css')  }}">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/bootstrap/js/jquery.easing.js')}}">*/
/*     </head>*/
/*     <body>*/
/*        <div class="container" style="z-index: 1000;">*/
/*            <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*                <div class="navbar-collapse collapse sidebar-navbar-collapse">*/
/*                    <ul class="nav navbar-nav">*/
/*                        <img style="max-width: 100%; height: auto;margin-bottom: 50px" alt="logo" src="{{ asset('bundles/framework/images/logo3.png') }}">*/
/* */
/*                        <!-- On gère l'affichage de la barre de menu en fonction de quelle utilisateur se connecte -->*/
/*                                {%  if is_granted('ROLE_UTILISATEUR')%}*/
/* */
/*                                    <li id="liU"><a style="border-color: transparent" class="btn btn-lg btn-block" href="{{  path('test_renseignerfichefrais') }}">Renseigner Fiche</a></li>*/
/*                                    <li id="liU"><a style="border-color: transparent" class="btn btn-lg btn-block" href="{{ path('test_consulterfichefrais') }}">Consulter</a></li>*/
/*                                {% endif %}*/
/* */
/*                                {%  if is_granted('ROLE_COMPTABLE')%}*/
/* */
/*                                    <li id="liU"><a style="border-color: transparent" class="btn btn-lg btn-block" href="{{ path('test_consulterfichefraisC') }}">Consulter </a></li>*/
/*                                {% endif %}*/
/* */
/*                        {%  if is_granted('ROLE_ADMIN')%}*/
/*                            <li id="liU"><a style="border-color: transparent" class="btn btn-lg btn-block" href="{{ path('test_addVisiteur') }}">Ajouter User</a></li>*/
/*                            <li id="liU"><a style="border-color: transparent" class="btn btn-lg btn-block" href="{{ path('test_removeVisiteur') }}">Supprimer User</a></li>*/
/*                        {% endif %}*/
/* */
/*                                 <li id="liD"><a style="border-color: transparent" class="btn btn-lg " href="{{ path('user_logout') }}">Deconnection</a></li>*/
/* */
/*                            </ul>*/
/*                               </div>*/
/*                        </nav>*/
/* */
/*         </div>*/
/* */
/* */
/*         {% block body %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
