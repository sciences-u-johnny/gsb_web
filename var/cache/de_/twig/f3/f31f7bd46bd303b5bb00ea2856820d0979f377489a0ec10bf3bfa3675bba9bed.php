<?php

/* TestBundle:Default:FicheFrais.html.twig */
class __TwigTemplate_08fb75772002f86cf9f699655b6a3ce9fa991a9c094ec952225d4119c54046a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "TestBundle:Default:FicheFrais.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f857178b0c3dcef9cfc8eb7719f172786baf80c5e36091143ca72409635b037 = $this->env->getExtension("native_profiler");
        $__internal_2f857178b0c3dcef9cfc8eb7719f172786baf80c5e36091143ca72409635b037->enter($__internal_2f857178b0c3dcef9cfc8eb7719f172786baf80c5e36091143ca72409635b037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:FicheFrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f857178b0c3dcef9cfc8eb7719f172786baf80c5e36091143ca72409635b037->leave($__internal_2f857178b0c3dcef9cfc8eb7719f172786baf80c5e36091143ca72409635b037_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_be5c5ee905da3a8a5acb883591492e3c18229e4d3a2ee5492f217baebdb0e170 = $this->env->getExtension("native_profiler");
        $__internal_be5c5ee905da3a8a5acb883591492e3c18229e4d3a2ee5492f217baebdb0e170->enter($__internal_be5c5ee905da3a8a5acb883591492e3c18229e4d3a2ee5492f217baebdb0e170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;margin-top: 20px;\">
        <div class=\"col-md-offset-3 col-lg-8\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    <p style=\"margin: 0px;\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo "</p>
                    <h1 style=\"text-align: center;margin-top: 0px;\">Fiche Frais ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["Mois"]) ? $context["Mois"] : $this->getContext($context, "Mois")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["Annee"]) ? $context["Annee"] : $this->getContext($context, "Annee")), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"panel-body\">
                    <h1 style=\"font-size: 20px;text-align: center\">Frais Forfait :</h1>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" style=\"margin: 0px\">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Quantite</th>
                                <th>Montant</th>
                                <th>Validé</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 24
        $context["total"] = 0;
        // line 25
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "getLigneForFais", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["unefiche"]) {
            // line 26
            echo "                                ";
            if (($this->getAttribute($context["unefiche"], "getValide", array(), "method") == true)) {
                // line 27
                echo "                                    <tr class=\"success\">
                                ";
            } else {
                // line 29
                echo "                                    <tr class=\"alert-danger\">
                                ";
            }
            // line 31
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unefiche"], "getDate", array(), "method"), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unefiche"], "getFraisForfais", array(), "method"), "getid", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["unefiche"], "getQuantite", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["unefiche"], "getMontant", array(), "method"), "html", null, true);
            echo "€</td>
                                <td>";
            // line 35
            if (($this->getAttribute($context["unefiche"], "getValide", array(), "method") == true)) {
                // line 36
                echo "                                        Oui
                                        ";
                // line 37
                $context["total"] = ($this->getAttribute($context["unefiche"], "getMontant", array(), "method") + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                // line 38
                echo "                                    ";
            } else {
                // line 39
                echo "                                        Non
                                    ";
            }
            // line 41
            echo "                                </td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unefiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                            </tbody>
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <th>Total Frais Forfait :</th>
                                    <th>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€</th>
                                </tr>
                                </thead>
                            </table>
                    </div>
                    <!-- Tableau Frais Hor Forfait -->
                    <h1 style=\"font-size: 20px;text-align: center\">Frais Hor Forfait</h1>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" style=\"margin: 0px\">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Libelle</th>
                                <th>Montant</th>
                                <th>Validé</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 68
        $context["total2"] = 0;
        // line 69
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "getLigneHorForFait", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["unefiche"]) {
            // line 70
            echo "                                ";
            if (($this->getAttribute($context["unefiche"], "getValide", array(), "method") == true)) {
                // line 71
                echo "                                    <tr class=\"success\">
                                ";
            } else {
                // line 73
                echo "                                    <tr class=\"alert-danger\">
                                ";
            }
            // line 75
            echo "
                                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unefiche"], "getDate", array(), "method"), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["unefiche"], "getLibelle", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["unefiche"], "getMontant", array(), "method"), "html", null, true);
            echo "€</td>
                                <td>";
            // line 79
            if (($this->getAttribute($context["unefiche"], "getValide", array(), "method") == true)) {
                // line 80
                echo "                                        Oui
                                        ";
                // line 81
                $context["total2"] = ($this->getAttribute($context["unefiche"], "getMontant", array(), "method") + (isset($context["total2"]) ? $context["total2"] : $this->getContext($context, "total2")));
                // line 82
                echo "                                    ";
            } else {
                // line 83
                echo "                                        Non
                                    ";
            }
            // line 85
            echo "                                </td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unefiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                            </tbody>
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <th>Total Frais Hor Forfait :</th>
                                    <th>";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["total2"]) ? $context["total2"] : $this->getContext($context, "total2")), "html", null, true);
        echo "€</th>
                                </tr>
                                </thead>
                            </table>
                    </div>

                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>Total Frais :</th>
                            <th>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "getMontantValide", array(), "method"), "html", null, true);
        echo "€</th>
                        </tr>
                        </thead>
                    </table>

                    <div class=\"container\">
                        <div class=\"panel\">
                            ";
        // line 111
        $context["i"] = 1;
        // line 112
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "getJustificatif", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["unJusti"]) {
            // line 113
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("Uplaod/Jusificatif/" . $this->getAttribute($context["unJusti"], "getId", array(), "method")) . "/") . $this->getAttribute($context["unJusti"], "getURL", array(), "method"))), "html", null, true);
            echo "\" target=\"_blank\">Justificatif ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</a>
                                ";
            // line 114
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 115
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unJusti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                        </div>
                    </div>



                </div>

            </div>
        </div>


    </div>

