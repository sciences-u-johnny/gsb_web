<?php

/* TestBundle:Default:ConsulterC.html.twig */
class __TwigTemplate_0788a40233ecc3a611ce2ffecb469a1a02e49f57ed5a2a054f5751d905109fd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "TestBundle:Default:ConsulterC.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a285a7568afa2427f7d77ee73b0cfccb61882a2785d06be2c704d5d4173183fa = $this->env->getExtension("native_profiler");
        $__internal_a285a7568afa2427f7d77ee73b0cfccb61882a2785d06be2c704d5d4173183fa->enter($__internal_a285a7568afa2427f7d77ee73b0cfccb61882a2785d06be2c704d5d4173183fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:ConsulterC.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a285a7568afa2427f7d77ee73b0cfccb61882a2785d06be2c704d5d4173183fa->leave($__internal_a285a7568afa2427f7d77ee73b0cfccb61882a2785d06be2c704d5d4173183fa_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_49b943bf28f445a090614d929e5c5ea37e5717d20d20ff6365022422b5b629f0 = $this->env->getExtension("native_profiler");
        $__internal_49b943bf28f445a090614d929e5c5ea37e5717d20d20ff6365022422b5b629f0->enter($__internal_49b943bf28f445a090614d929e5c5ea37e5717d20d20ff6365022422b5b629f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "


<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/css/custom-theme/jquery-ui-1.10.0.custom.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/ConsulerUser.css"), "html", null, true);
        echo "\">

<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/jquery-1.9.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/google-code-prettify/prettify.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_49b943bf28f445a090614d929e5c5ea37e5717d20d20ff6365022422b5b629f0->leave($__internal_49b943bf28f445a090614d929e5c5ea37e5717d20d20ff6365022422b5b629f0_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_78589afd44b94c807a4f388a4a8624153242ab1889df1b3e1705e2bd18f5226f = $this->env->getExtension("native_profiler");
        $__internal_78589afd44b94c807a4f388a4a8624153242ab1889df1b3e1705e2bd18f5226f->enter($__internal_78589afd44b94c807a4f388a4a8624153242ab1889df1b3e1705e2bd18f5226f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
    <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;margin-top: 40px;\" >
        <div class=\"col-md-offset-3 col-lg-8\">
            ";
        // line 27
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 28
        echo "            <p style=\"text-align: center;background-color: #f2dede;color: #b94a48;\">";
        echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
        echo "</p>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"row\" style=\"margin: auto\">
                        <div class=\"col-md-2\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom")));
        echo "
                        </div>
                        <div class=\"col-md-2\">
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("placeholder" => "Prénom")));
        echo "
                        </div>
                        <div class=\"col-md-2\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mois", array()), 'widget');
        echo "
                        </div>
                        <div class=\"col-md-2\">
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'widget');
        echo "
                        </div>
                        <div class=\"col-md-2\">
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget');
        echo "
                        </div>
                        <div class=\"col-md-2\" style=\"text-align: right;\">
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercher", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
                        </div>
                        ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>

                </div>
                <div class=\"panel-body\">

                    ";
        // line 57
        if ((((isset($context["resultat"]) ? $context["resultat"] : $this->getContext($context, "resultat")) == null) && ((isset($context["Recherche"]) ? $context["Recherche"] : $this->getContext($context, "Recherche")) != false))) {
            // line 58
            echo "                        <h1 style=\"text-align: center;background-color: #f2dede;color: #b94a48;\">Aucun résultat</h1>
                    ";
        } else {
            // line 60
            echo "                        <div class=\"container\" style=\"width: 100%;\">
                            <table class=\"table table-condensed\" style=\"width: 100%;\">
                                <thead>
                                <tr>
                                    <th>Utilisateur</th>
                                    <th>Date</th>
                                    <th>Etat</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultat"]) ? $context["resultat"] : $this->getContext($context, "resultat")));
            foreach ($context['_seq'] as $context["_key"] => $context["unres"]) {
                // line 72
                echo "                                    <tr>
                                        <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unres"], "getvisiteur", array(), "method"), "getNom", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unres"], "getvisiteur", array(), "method"), "getPrenom", array(), "method"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unres"], "getMois", array(), "method"), "format", array(0 => "m-Y"), "method"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unres"], "getEtat", array(), "method"), "getid", array(), "method"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 76
                if (($this->getAttribute($this->getAttribute($context["unres"], "getEtat", array(), "method"), "getid", array(), "method") == "Cloturé")) {
                    // line 77
                    echo "                                                <form name=\"voir\" method=\"post\" style=\"display: inline\">
                                                    <input type=\"hidden\" id=\"id\" name=\"id\" value=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unres"], "getid", array(), "method"), "html", null, true);
                    echo "\">
                                                    <input type=\"hidden\" id=\"mode\" name=\"mode\" value=\"1\">
                                                    <input type=\"hidden\" id=\"id_visiteur\" name=\"id_visiteur\" value=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unres"], "getvisiteur", array(), "method"), "getid", array(), "method"), "html", null, true);
                    echo "\">
                                                    <input type=\"submit\" class=\"btn btn-success\" value=\"Valider\" >
                                                </form>
                                            ";
                }
                // line 84
                echo "                                                <form name=\"voir\" method=\"post\" style=\"display: inline\" >
                                                    <input type=\"hidden\" id=\"id\" name=\"id\" value=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["unres"], "getid", array(), "method"), "html", null, true);
                echo "\">
                                                    <input type=\"hidden\" id=\"mode\" name=\"mode\" value=\"2\">
                                                    <input type=\"hidden\" id=\"id_visiteur\" name=\"id_visiteur\" value=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unres"], "getvisiteur", array(), "method"), "getid", array(), "method"), "html", null, true);
                echo "\">
                                                    <input type=\"submit\" class=\"btn btn-info\" value=\"Consulter\" >
                                                </form>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unres'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "
                                </tbody>
                            </table>
                        </div>

                    ";
        }
        // line 99
        echo "

                </div>

            </div>
            ";
        // line 104
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        </div>
    </div>



