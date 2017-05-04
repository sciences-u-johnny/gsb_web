<?php

/* TestBundle::layout.html.twig */
class __TwigTemplate_ddce7be50677e86b64d215d317fe4b215875796ffe4b364c582ec93598735e09 extends Twig_Template
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
        $__internal_ff8d90d99e64f42bd8f6656000e5bbb9568159fdb4d365e0e6f5a2d6c35bbd78 = $this->env->getExtension("native_profiler");
        $__internal_ff8d90d99e64f42bd8f6656000e5bbb9568159fdb4d365e0e6f5a2d6c35bbd78->enter($__internal_ff8d90d99e64f42bd8f6656000e5bbb9568159fdb4d365e0e6f5a2d6c35bbd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle::layout.html.twig"));

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
        echo "\">Déconnexion</a></li>

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
        
        $__internal_ff8d90d99e64f42bd8f6656000e5bbb9568159fdb4d365e0e6f5a2d6c35bbd78->leave($__internal_ff8d90d99e64f42bd8f6656000e5bbb9568159fdb4d365e0e6f5a2d6c35bbd78_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3b92289ac68c0965234d3562ef9b90525e43648ebdacd8f55a982ff398a9005 = $this->env->getExtension("native_profiler");
        $__internal_c3b92289ac68c0965234d3562ef9b90525e43648ebdacd8f55a982ff398a9005->enter($__internal_c3b92289ac68c0965234d3562ef9b90525e43648ebdacd8f55a982ff398a9005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c3b92289ac68c0965234d3562ef9b90525e43648ebdacd8f55a982ff398a9005->leave($__internal_c3b92289ac68c0965234d3562ef9b90525e43648ebdacd8f55a982ff398a9005_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dda8b91676f2dd77b5c997106b11d06f0cf25698106d1bc86e93460b6c1c801a = $this->env->getExtension("native_profiler");
        $__internal_dda8b91676f2dd77b5c997106b11d06f0cf25698106d1bc86e93460b6c1c801a->enter($__internal_dda8b91676f2dd77b5c997106b11d06f0cf25698106d1bc86e93460b6c1c801a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dda8b91676f2dd77b5c997106b11d06f0cf25698106d1bc86e93460b6c1c801a->leave($__internal_dda8b91676f2dd77b5c997106b11d06f0cf25698106d1bc86e93460b6c1c801a_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_8623daee6293863b47c64b6a206d1f405152bb0d85b84f5a9a89487313d6839e = $this->env->getExtension("native_profiler");
        $__internal_8623daee6293863b47c64b6a206d1f405152bb0d85b84f5a9a89487313d6839e->enter($__internal_8623daee6293863b47c64b6a206d1f405152bb0d85b84f5a9a89487313d6839e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8623daee6293863b47c64b6a206d1f405152bb0d85b84f5a9a89487313d6839e->leave($__internal_8623daee6293863b47c64b6a206d1f405152bb0d85b84f5a9a89487313d6839e_prof);

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
        return array (  168 => 49,  157 => 7,  145 => 6,  135 => 50,  133 => 49,  121 => 40,  118 => 39,  113 => 37,  108 => 36,  106 => 35,  103 => 34,  98 => 32,  95 => 31,  93 => 30,  90 => 29,  85 => 27,  81 => 26,  78 => 25,  76 => 24,  70 => 21,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  38 => 8,  36 => 7,  32 => 6,  25 => 1,);
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
/*                                 <li id="liD"><a style="border-color: transparent" class="btn btn-lg " href="{{ path('user_logout') }}">Déconnexion</a></li>*/
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
