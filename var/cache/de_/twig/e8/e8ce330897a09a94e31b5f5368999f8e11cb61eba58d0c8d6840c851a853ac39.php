<?php

/* @Test/layout.html.twig */
class __TwigTemplate_028bcef6791b834d7f526c52f69c8dc1af52bb7d3e3d585490d465a35226eba8 extends Twig_Template
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
        $__internal_54380a3591d75ab5a7c937266583496c9798105fedfe9ea1051e9d4b20fe3517 = $this->env->getExtension("native_profiler");
        $__internal_54380a3591d75ab5a7c937266583496c9798105fedfe9ea1051e9d4b20fe3517->enter($__internal_54380a3591d75ab5a7c937266583496c9798105fedfe9ea1051e9d4b20fe3517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/jquery.js"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/StyleNav.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/jquery.easing.js"), "html", null, true);
        echo "\">
    </head>
    <body>
       <div class=\"container\" style=\"z-index: 1000;\">
           <nav class=\"navbar navbar-inverse navbar-fixed-top\">
               <div class=\"navbar-collapse collapse sidebar-navbar-collapse\">
                   <ul class=\"nav navbar-nav\">
                       <img style=\"max-width: 100%; height: auto;margin-bottom: 50px\" alt=\"logo\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/logo3.png"), "html", null, true);
        echo "\">


                               ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("ROLE_UTILISATEUR")) {
            // line 24
            echo "
                                   <li id=\"liU\"><a style=\"border-color: transparent\" class=\"btn btn-lg btn-block\" href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("test_renseignerfichefrais");
            echo "\">Renseigner Fiche</a></li>
                                   <li id=\"liU\"><a style=\"border-color: transparent\" class=\"btn btn-lg btn-block\" href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("test_consulterfichefrais");
            echo "\">Consulter</a></li>
                               ";
        }
        // line 28
        echo "
                               ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("ROLE_COMPTABLE")) {
            // line 30
            echo "
                                   <li id=\"liU\"><a style=\"border-color: transparent\" class=\"btn btn-lg btn-block\" href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("test_consulterfichefraisC");
            echo "\">Consulter </a></li>
                               ";
        }
        // line 33
        echo "
                       ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 35
            echo "                           <li id=\"liU\"><a style=\"border-color: transparent\" class=\"btn btn-lg btn-block\" href=\"";
            echo $this->env->getExtension('routing')->getPath("test_addVisiteur");
            echo "\">Ajouter User</a></li>
                           <li id=\"liU\"><a style=\"border-color: transparent\" class=\"btn btn-lg btn-block\" href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("test_removeVisiteur");
            echo "\">Supprimer User</a></li>
                       ";
        }
        // line 38
        echo "
                                <li id=\"liD\"><a style=\"border-color: transparent\" class=\"btn btn-lg \" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("user_logout");
        echo "\">Deconnection</a></li>

                           </ul>
                              </div>
                       </nav>

        </div>


        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
    </body>
</html>
";
        
        $__internal_54380a3591d75ab5a7c937266583496c9798105fedfe9ea1051e9d4b20fe3517->leave($__internal_54380a3591d75ab5a7c937266583496c9798105fedfe9ea1051e9d4b20fe3517_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a697a3fd584197f8d1ef002b4dffd3a4dc2618e3e2951757b4fd14a1aeabccc0 = $this->env->getExtension("native_profiler");
        $__internal_a697a3fd584197f8d1ef002b4dffd3a4dc2618e3e2951757b4fd14a1aeabccc0->enter($__internal_a697a3fd584197f8d1ef002b4dffd3a4dc2618e3e2951757b4fd14a1aeabccc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a697a3fd584197f8d1ef002b4dffd3a4dc2618e3e2951757b4fd14a1aeabccc0->leave($__internal_a697a3fd584197f8d1ef002b4dffd3a4dc2618e3e2951757b4fd14a1aeabccc0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bcfa7f79699462bca06a9fc9dca05168236443cb3c3e348c439a71f348bbd577 = $this->env->getExtension("native_profiler");
        $__internal_bcfa7f79699462bca06a9fc9dca05168236443cb3c3e348c439a71f348bbd577->enter($__internal_bcfa7f79699462bca06a9fc9dca05168236443cb3c3e348c439a71f348bbd577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bcfa7f79699462bca06a9fc9dca05168236443cb3c3e348c439a71f348bbd577->leave($__internal_bcfa7f79699462bca06a9fc9dca05168236443cb3c3e348c439a71f348bbd577_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe0dd11609300a19ff10a070e7a0485018041e7ef08fd8137c62d03961906810 = $this->env->getExtension("native_profiler");
        $__internal_fe0dd11609300a19ff10a070e7a0485018041e7ef08fd8137c62d03961906810->enter($__internal_fe0dd11609300a19ff10a070e7a0485018041e7ef08fd8137c62d03961906810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe0dd11609300a19ff10a070e7a0485018041e7ef08fd8137c62d03961906810->leave($__internal_fe0dd11609300a19ff10a070e7a0485018041e7ef08fd8137c62d03961906810_prof);

    }

    public function getTemplateName()
    {
        return "@Test/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 48,  156 => 6,  144 => 5,  134 => 49,  132 => 48,  120 => 39,  117 => 38,  112 => 36,  107 => 35,  105 => 34,  102 => 33,  97 => 31,  94 => 30,  92 => 29,  89 => 28,  84 => 26,  80 => 25,  77 => 24,  75 => 23,  69 => 20,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
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
/* */
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
