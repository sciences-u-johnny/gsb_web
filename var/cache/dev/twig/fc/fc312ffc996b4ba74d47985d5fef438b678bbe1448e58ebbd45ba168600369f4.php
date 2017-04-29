<?php

/* TestBundle:Default:Consulter.html.twig */
class __TwigTemplate_63b8b89f1245d757ad397e436edbe38481e2b05a3bf92147aafc0dfc9d9a0e96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "TestBundle:Default:Consulter.html.twig", 1);
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
        $__internal_0ca1179925fd2c8487f5e1f27975c13a515baf34527c239e79494359b7e866bb = $this->env->getExtension("native_profiler");
        $__internal_0ca1179925fd2c8487f5e1f27975c13a515baf34527c239e79494359b7e866bb->enter($__internal_0ca1179925fd2c8487f5e1f27975c13a515baf34527c239e79494359b7e866bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:Consulter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ca1179925fd2c8487f5e1f27975c13a515baf34527c239e79494359b7e866bb->leave($__internal_0ca1179925fd2c8487f5e1f27975c13a515baf34527c239e79494359b7e866bb_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee05e3060952c255e83ca4d0ec2971934c79deb596e9e91f739188e0dc4e4586 = $this->env->getExtension("native_profiler");
        $__internal_ee05e3060952c255e83ca4d0ec2971934c79deb596e9e91f739188e0dc4e4586->enter($__internal_ee05e3060952c255e83ca4d0ec2971934c79deb596e9e91f739188e0dc4e4586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
<!-- Page qui liste les fiches de l'utilisateur -->

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
    <script>
        jQuery(document).ready(function()  {

            //Récuperation des information des Ficches :
            var tabEtat = new Array();
            var tabAffichage = new Array();
            var tabMoi = new Array();
            var tabAnne = new Array();
            var tabMontant = new Array();
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LesFiches"]) ? $context["LesFiches"] : $this->getContext($context, "LesFiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneFiche"]) {
            // line 31
            echo "            tabEtat.push(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneFiche"], "getEtat", array(), "method"), "getid", array(), "method"), "html", null, true);
            echo "\");
            tabMoi.push(\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneFiche"], "getMois", array(), "method"), "format", array(0 => "Y-m-d"), "method"), "html", null, true);
            echo "\");
            tabAffichage.push(\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneFiche"], "getMois", array(), "method"), "format", array(0 => "m-Y"), "method"), "html", null, true);
            echo "\");
            tabAnne.push(";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneFiche"], "getMois", array(), "method"), "format", array(0 => "Y"), "method"), "html", null, true);
            echo ");
            tabMontant.push(";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneFiche"], "getMontantValide", array(), "method"), "html", null, true);
            echo ");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneFiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

            //Affichage des Fiche en fonction de la date choisie par l'utilisateur
            \$(document).on('change','#ChoixAnnee',function () {

                var v  = \$(this).val();

                var r = \$('#la');
                \$('#reload').remove();


                if (v != null) {
                    var tab = jQuery('<tbody id=\"reload\"></tbody>');

                    for (var i = 0; i <tabEtat.length; i++) {

                        if( v == tabAnne[i]) {

                            tab.append('<tr> <th scope=\"row\">'+ tabAffichage[i] +'</th><td>' + tabMontant[i] + '€</td><td>'+tabEtat[i]+'</td><td style=\"text-align: center\"><form name=\"voir\" method=\"post\" ><input type=\"hidden\" id=\"mois\" name=\"mois\" value=\"'+tabMoi[i]+'\"><input type=\"submit\" class=\"btn btn-info\" value=\"Consulter\" ></form></td></tr>');
                        }
                        }
                    r.append(tab);
                }

                return false;
            });

        });
    </script>

