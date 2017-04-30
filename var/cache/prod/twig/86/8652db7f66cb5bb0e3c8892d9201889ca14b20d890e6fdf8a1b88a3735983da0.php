<?php

/* @Test/Default/FicheFrais.html.twig */
class __TwigTemplate_df1f00b63d33fce6bcd35af078891d41903ccd3a13bf61b1ad317633194b9902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "@Test/Default/FicheFrais.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- Page qui affiches les détaille d'une fiche frais -->

    <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;margin-top: 20px;\">
        <div class=\"col-md-offset-3 col-lg-8\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    <p style=\"margin: 0px;\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : null), "html", null, true);
        echo "</p>
                    <h1 style=\"text-align: center;margin-top: 0px;\">Fiche Frais ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["Mois"]) ? $context["Mois"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["Annee"]) ? $context["Annee"] : null), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"panel-body\">

                    <!-- Affichage des frais forfaits -->
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
        // line 28
        $context["total"] = 0;
        // line 29
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "getLigneForFais", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["unefiche"]) {
            // line 30
            echo "                                ";
            if (($this->getAttribute($context["unefiche"], "getValide", array(), "method") == true)) {
                // line 31
                echo "                                    <tr class=\"success\">
                                ";
            } else {
                // line 33
                echo "                                    <tr class=\"alert-danger\">
                                ";
            }
            // line 35
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unefiche"], "getDate", array(), "method"), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unefiche"], "getFraisForfais", array(), "method"), "getid", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["unefiche"], "getQuantite", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["unefiche"], "getMontant", array(), "method"), "html", null, true);
            echo "€</td>
                                <td>";
            // line 39
            if (($this->getAttribute($context["unefiche"], "getValide", array(), "method") == true)) {
                // line 40
                echo "                                        Oui
                                        ";
                // line 41
                $context["total"] = ($this->getAttribute($context["unefiche"], "getMontant", array(), "method") + (isset($context["total"]) ? $context["total"] : null));
                // line 42
                echo "                                    ";
            } else {
                // line 43
                echo "                                        Non
                                    ";
            }
            // line 45
            echo "                                </td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unefiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                            </tbody>
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <th>Total Frais Forfait :</th>
                                    <th>";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "€</th>
                                </tr>
                                </thead>
                            </table>
                    </div>
                    <!-- Affichage des frais hors forfaits  -->
                    <h1 style=\"font-size: 20px;text-align: center\">Frais Hors Forfait</h1>
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
        // line 72
        $context["total2"] = 0;
        // line 73
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "getLigneHorForFait", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["unefiche"]) {
            // line 74
            echo "                                ";
            if (($this->getAttribute($context["unefiche"], "getValide", array(), "method") == true)) {
                // line 75
                echo "                                    <tr class=\"success\">
                                ";
            } else {
                // line 77
                echo "                                    <tr class=\"alert-danger\">
                                ";
            }
            // line 79
            echo "
                                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unefiche"], "getDate", array(), "method"), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["unefiche"], "getLibelle", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["unefiche"], "getMontant", array(), "method"), "html", null, true);
            echo "€</td>
                                <td>";
            // line 83
            if (($this->getAttribute($context["unefiche"], "getValide", array(), "method") == true)) {
                // line 84
                echo "                                        Oui
                                        ";
                // line 85
                $context["total2"] = ($this->getAttribute($context["unefiche"], "getMontant", array(), "method") + (isset($context["total2"]) ? $context["total2"] : null));
                // line 86
                echo "                                    ";
            } else {
                // line 87
                echo "                                        Non
                                    ";
            }
            // line 89
            echo "                                </td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unefiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                            </tbody>
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <th>Total Frais Hors Forfait :</th>
                                    <th>";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["total2"]) ? $context["total2"] : null), "html", null, true);
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
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "getMontantValide", array(), "method"), "html", null, true);
        echo "€</th>
                        </tr>
                        </thead>
                    </table>

                    <!-- Affichage des justificatifs -->
                    <div class=\"container\">
                        <div class=\"panel\">
                            ";
        // line 116
        $context["i"] = 1;
        // line 117
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "getJustificatif", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["unJusti"]) {
            // line 118
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("Uplaod/Jusificatif/" . $this->getAttribute($context["unJusti"], "getId", array(), "method")) . "/") . $this->getAttribute($context["unJusti"], "getURL", array(), "method"))), "html", null, true);
            echo "\" target=\"_blank\">Justificatif ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</a>
                                ";
            // line 119
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 120
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unJusti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                        </div>
                    </div>



                </div>

            </div>
        </div>


    </div>

";
    }

    public function getTemplateName()
    {
        return "@Test/Default/FicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 121,  257 => 120,  255 => 119,  248 => 118,  243 => 117,  241 => 116,  230 => 108,  217 => 98,  210 => 93,  201 => 89,  197 => 87,  194 => 86,  192 => 85,  189 => 84,  187 => 83,  183 => 82,  179 => 81,  175 => 80,  172 => 79,  168 => 77,  164 => 75,  161 => 74,  156 => 73,  154 => 72,  133 => 54,  126 => 49,  117 => 45,  113 => 43,  110 => 42,  108 => 41,  105 => 40,  103 => 39,  99 => 38,  95 => 37,  91 => 36,  86 => 35,  82 => 33,  78 => 31,  75 => 30,  70 => 29,  68 => 28,  45 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* {% block body %}*/
/*     <!-- Page qui affiches les détaille d'une fiche frais -->*/
/* */
/*     <div class="row" style="margin-left: 0px;margin-right: 0px;margin-top: 20px;">*/
/*         <div class="col-md-offset-3 col-lg-8">*/
/*             <div class="panel panel-success">*/
/*                 <div class="panel-heading">*/
/*                     <p style="margin: 0px;">{{ nom }} {{ prenom }}</p>*/
/*                     <h1 style="text-align: center;margin-top: 0px;">Fiche Frais {{ Mois }} {{ Annee }}</h1>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/* */
/*                     <!-- Affichage des frais forfaits -->*/
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
/*                     <!-- Affichage des frais hors forfaits  -->*/
/*                     <h1 style="font-size: 20px;text-align: center">Frais Hors Forfait</h1>*/
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
/*                                     <th>Total Frais Hors Forfait :</th>*/
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
/*                     <!-- Affichage des justificatifs -->*/
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
