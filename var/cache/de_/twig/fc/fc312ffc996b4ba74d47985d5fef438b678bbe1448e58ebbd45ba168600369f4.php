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
        $__internal_b8c766c3f8d87aa52202fed505d94f1f5d2c79ee06a6e5e73cb0a68ef35c8c6c = $this->env->getExtension("native_profiler");
        $__internal_b8c766c3f8d87aa52202fed505d94f1f5d2c79ee06a6e5e73cb0a68ef35c8c6c->enter($__internal_b8c766c3f8d87aa52202fed505d94f1f5d2c79ee06a6e5e73cb0a68ef35c8c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:Consulter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8c766c3f8d87aa52202fed505d94f1f5d2c79ee06a6e5e73cb0a68ef35c8c6c->leave($__internal_b8c766c3f8d87aa52202fed505d94f1f5d2c79ee06a6e5e73cb0a68ef35c8c6c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b47994cc93047dcbe115cc9133cf0f652f2023032bc7482181f479ac19b30c2 = $this->env->getExtension("native_profiler");
        $__internal_1b47994cc93047dcbe115cc9133cf0f652f2023032bc7482181f479ac19b30c2->enter($__internal_1b47994cc93047dcbe115cc9133cf0f652f2023032bc7482181f479ac19b30c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <script>
        jQuery(document).ready(function()  {
            var tabEtat = new Array();
            var tabAffichage = new Array();
            var tabMoi = new Array();
            var tabAnne = new Array();
            var tabMontant = new Array();
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LesFiches"]) ? $context["LesFiches"] : $this->getContext($context, "LesFiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneFiche"]) {
            // line 29
            echo "            tabEtat.push(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneFiche"], "getEtat", array(), "method"), "getid", array(), "method"), "html", null, true);
            echo "\");
            tabMoi.push(\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneFiche"], "getMois", array(), "method"), "format", array(0 => "Y-m-d"), "method"), "html", null, true);
            echo "\");
            tabAffichage.push(\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneFiche"], "getMois", array(), "method"), "format", array(0 => "m-Y"), "method"), "html", null, true);
            echo "\");
            tabAnne.push(";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneFiche"], "getMois", array(), "method"), "format", array(0 => "Y"), "method"), "html", null, true);
            echo ");
            tabMontant.push(";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneFiche"], "getMontantValide", array(), "method"), "html", null, true);
            echo ");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneFiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "


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
        
        $__internal_1b47994cc93047dcbe115cc9133cf0f652f2023032bc7482181f479ac19b30c2->leave($__internal_1b47994cc93047dcbe115cc9133cf0f652f2023032bc7482181f479ac19b30c2_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_da712b8e060260672313a7ab81286f86a4981ffd5d5dea44463ca005d3551a0d = $this->env->getExtension("native_profiler");
        $__internal_da712b8e060260672313a7ab81286f86a4981ffd5d5dea44463ca005d3551a0d->enter($__internal_da712b8e060260672313a7ab81286f86a4981ffd5d5dea44463ca005d3551a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "

    <!--Jquery Fenetre Fiche Frais -->
    <div id=\"FicheFrais\" title=\"Fiche Frais \" style=\"display:none;\">
        <p>

        </p>
    </div>

     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;margin-top: 20px;\" >
         <div class=\"col-md-offset-3 col-lg-8\">



             <div class=\"panel panel-info\">
                 <div class=\"panel-heading\">
                     <p style=\"padding: 0px;margin: 0px\"> <h1 style=\"margin: 0px;padding: 0px;text-align: center;\">Consulter Fiche Frais </h1> Changer d'année :
                     <select id=\"ChoixAnnee\"  class=\"\">
                             <option value=\"null\"></option>
                         ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LesDates"]) ? $context["LesDates"] : $this->getContext($context, "LesDates")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneDate"]) {
            // line 87
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
        // line 89
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
        
        $__internal_da712b8e060260672313a7ab81286f86a4981ffd5d5dea44463ca005d3551a0d->leave($__internal_da712b8e060260672313a7ab81286f86a4981ffd5d5dea44463ca005d3551a0d_prof);

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
        return array (  202 => 89,  191 => 87,  187 => 86,  166 => 67,  160 => 66,  123 => 35,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  98 => 29,  94 => 28,  83 => 20,  78 => 18,  73 => 16,  69 => 15,  65 => 14,  60 => 12,  55 => 10,  51 => 9,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*     <script>*/
/*         jQuery(document).ready(function()  {*/
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
/* */
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
/* */
/*     <!--Jquery Fenetre Fiche Frais -->*/
/*     <div id="FicheFrais" title="Fiche Frais " style="display:none;">*/
/*         <p>*/
/* */
/*         </p>*/
/*     </div>*/
/* */
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
