<?php

/* @Test/Default/Valider.html.twig */
class __TwigTemplate_cebbfe0856cc162cebd0ce9a6002b118bcfb17db5f9f7b0728a0b09c28e1afbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "@Test/Default/Valider.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "
<!-- Page de validation d'une fiche avec validation de tous les frais-->

<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/css/custom-theme/jquery-ui-1.10.0.custom.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/StyleRenseigner.css"), "html", null, true);
        echo "\">

<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/jquery-1.9.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/google-code-prettify/prettify.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">

        function ValideForfait(select) {

            if (select.value == 1)
            {
                \$('#fiche_frais_LigneForFais_'+select.name+'_valide').attr('checked',true);
            }else {
                \$('#fiche_frais_LigneForFais_'+select.name+'_valide').attr('checked',false);
            }
        }
        function ValideHorForfait(select) {

            if (select.value == 1)
            {
                \$('#fiche_frais_LigneHorForFait_'+select.name+'_valide').attr('checked',true);
            }else {
                \$('#fiche_frais_LigneHorForFait_'+select.name+'_valide').attr('checked',false);
            }
        }


        jQuery(document).ready(function()  {
            \$('.supH').click(function(event){
                event.preventDefault(); // évite qu'un # apparaisse dans l'URL
                val = \$(this).attr(\"name\");
                \$('#dialog-confirm2').dialog('open');
                return false;;
            });



            \$('#dialog-confirm2').dialog({
                autoOpen: false,
                width: 600,
                buttons: {
                    \"oui\": function () {
                        \$(this).dialog(\"close\");
                        \$('#H'+val).remove();
                        return true;
                    },
                    \"non\": function () {
                        \$(this).dialog(\"close\");
                        return false;
                    }
                }
            });
        });
    </script>

";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "
    <div id=\"dialog-confirm2\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir refuser ce frais hors frofait ?
        </p>
    </div>

    ";
        // line 81
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form1"]) ? $context["form1"] : null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 82
        echo "    <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
        <div class=\"col-md-offset-3 col-md-8\">
            <div class=\"panel panel-success\" style=\"margin-top: 10px;\">
                <div class=\"panel-heading\">
                    <h1 style=\"text-align: center;font-size: 20px;margin-top: 5px;margin-bottom: 0px\">";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["Name"]) ? $context["Name"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["Prenom"]) ? $context["Prenom"] : null), "html", null, true);
        echo " : Fiche Frais de ";
        echo twig_escape_filter($this->env, (isset($context["DateMois"]) ? $context["DateMois"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["DateAnne"]) ? $context["DateAnne"] : null), "html", null, true);
        echo " </h1>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : null), 'form_start');
        echo "
                    <div class=\"responsive-table-line\" id=\"tout\" style=\"margin:0px auto;max-width:100%;\">
                        <h1 style=\"font-size: 20px; text-align: center;\">Frais Forfait :</h1>
                        <table class=\"table table-bordered table-condensed table-body-center\" id=\"la\" >
                            <thead>
                            <tr>
                                <th>Type de Frais</th>
                                <th>Quantité</th>
                                <th>Monatant</th>
                                <th>Date</th>
                                <th>Valide</th>
                            </tr>
                            </thead>
                            <tbody id=\"reload\">
                            ";
        // line 103
        $context["i"] = 0;
        // line 104
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "getLigneForFais", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["uneligne"]) {
            // line 105
            echo "                                <tr>
                                    <th scope=\"row\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneligne"], "getFraisForfais", array(), "method"), "getid", array(), "method"), "html", null, true);
            echo "</th>
                                    <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneligne"], "getquantite", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneligne"], "getMontant", array(), "method"), "html", null, true);
            echo "€</td>
                                    <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneligne"], "getdate", array(), "method"), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
            echo "</td>
                                    <td><select id=\"Select_F_";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  onchange=\"ValideForfait(this)\">
                                        ";
            // line 111
            if (($this->getAttribute($context["uneligne"], "getValide", array(), "method") == true)) {
                // line 112
                echo "
                                            <option value=\"1\">Oui</option>
                                            <option value=\"0\">Non</option>
                                        ";
            } else {
                // line 116
                echo "                                            <option value=\"0\">Non</option>
                                            <option value=\"1\">Oui</option>
                                        ";
            }
            // line 118
            echo "</select>
                                        ";
            // line 119
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "LigneForFais", array()), (isset($context["i"]) ? $context["i"] : null), array(), "array"), 'widget', array("attr" => array("class " => "hidden")));
            echo "
                                    </td>
                                </tr>
                                ";
            // line 122
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 123
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                            </tbody>
                        </table>
                    </div>

                    <div class=\"responsive-table-line\" id=\"tout\" style=\"margin:0px auto;max-width:100%;\">
                        <h1 style=\"font-size: 20px; text-align: center;\">Frais Hors Forfait :</h1>
                        <table class=\"table table-bordered table-condensed table-body-center\" id=\"la\" >
                            <thead>
                            <tr>
                                <th>Libelle</th>
                                <th>Montant</th>
                                <th>Date</th>
                                <th>Valide</th>
                            </tr>
                            </thead>
                            <tbody id=\"reload\">
                            ";
        // line 140
        $context["i"] = 0;
        // line 141
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "getLigneHorForFait", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["uneligne"]) {
            // line 142
            echo "                                <tr id=\"H";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">
                                    <th scope=\"row\">";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneligne"], "getlibelle", array(), "method"), "html", null, true);
            echo "</th>
                                    <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneligne"], "getmontant", array(), "method"), "html", null, true);
            echo "€</td>
                                    <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneligne"], "getdate", array(), "method"), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
            echo "</td>
                                    <td><select id=\"Select_F_";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  onchange=\"ValideHorForfait(this)\">
                                            ";
            // line 147
            if (($this->getAttribute($context["uneligne"], "getValide", array(), "method") == true)) {
                // line 148
                echo "
                                                <option value=\"1\">Oui</option>
                                                <option value=\"0\">Non</option>
                                            ";
            } else {
                // line 152
                echo "                                                <option value=\"0\">Non</option>
                                                <option value=\"1\">Oui</option>
                                            ";
            }
            // line 154
            echo "</select>
                                            ";
            // line 155
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "LigneHorForFait", array()), (isset($context["i"]) ? $context["i"] : null), array(), "array"), 'widget', array("attr" => array("class " => "hidden")));
            echo "</td>
                                </tr>
                                ";
            // line 157
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 158
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"container\">
                        <div class=\"panel\">
                            ";
        // line 164
        $context["i"] = 1;
        // line 165
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "getJustificatif", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["unJusti"]) {
            // line 166
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("Uplaod/Jusificatif/" . $this->getAttribute($context["unJusti"], "getId", array(), "method")) . "/") . $this->getAttribute($context["unJusti"], "getURL", array(), "method"))), "html", null, true);
            echo "\" target=\"_blank\">Justificatif ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</a>
                                ";
            // line 167
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 168
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unJusti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                        </div>
                    </div>



                </div>
                <div class=\"panel-footer\" style=\"margin: 0px\">
                    <div class=\"form-group\" style=\"margin: 0px;padding: 0px\">
                        ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "Sauvegarder", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "
                        <input class=\"btn btn-success\" value=\"Valider\" type=\"submit\"/>
                        ";
        // line 179
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : null), 'form_end');
        echo "
                    </div>
                </div>


            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@Test/Default/Valider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 179,  359 => 177,  349 => 169,  343 => 168,  341 => 167,  334 => 166,  329 => 165,  327 => 164,  320 => 159,  314 => 158,  312 => 157,  307 => 155,  304 => 154,  299 => 152,  293 => 148,  291 => 147,  285 => 146,  281 => 145,  277 => 144,  273 => 143,  268 => 142,  263 => 141,  261 => 140,  243 => 124,  237 => 123,  235 => 122,  229 => 119,  226 => 118,  221 => 116,  215 => 112,  213 => 111,  207 => 110,  203 => 109,  199 => 108,  195 => 107,  191 => 106,  188 => 105,  183 => 104,  181 => 103,  164 => 89,  152 => 86,  146 => 82,  144 => 81,  134 => 73,  131 => 72,  74 => 19,  69 => 17,  64 => 15,  60 => 14,  56 => 13,  51 => 11,  46 => 9,  42 => 8,  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* {% block stylesheets %}*/
