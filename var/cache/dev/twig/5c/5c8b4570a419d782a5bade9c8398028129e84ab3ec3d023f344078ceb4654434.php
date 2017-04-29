<?php

/* @Test/Default/Rembourse.html.twig */
class __TwigTemplate_3bfc880353d840a7e3d29cee8df7f442fa2edac845e0d8bc940b5f1bef7f48b3 extends Twig_Template
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
        $__internal_8be544bc6a38551b7b2b1258edb53b1934f3b18e7ed011c4b61f12a440568e36 = $this->env->getExtension("native_profiler");
        $__internal_8be544bc6a38551b7b2b1258edb53b1934f3b18e7ed011c4b61f12a440568e36->enter($__internal_8be544bc6a38551b7b2b1258edb53b1934f3b18e7ed011c4b61f12a440568e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/Rembourse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8be544bc6a38551b7b2b1258edb53b1934f3b18e7ed011c4b61f12a440568e36->leave($__internal_8be544bc6a38551b7b2b1258edb53b1934f3b18e7ed011c4b61f12a440568e36_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b1926d19fb8f33537c74ea28bc1f7882d8fdd3c52356ac3c1ea24575ff48e4f = $this->env->getExtension("native_profiler");
        $__internal_1b1926d19fb8f33537c74ea28bc1f7882d8fdd3c52356ac3c1ea24575ff48e4f->enter($__internal_1b1926d19fb8f33537c74ea28bc1f7882d8fdd3c52356ac3c1ea24575ff48e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "


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


";
        
        $__internal_1b1926d19fb8f33537c74ea28bc1f7882d8fdd3c52356ac3c1ea24575ff48e4f->leave($__internal_1b1926d19fb8f33537c74ea28bc1f7882d8fdd3c52356ac3c1ea24575ff48e4f_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b6cb82ba72ae6d995aa01fa1ebf1d1576247850867699153da6520c63e0690c = $this->env->getExtension("native_profiler");
        $__internal_2b6cb82ba72ae6d995aa01fa1ebf1d1576247850867699153da6520c63e0690c->enter($__internal_2b6cb82ba72ae6d995aa01fa1ebf1d1576247850867699153da6520c63e0690c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
    <div id=\"dialog-confirm2\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir refuser ce frais hor frofait ?
        </p>
    </div>

    ";
        // line 32
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 33
        echo "    <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
        <div class=\"col-md-offset-3 col-md-8\">
            <div class=\"panel panel-success\" style=\"margin-top: 10px;\">
                <div class=\"panel-heading\">
                    <h1 style=\"text-align: center;font-size: 20px;margin-top: 5px;margin-bottom: 0px\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["Name"]) ? $context["Name"] : $this->getContext($context, "Name")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["Prenom"]) ? $context["Prenom"] : $this->getContext($context, "Prenom")), "html", null, true);
        echo " : Fiche Frais de ";
        echo twig_escape_filter($this->env, (isset($context["DateMois"]) ? $context["DateMois"] : $this->getContext($context, "DateMois")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["DateAnne"]) ? $context["DateAnne"] : $this->getContext($context, "DateAnne")), "html", null, true);
        echo " </h1>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_start');
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
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LigneFofai"]) ? $context["LigneFofai"] : $this->getContext($context, "LigneFofai")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneligne"]) {
            // line 53
            echo "                                <tr>
                                    <th scope=\"row\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneligne"], "getFraisFForfais", array(), "method"), "getid", array(), "method"), "html", null, true);
            echo "</th>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneligne"], "getquantite", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneligne"], "getdate", array(), "method"), "format", array(0 => "d F Y"), "method"), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
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
        // line 74
        $context["i"] = 0;
        // line 75
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LigneHFofai"]) ? $context["LigneHFofai"] : $this->getContext($context, "LigneHFofai")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneligne"]) {
            // line 76
            echo "                                <tr id=\"H";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                                    <th scope=\"row\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneligne"], "getlibelle", array(), "method"), "html", null, true);
            echo "</th>
                                    <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneligne"], "getmontant", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["uneligne"], "getdate", array(), "method"), "format", array(0 => "d F Y"), "method"), "html", null, true);
            echo "</td>
                                ";
            // line 80
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 81
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                            </tbody>
                        </table>
                    </div>



                </div>
                <div class=\"panel-footer\" style=\"margin: 0px\">
                    <div class=\"form-group\" style=\"margin: 0px;padding: 0px\">
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "Sauvegarder", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "
                        <input class=\"btn btn-success\" value=\"Rembourse\" type=\"submit\"/>
                        ";
        // line 93
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_end', array("attr" => array("class" => "hidden")));
        echo "

                    </div>
                </div>


            </div>
        </div>
    </div>

";
        
        $__internal_2b6cb82ba72ae6d995aa01fa1ebf1d1576247850867699153da6520c63e0690c->leave($__internal_2b6cb82ba72ae6d995aa01fa1ebf1d1576247850867699153da6520c63e0690c_prof);

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
        return array (  234 => 93,  229 => 91,  218 => 82,  212 => 81,  210 => 80,  206 => 79,  202 => 78,  198 => 77,  193 => 76,  188 => 75,  186 => 74,  169 => 59,  160 => 56,  156 => 55,  152 => 54,  149 => 53,  145 => 52,  130 => 40,  118 => 37,  112 => 33,  110 => 32,  100 => 24,  94 => 23,  83 => 19,  78 => 17,  73 => 15,  69 => 14,  65 => 13,  60 => 11,  55 => 9,  51 => 8,  46 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* {% block stylesheets %}*/
/* */
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