";
        
        $__internal_78589afd44b94c807a4f388a4a8624153242ab1889df1b3e1705e2bd18f5226f->leave($__internal_78589afd44b94c807a4f388a4a8624153242ab1889df1b3e1705e2bd18f5226f_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:ConsulterC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 104,  248 => 99,  240 => 93,  228 => 87,  223 => 85,  220 => 84,  213 => 80,  208 => 78,  205 => 77,  203 => 76,  199 => 75,  195 => 74,  189 => 73,  186 => 72,  182 => 71,  169 => 60,  165 => 58,  163 => 57,  154 => 51,  149 => 49,  143 => 46,  137 => 43,  131 => 40,  125 => 37,  119 => 34,  113 => 31,  106 => 28,  104 => 27,  99 => 24,  93 => 23,  83 => 20,  78 => 18,  73 => 16,  69 => 15,  65 => 14,  60 => 12,  55 => 10,  51 => 9,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* */
/* */
/* <link rel="stylesheet" href="{{ asset('bundles/framework/bootstrap/css/bootstrap.min.css') }}">*/
/* */
/* <link rel="stylesheet" href="{{ asset('bundles/framework/theme/css/custom-theme/jquery-ui-1.10.0.custom.css') }}">*/
/* <link rel="stylesheet" href="{{ asset('bundles/framework/theme/assets/css/font-awesome.min.css') }}">*/
/* */
/* <link rel="stylesheet" href="{{asset('bundles/framework/css/ConsulerUser.css')  }}">*/
/* */
/* <script src="{{asset('bundles/framework/theme/assets/js/jquery-1.9.0.min.js')  }}"></script>*/
/* <script src="{{asset('bundles/framework/theme/assets/js/bootstrap.min.js')  }}"></script>*/
/* <script src="{{asset('bundles/framework/theme/assets/js/jquery-ui-1.10.0.custom.min.js')  }}"></script>*/
/* */
/* <script src="{{asset('bundles/framework/theme/assets/js/google-code-prettify/prettify.js')  }}"></script>*/
/* */
/* <script src="{{ asset('bundles/framework/bootstrap/js/jquery.easing.js')}}"></script>*/
/* */
/* {% endblock stylesheets %}*/
/* {% block body %}*/
/* */
/*     <div class="row" style="margin-left: 0px;margin-right: 0px;margin-top: 40px;" >*/
/*         <div class="col-md-offset-3 col-lg-8">*/
/*             {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/*             <p style="text-align: center;background-color: #f2dede;color: #b94a48;">{{ erreur }}</p>*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     {{ form_start(form) }}*/
/*                     <div class="row" style="margin: auto">*/
/*                         <div class="col-md-2">*/
/*                             {{ form_widget(form.nom , {'attr': {'placeholder': 'Nom'}}) }}*/
/*                         </div>*/
/*                         <div class="col-md-2">*/
/*                             {{ form_widget(form.prenom , {'attr': {'placeholder': 'Prénom'}}) }}*/
/*                         </div>*/
/*                         <div class="col-md-2">*/
/*                             {{ form_widget(form.mois) }}*/
/*                         </div>*/
/*                         <div class="col-md-2">*/
/*                             {{ form_widget(form.annee) }}*/
/*                         </div>*/
/*                         <div class="col-md-2">*/
/*                             {{ form_widget(form.etat) }}*/
/*                         </div>*/
/*                         <div class="col-md-2" style="text-align: right;">*/
/*                             {{ form_widget(form.rechercher, {'attr': {'class': 'btn btn-success'}}) }}*/
/*                         </div>*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="panel-body">*/
/* */
/*                     {% if (resultat == null and Recherche != false) %}*/
/*                         <h1 style="text-align: center;background-color: #f2dede;color: #b94a48;">Aucun résultat</h1>*/
/*                     {% else %}*/
/*                         <div class="container" style="width: 100%;">*/
/*                             <table class="table table-condensed" style="width: 100%;">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th>Utilisateur</th>*/
/*                                     <th>Date</th>*/
/*                                     <th>Etat</th>*/
/*                                     <th>Action</th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for unres in resultat %}*/
/*                                     <tr>*/
/*                                         <td>{{ unres.getvisiteur().getNom() }} {{ unres.getvisiteur().getPrenom() }}</td>*/
/*                                         <td>{{ unres.getMois().format('m-Y') }}</td>*/
/*                                         <td>{{ unres.getEtat().getid() }}</td>*/
/*                                         <td>{% if unres.getEtat().getid() == "Cloturé" %}*/
/*                                                 <form name="voir" method="post" style="display: inline">*/
/*                                                     <input type="hidden" id="id" name="id" value="{{ unres.getid() }}">*/
/*                                                     <input type="hidden" id="mode" name="mode" value="1">*/
/*                                                     <input type="hidden" id="id_visiteur" name="id_visiteur" value="{{ unres.getvisiteur().getid() }}">*/
/*                                                     <input type="submit" class="btn btn-success" value="Valider" >*/
/*                                                 </form>*/
/*                                             {% endif %}*/
/*                                                 <form name="voir" method="post" style="display: inline" >*/
/*                                                     <input type="hidden" id="id" name="id" value="{{ unres.getid() }}">*/
/*                                                     <input type="hidden" id="mode" name="mode" value="2">*/
/*                                                     <input type="hidden" id="id_visiteur" name="id_visiteur" value="{{ unres.getvisiteur().getid() }}">*/
/*                                                     <input type="submit" class="btn btn-info" value="Consulter" >*/
/*                                                 </form>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/* */
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/* */
/*                     {% endif %}*/
/* */
/* */
/*                 </div>*/
/* */
/*             </div>*/
/*             {{ form(form) }}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
