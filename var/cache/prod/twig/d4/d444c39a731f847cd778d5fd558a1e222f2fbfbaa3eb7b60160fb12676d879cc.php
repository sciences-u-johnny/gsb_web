<?php

/* @Test/Default/Rembourse.html.twig */
class __TwigTemplate_522c0c468729acc00f4c944731a4575959c91e7db9ecbddc7cd045dc3bb2b101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "@Test/Default/Rembourse.html.twig", 1);
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

<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/css/custom-theme/jquery-ui-1.10.0.custom.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/StyleRenseigner.css"), "html", null, true);
        echo "\">

<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/jquery-1.9.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/google-code-prettify/prettify.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>


";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "
    <div id=\"dialog-confirm2\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir refuser ce frais hor frofait ?
        </p>
    </div>

    ";
        // line 31
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form1"]) ? $context["form1"] : null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 32
        echo "    <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
        <div class=\"col-md-offset-3 col-md-8\">
            <div class=\"panel panel-success\" style=\"margin-top: 10px;\">
                <div class=\"panel-heading\">
                    <h1 style=\"text-align: center;font-size: 20px;margin-top: 5px;margin-bottom: 0px\">";
        // line 36
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
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : null), 'form_start');
        echo "
                    <div class=\"responsive-table-line\" id=\"tout\" style=\"margin:0px auto;max-width:100%;\">
                        <h1 style=\"font-size: 20px; text-align: center;\">Frais Forfait :</h1>
                        <table class=\"table table-bordered table-condensed table-body-center\" id=\"la\" >
                            <thead>
                            <tr>
                                <th>Type de Frais</th>
                                <th>Quantité</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody id=\"reload\">
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LigneFofai"]) ? $context["LigneFofai"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["uneligne"]) {
            // line 52
            echo "                                <tr>
                                    <th scope=\"row\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneligne"], "getFraisFForfais", array(), "method"), "getid", array(), "method"), "html", null, true);
            echo "</th>
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneligne"], "getquantite", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneligne"], "getdate", array(), "method"), "format", array(0 => "d F Y"), "method"), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                            </tbody>
                        </table>
                    </div>

                    <div class=\"responsive-table-line\" id=\"tout\" style=\"margin:0px auto;max-width:100%;\">
                        <h1 style=\"font-size: 20px; text-align: center;\">Frais Hor Forfait :</h1>
                        <table class=\"table table-bordered table-condensed table-body-center\" id=\"la\" >
                            <thead>
                            <tr>
                                <th>Libelle</th>
                                <th>Montant</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody id=\"reload\">
                            ";
        // line 73
        $context["i"] = 0;
        // line 74
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LigneHFofai"]) ? $context["LigneHFofai"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["uneligne"]) {
            // line 75
            echo "                                <tr id=\"H";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">
                                    <th scope=\"row\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneligne"], "getlibelle", array(), "method"), "html", null, true);
            echo "</th>
                                    <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneligne"], "getmontant", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneligne"], "getdate", array(), "method"), "format", array(0 => "d F Y"), "method"), "html", null, true);
            echo "</td>
                                ";
            // line 79
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 80
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                            </tbody>
                        </table>
                    </div>



                </div>
                <div class=\"panel-footer\" style=\"margin: 0px\">
                    <div class=\"form-group\" style=\"margin: 0px;padding: 0px\">
                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "Sauvegarder", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "
                        <input class=\"btn btn-success\" value=\"Rembourse\" type=\"submit\"/>
                        ";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : null), 'form_end', array("attr" => array("class" => "hidden")));
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
        return "@Test/Default/Rembourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 92,  213 => 90,  202 => 81,  196 => 80,  194 => 79,  190 => 78,  186 => 77,  182 => 76,  177 => 75,  172 => 74,  170 => 73,  153 => 58,  144 => 55,  140 => 54,  136 => 53,  133 => 52,  129 => 51,  114 => 39,  102 => 36,  96 => 32,  94 => 31,  84 => 23,  81 => 22,  73 => 18,  68 => 16,  63 => 14,  59 => 13,  55 => 12,  50 => 10,  45 => 8,  41 => 7,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* {% block stylesheets %}*/
/* */
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
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*     <div id="dialog-confirm2" title="Confirmation de la suppression" style="display:none;">*/
/*         <p>*/
/*             <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>*/
/*             Etes-vous sûr de vouloir refuser ce frais hor frofait ?*/
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
/*                                 <th>Date</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody id="reload">*/
/*                             {% for uneligne in LigneFofai %}*/
/*                                 <tr>*/
/*                                     <th scope="row">{{ uneligne.getFraisFForfais().getid()}}</th>*/
/*                                     <td>{{ uneligne.getquantite() }}</td>*/
/*                                     <td>{{ uneligne.getdate().format('d F Y') }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/* */
/*                     <div class="responsive-table-line" id="tout" style="margin:0px auto;max-width:100%;">*/
/*                         <h1 style="font-size: 20px; text-align: center;">Frais Hor Forfait :</h1>*/
/*                         <table class="table table-bordered table-condensed table-body-center" id="la" >*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Libelle</th>*/
/*                                 <th>Montant</th>*/
/*                                 <th>Date</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody id="reload">*/
/*                             {% set i = 0 %}*/
/*                             {% for uneligne in LigneHFofai %}*/
/*                                 <tr id="H{{ i }}">*/
/*                                     <th scope="row">{{ uneligne.getlibelle()}}</th>*/
/*                                     <td>{{ uneligne.getmontant() }}</td>*/
/*                                     <td>{{ uneligne.getdate().format('d F Y') }}</td>*/
/*                                 {% set i = i+1 %}*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/* */
/* */
/* */
/*                 </div>*/
/*                 <div class="panel-footer" style="margin: 0px">*/
/*                     <div class="form-group" style="margin: 0px;padding: 0px">*/
/*                         {{ form_widget(form1.Sauvegarder,{'attr' : {'class' : 'hidden'}}) }}*/
/*                         <input class="btn btn-success" value="Rembourse" type="submit"/>*/
/*                         {{ form_end(form1,{'attr' : {'class' : 'hidden'}}) }}*/
/* */
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