";
        
        $__internal_be5c5ee905da3a8a5acb883591492e3c18229e4d3a2ee5492f217baebdb0e170->leave($__internal_be5c5ee905da3a8a5acb883591492e3c18229e4d3a2ee5492f217baebdb0e170_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:FicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 116,  261 => 115,  259 => 114,  252 => 113,  247 => 112,  245 => 111,  235 => 104,  222 => 94,  215 => 89,  206 => 85,  202 => 83,  199 => 82,  197 => 81,  194 => 80,  192 => 79,  188 => 78,  184 => 77,  180 => 76,  177 => 75,  173 => 73,  169 => 71,  166 => 70,  161 => 69,  159 => 68,  138 => 50,  131 => 45,  122 => 41,  118 => 39,  115 => 38,  113 => 37,  110 => 36,  108 => 35,  104 => 34,  100 => 33,  96 => 32,  91 => 31,  87 => 29,  83 => 27,  80 => 26,  75 => 25,  73 => 24,  52 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* {% block body %}*/
/*     <div class="row" style="margin-left: 0px;margin-right: 0px;margin-top: 20px;">*/
/*         <div class="col-md-offset-3 col-lg-8">*/
/*             <div class="panel panel-success">*/
/*                 <div class="panel-heading">*/
/*                     <p style="margin: 0px;">{{ nom }} {{ prenom }}</p>*/
/*                     <h1 style="text-align: center;margin-top: 0px;">Fiche Frais {{ Mois }} {{ Annee }}</h1>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <h1 style="font-size: 20px;text-align: center">Frais Forfait :</h1>*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-bordered" style="margin: 0px">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Date</th>*/
/*                                 <th>Type</th>*/
/*                                 <th>Quantite</th>*/
/*                                 <th>Montant</th>*/
/*                                 <th>Validé</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% set total = 0 %}*/
/*                             {% for unefiche in Fiche.getLigneForFais() %}*/
/*                                 {% if unefiche.getValide() == true %}*/
/*                                     <tr class="success">*/
/*                                 {% else %}*/
/*                                     <tr class="alert-danger">*/
/*                                 {% endif %}*/
/*                                 <td>{{ unefiche.getDate().format('d/m/Y') }}</td>*/
/*                                 <td>{{ unefiche.getFraisForfais().getid() }}</td>*/
/*                                 <td>{{ unefiche.getQuantite() }}</td>*/
/*                                 <td>{{ unefiche.getMontant() }}€</td>*/
/*                                 <td>{% if unefiche.getValide() == true %}*/
/*                                         Oui*/
/*                                         {% set total = unefiche.getMontant()+total %}*/
/*                                     {% else %}*/
/*                                         Non*/
/*                                     {% endif %}*/
/*                                 </td>*/
/* */
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                             <table class="table table-bordered">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th>Total Frais Forfait :</th>*/
/*                                     <th>{{ total }}€</th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                             </table>*/
/*                     </div>*/
/*                     <!-- Tableau Frais Hor Forfait -->*/
/*                     <h1 style="font-size: 20px;text-align: center">Frais Hor Forfait</h1>*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-bordered" style="margin: 0px">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Date</th>*/
/*                                 <th>Libelle</th>*/
/*                                 <th>Montant</th>*/
/*                                 <th>Validé</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% set total2 = 0 %}*/
/*                             {% for unefiche in Fiche.getLigneHorForFait() %}*/
/*                                 {% if unefiche.getValide() == true %}*/
/*                                     <tr class="success">*/
/*                                 {% else %}*/
/*                                     <tr class="alert-danger">*/
/*                                 {% endif %}*/
/* */
/*                                 <td>{{ unefiche.getDate().format('d/m/Y') }}</td>*/
/*                                 <td>{{ unefiche.getLibelle() }}</td>*/
/*                                 <td>{{ unefiche.getMontant() }}€</td>*/
/*                                 <td>{% if unefiche.getValide() == true %}*/
/*                                         Oui*/
/*                                         {% set total2 = unefiche.getMontant()+total2 %}*/
/*                                     {% else %}*/
/*                                         Non*/
/*                                     {% endif %}*/
/*                                 </td>*/
/* */
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                             <table class="table table-bordered">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th>Total Frais Hor Forfait :</th>*/
/*                                     <th>{{ total2 }}€</th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                             </table>*/
/*                     </div>*/
/* */
/*                     <table class="table table-bordered">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>Total Frais :</th>*/
/*                             <th>{{ Fiche.getMontantValide() }}€</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                     </table>*/
/* */
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
/* */
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