/* */
/* <!-- Page de validation d'une fiche avec validation de tous les frais-->*/
/* */
/* <link rel="stylesheet" href="{{ asset('bundles/framework/bootstrap/css/bootstrap.min.css') }}">*/
/* */
/* <link rel="stylesheet" href="{{ asset('bundles/framework/theme/css/custom-theme/jquery-ui-1.10.0.custom.css') }}">*/
/* <link rel="stylesheet" href="{{ asset('bundles/framework/theme/assets/css/font-awesome.min.css') }}">*/
/* */
/* <link rel="stylesheet" href="{{asset('bundles/framework/css/StyleRenseigner.css')  }}">*/
/* */
/* <script src="{{asset('bundles/framework/theme/assets/js/jquery-1.9.0.min.js')  }}"></script>*/
/* <script src="{{asset('bundles/framework/theme/assets/js/bootstrap.min.js')  }}"></script>*/
/* <script src="{{asset('bundles/framework/theme/assets/js/jquery-ui-1.10.0.custom.min.js')  }}"></script>*/
/* */
/* <script src="{{asset('bundles/framework/theme/assets/js/google-code-prettify/prettify.js')  }}"></script>*/
/* */
/* <script src="{{ asset('bundles/framework/bootstrap/js/jquery.easing.js')}}"></script>*/
/* */
/*     <script type="text/javascript">*/
/* */
/*         function ValideForfait(select) {*/
/* */
/*             if (select.value == 1)*/
/*             {*/
/*                 $('#fiche_frais_LigneForFais_'+select.name+'_valide').attr('checked',true);*/
/*             }else {*/
/*                 $('#fiche_frais_LigneForFais_'+select.name+'_valide').attr('checked',false);*/
/*             }*/
/*         }*/
/*         function ValideHorForfait(select) {*/
/* */
/*             if (select.value == 1)*/
/*             {*/
/*                 $('#fiche_frais_LigneHorForFait_'+select.name+'_valide').attr('checked',true);*/
/*             }else {*/
/*                 $('#fiche_frais_LigneHorForFait_'+select.name+'_valide').attr('checked',false);*/
/*             }*/
/*         }*/
/* */
/* */
/*         jQuery(document).ready(function()  {*/
/*             $('.supH').click(function(event){*/
/*                 event.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                 val = $(this).attr("name");*/
/*                 $('#dialog-confirm2').dialog('open');*/
/*                 return false;;*/
/*             });*/
/* */
/* */
/* */
/*             $('#dialog-confirm2').dialog({*/
/*                 autoOpen: false,*/
/*                 width: 600,*/
/*                 buttons: {*/
/*                     "oui": function () {*/
/*                         $(this).dialog("close");*/
/*                         $('#H'+val).remove();*/
/*                         return true;*/
/*                     },*/
/*                     "non": function () {*/
/*                         $(this).dialog("close");*/
/*                         return false;*/
/*                     }*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*     <div id="dialog-confirm2" title="Confirmation de la suppression" style="display:none;">*/
/*         <p>*/
/*             <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>*/
/*             Etes-vous sûr de vouloir refuser ce frais hors frofait ?*/
/*         </p>*/
/*     </div>*/
/* */
/*     {% form_theme form1 'bootstrap_3_layout.html.twig' %}*/
/*     <div class="row" style="margin-left: 0px;margin-right: 0px;" >*/
/*         <div class="col-md-offset-3 col-md-8">*/
/*             <div class="panel panel-success" style="margin-top: 10px;">*/
/*                 <div class="panel-heading">*/
/*                     <h1 style="text-align: center;font-size: 20px;margin-top: 5px;margin-bottom: 0px">{{ Name }} {{ Prenom }} : Fiche Frais de {{DateMois}} {{DateAnne}} </h1>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {{ form_start(form1) }}*/
/*                     <div class="responsive-table-line" id="tout" style="margin:0px auto;max-width:100%;">*/
/*                         <h1 style="font-size: 20px; text-align: center;">Frais Forfait :</h1>*/
/*                         <table class="table table-bordered table-condensed table-body-center" id="la" >*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Type de Frais</th>*/
/*                                 <th>Quantité</th>*/
/*                                 <th>Monatant</th>*/
/*                                 <th>Date</th>*/
/*                                 <th>Valide</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody id="reload">*/
/*                             {% set i = 0 %}*/
/*                             {% for uneligne in Fiche.getLigneForFais() %}*/
/*                                 <tr>*/
/*                                     <th scope="row">{{ uneligne.getFraisForfais().getid()}}</th>*/
/*                                     <td>{{ uneligne.getquantite() }}</td>*/
/*                                     <td>{{ uneligne.getMontant() }}€</td>*/
/*                                     <td>{{ uneligne.getdate().format('d/m/Y') }}</td>*/
/*                                     <td><select id="Select_F_{{ i }}" name="{{ i }}"  onchange="ValideForfait(this)">*/
/*                                         {% if uneligne.getValide() == true %}*/
/* */
/*                                             <option value="1">Oui</option>*/
/*                                             <option value="0">Non</option>*/
/*                                         {% else %}*/
/*                                             <option value="0">Non</option>*/
/*                                             <option value="1">Oui</option>*/
/*                                         {% endif %}</select>*/
/*                                         {{ form_widget(form1.LigneForFais[i],{'attr': {'class ': 'hidden'}}) }}*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 {% set i = i+1 %}*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/* */
/*                     <div class="responsive-table-line" id="tout" style="margin:0px auto;max-width:100%;">*/
/*                         <h1 style="font-size: 20px; text-align: center;">Frais Hors Forfait :</h1>*/
/*                         <table class="table table-bordered table-condensed table-body-center" id="la" >*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Libelle</th>*/
/*                                 <th>Montant</th>*/
/*                                 <th>Date</th>*/
/*                                 <th>Valide</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody id="reload">*/
/*                             {% set i = 0 %}*/
/*                             {% for uneligne in Fiche.getLigneHorForFait() %}*/
/*                                 <tr id="H{{ i }}">*/
/*                                     <th scope="row">{{ uneligne.getlibelle()}}</th>*/
/*                                     <td>{{ uneligne.getmontant() }}€</td>*/
/*                                     <td>{{ uneligne.getdate().format('d/m/Y') }}</td>*/
/*                                     <td><select id="Select_F_{{ i }}" name="{{ i }}"  onchange="ValideHorForfait(this)">*/
/*                                             {% if uneligne.getValide() == true %}*/
/* */
/*                                                 <option value="1">Oui</option>*/
/*                                                 <option value="0">Non</option>*/
/*                                             {% else %}*/
/*                                                 <option value="0">Non</option>*/
/*                                                 <option value="1">Oui</option>*/
/*                                             {% endif %}</select>*/
/*                                             {{ form_widget(form1.LigneHorForFait[i],{'attr': {'class ': 'hidden'}}) }}</td>*/
/*                                 </tr>*/
/*                                 {% set i = i+1 %}*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     <div class="container">*/
/*                         <div class="panel">*/
/*                             {% set i = 1 %}*/
/*                             {% for unJusti in Fiche.getJustificatif() %}*/
/*                                 <a href="{{ asset('Uplaod/Jusificatif/' ~unJusti.getId()~ '/' ~ unJusti.getURL()) }}" target="_blank">Justificatif {{ i }}</a>*/
/*                                 {% set i = i+1 %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/* */
/*                 </div>*/
/*                 <div class="panel-footer" style="margin: 0px">*/
/*                     <div class="form-group" style="margin: 0px;padding: 0px">*/
/*                         {{ form_widget(form1.Sauvegarder,{'attr' : {'class' : 'hidden'}}) }}*/
/*                         <input class="btn btn-success" value="Valider" type="submit"/>*/
/*                         {{ form_end(form1) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
