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
        $__internal_7bf4ee9f9db48a9c4dbb832964784a746e7bc37395a57f7344cd4d75a4392fae = $this->env->getExtension("native_profiler");
        $__internal_7bf4ee9f9db48a9c4dbb832964784a746e7bc37395a57f7344cd4d75a4392fae->enter($__internal_7bf4ee9f9db48a9c4dbb832964784a746e7bc37395a57f7344cd4d75a4392fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:FicheFrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bf4ee9f9db48a9c4dbb832964784a746e7bc37395a57f7344cd4d75a4392fae->leave($__internal_7bf4ee9f9db48a9c4dbb832964784a746e7bc37395a57f7344cd4d75a4392fae_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fff3666604658a3fefcdd6c36f2495651946eda2fcc9ddf974fbc6aecd286bc = $this->env->getExtension("native_profiler");
        $__internal_7fff3666604658a3fefcdd6c36f2495651946eda2fcc9ddf974fbc6aecd286bc->enter($__internal_7fff3666604658a3fefcdd6c36f2495651946eda2fcc9ddf974fbc6aecd286bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <!-- Page qui affiches les détaille d'une fiche frais -->

    <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;margin-top: 20px;\">
        <div class=\"col-md-offset-3 col-lg-8\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    <p style=\"margin: 0px;\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo "</p>
                    <h1 style=\"text-align: center;margin-top: 0px;\">Fiche Frais ";
        // line 10
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
        // line 26
        $context["total"] = 0;
        // line 27
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "getLigneForFais", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["unefiche"]) {
            // line 28
            echo "                                ";
            if (($this->getAttribute($context["unefiche"], "getValide", array(), "method") == true)) {
                // line 29
                echo "                                    <tr class=\"success\">
                                ";
            } else {
                // line 31
                echo "                                    <tr class=\"alert-danger\">
                                ";
            }
            // line 33
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unefiche"], "getDate", array(), "method"), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unefiche"], "getFraisForfais", array(), "method"), "getid", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["unefiche"], "getQuantite", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["unefiche"], "getMontant", array(), "method"), "html", null, true);
            echo "€</td>
                                <td>";
            // line 37
            if (($this->getAttribute($context["unefiche"], "getValide", array(), "method") == true)) {
                // line 38
                echo "                                        Oui
                                        ";
                // line 39
                $context["total"] = ($this->getAttribute($context["unefiche"], "getMontant", array(), "method") + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                // line 40
                echo "                                    ";
            } else {
                // line 41
                echo "                                        Non
                                    ";
            }
            // line 43
            echo "                                </td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unefiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            </tbody>
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <th>Total Frais Forfait :</th>
                                    <th>";
        // line 52
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
        // line 70
        $context["total2"] = 0;
        // line 71
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "getLigneHorForFait", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["unefiche"]) {
            // line 72
            echo "                                ";
            if (($this->getAttribute($context["unefiche"], "getValide", array(), "method") == true)) {
                // line 73
                echo "                                    <tr class=\"success\">
                                ";
            } else {
                // line 75
                echo "                                    <tr class=\"alert-danger\">
                                ";
            }
            // line 77
            echo "
                                <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unefiche"], "getDate", array(), "method"), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["unefiche"], "getLibelle", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["unefiche"], "getMontant", array(), "method"), "html", null, true);
            echo "€</td>
                                <td>";
            // line 81
            if (($this->getAttribute($context["unefiche"], "getValide", array(), "method") == true)) {
                // line 82
                echo "                                        Oui
                                        ";
                // line 83
                $context["total2"] = ($this->getAttribute($context["unefiche"], "getMontant", array(), "method") + (isset($context["total2"]) ? $context["total2"] : $this->getContext($context, "total2")));
                // line 84
                echo "                                    ";
            } else {
                // line 85
                echo "                                        Non
                                    ";
            }
            // line 87
            echo "                                </td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unefiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                            </tbody>
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <th>Total Frais Hor Forfait :</th>
                                    <th>";
        // line 96
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
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "getMontantValide", array(), "method"), "html", null, true);
        echo "€</th>
                        </tr>
                        </thead>
                    </table>

                    <div class=\"container\">
                        <div class=\"panel\">
                            ";
        // line 113
        $context["i"] = 1;
        // line 114
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "getJustificatif", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["unJusti"]) {
            // line 115
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("Uplaod/Jusificatif/" . $this->getAttribute($context["unJusti"], "getId", array(), "method")) . "/") . $this->getAttribute($context["unJusti"], "getURL", array(), "method"))), "html", null, true);
            echo "\" target=\"_blank\">Justificatif ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</a>
                                ";
            // line 116
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 117
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unJusti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                        </div>
                    </div>



                </div>

            </div>
        </div>


    </div>

";
        
        $__internal_7fff3666604658a3fefcdd6c36f2495651946eda2fcc9ddf974fbc6aecd286bc->leave($__internal_7fff3666604658a3fefcdd6c36f2495651946eda2fcc9ddf974fbc6aecd286bc_prof);

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
        return array (  269 => 118,  263 => 117,  261 => 116,  254 => 115,  249 => 114,  247 => 113,  237 => 106,  224 => 96,  217 => 91,  208 => 87,  204 => 85,  201 => 84,  199 => 83,  196 => 82,  194 => 81,  190 => 80,  186 => 79,  182 => 78,  179 => 77,  175 => 75,  171 => 73,  168 => 72,  163 => 71,  161 => 70,  140 => 52,  133 => 47,  124 => 43,  120 => 41,  117 => 40,  115 => 39,  112 => 38,  110 => 37,  106 => 36,  102 => 35,  98 => 34,  93 => 33,  89 => 31,  85 => 29,  82 => 28,  77 => 27,  75 => 26,  54 => 10,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