";
        
        $__internal_ee05e3060952c255e83ca4d0ec2971934c79deb596e9e91f739188e0dc4e4586->leave($__internal_ee05e3060952c255e83ca4d0ec2971934c79deb596e9e91f739188e0dc4e4586_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_41f895d62c4a006d974bf1334e10508e8323b0aa2765ec009cdff6bed55883d5 = $this->env->getExtension("native_profiler");
        $__internal_41f895d62c4a006d974bf1334e10508e8323b0aa2765ec009cdff6bed55883d5->enter($__internal_41f895d62c4a006d974bf1334e10508e8323b0aa2765ec009cdff6bed55883d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "
    <!-- Affichage des fiches pour la consultation -->
     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;margin-top: 20px;\" >
         <div class=\"col-md-offset-3 col-lg-8\">



             <div class=\"panel panel-info\">
                 <div class=\"panel-heading\">
                     <p style=\"padding: 0px;margin: 0px\"> <h1 style=\"margin: 0px;padding: 0px;text-align: center;\">Consulter Fiche Frais </h1> Changer d'année :
                     <select id=\"ChoixAnnee\"  class=\"\">
                             <option value=\"null\"></option>
                         ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LesDates"]) ? $context["LesDates"] : $this->getContext($context, "LesDates")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneDate"]) {
            // line 82
            echo "                             <option value=\"";
            echo twig_escape_filter($this->env, $context["uneDate"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["uneDate"], "html", null, true);
            echo "</option>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneDate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                             </select>

                     </p>

                 </div>
                 <div class=\"panel-body\">
                     <div class=\"responsive-table-line\" id=\"tout\" style=\"margin:0px auto;max-width:100%; height: 580px;overflow-y:scroll;\">
                         <table class=\"table table-bordered table-condensed table-body-center\" id=\"la\" >
                             <thead style=\"background-color: #9da0a4;\">
                             <tr>
                                 <th>Mois</th>
                                 <th>Montant Valide</th>
                                 <th>Etat</th>
                                 <th style=\"text-align: center\">Voir</th>
                             </tr>
                             </thead>
                             <tbody id=\"reload\">


                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>

     </div>


";
        
        $__internal_41f895d62c4a006d974bf1334e10508e8323b0aa2765ec009cdff6bed55883d5->leave($__internal_41f895d62c4a006d974bf1334e10508e8323b0aa2765ec009cdff6bed55883d5_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:Consulter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 84,  186 => 82,  182 => 81,  168 => 69,  162 => 68,  125 => 37,  117 => 35,  113 => 34,  109 => 33,  105 => 32,  100 => 31,  96 => 30,  83 => 20,  78 => 18,  73 => 16,  69 => 15,  65 => 14,  60 => 12,  55 => 10,  51 => 9,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* <!-- Page qui liste les fiches de l'utilisateur -->*/
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
/*     <script>*/
/*         jQuery(document).ready(function()  {*/
/* */
/*             //Récuperation des information des Ficches :*/
/*             var tabEtat = new Array();*/
/*             var tabAffichage = new Array();*/
/*             var tabMoi = new Array();*/
/*             var tabAnne = new Array();*/
/*             var tabMontant = new Array();*/
/*             {% for uneFiche in LesFiches %}*/
/*             tabEtat.push("{{ uneFiche.getEtat().getid()}}");*/
/*             tabMoi.push("{{ uneFiche.getMois().format('Y-m-d') }}");*/
/*             tabAffichage.push("{{ uneFiche.getMois().format('m-Y') }}");*/
/*             tabAnne.push({{ uneFiche.getMois().format('Y') }});*/
/*             tabMontant.push({{ uneFiche.getMontantValide() }});*/
/*             {% endfor %}*/
/* */
/* */
/*             //Affichage des Fiche en fonction de la date choisie par l'utilisateur*/
/*             $(document).on('change','#ChoixAnnee',function () {*/
/* */
/*                 var v  = $(this).val();*/
/* */
/*                 var r = $('#la');*/
/*                 $('#reload').remove();*/
/* */
/* */
/*                 if (v != null) {*/
/*                     var tab = jQuery('<tbody id="reload"></tbody>');*/
/* */
/*                     for (var i = 0; i <tabEtat.length; i++) {*/
/* */
/*                         if( v == tabAnne[i]) {*/
/* */
/*                             tab.append('<tr> <th scope="row">'+ tabAffichage[i] +'</th><td>' + tabMontant[i] + '€</td><td>'+tabEtat[i]+'</td><td style="text-align: center"><form name="voir" method="post" ><input type="hidden" id="mois" name="mois" value="'+tabMoi[i]+'"><input type="submit" class="btn btn-info" value="Consulter" ></form></td></tr>');*/
/*                         }*/
/*                         }*/
/*                     r.append(tab);*/
/*                 }*/
/* */
/*                 return false;*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/* */
/* {% endblock stylesheets %}*/
/* {% block body %}*/
/* */
/*     <!-- Affichage des fiches pour la consultation -->*/
/*      <div class="row" style="margin-left: 0px;margin-right: 0px;margin-top: 20px;" >*/
/*          <div class="col-md-offset-3 col-lg-8">*/
/* */
/* */
/* */
/*              <div class="panel panel-info">*/
/*                  <div class="panel-heading">*/
/*                      <p style="padding: 0px;margin: 0px"> <h1 style="margin: 0px;padding: 0px;text-align: center;">Consulter Fiche Frais </h1> Changer d'année :*/
/*                      <select id="ChoixAnnee"  class="">*/
/*                              <option value="null"></option>*/
/*                          {% for uneDate in LesDates %}*/
/*                              <option value="{{ uneDate }}">{{ uneDate }}</option>*/
/*                          {% endfor %}*/
/*                              </select>*/
/* */
/*                      </p>*/
/* */
/*                  </div>*/
/*                  <div class="panel-body">*/
/*                      <div class="responsive-table-line" id="tout" style="margin:0px auto;max-width:100%; height: 580px;overflow-y:scroll;">*/
/*                          <table class="table table-bordered table-condensed table-body-center" id="la" >*/
/*                              <thead style="background-color: #9da0a4;">*/
/*                              <tr>*/
/*                                  <th>Mois</th>*/
/*                                  <th>Montant Valide</th>*/
/*                                  <th>Etat</th>*/
/*                                  <th style="text-align: center">Voir</th>*/
/*                              </tr>*/
/*                              </thead>*/
/*                              <tbody id="reload">*/
/* */
/* */
/*                              </tbody>*/
/*                          </table>*/
/*                      </div>*/
/*                  </div>*/
/*              </div>*/
/*          </div>*/
/* */
/*      </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
