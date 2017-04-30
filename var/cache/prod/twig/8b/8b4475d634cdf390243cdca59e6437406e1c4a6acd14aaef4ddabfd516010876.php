<?php

/* TestBundle:Default:removeVisiteur.html.twig */
class __TwigTemplate_d07ed75e83d9ee0a00a5a8482c2d0b167b502292027f5fa36f89b8d18291c939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "TestBundle:Default:removeVisiteur.html.twig", 1);
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
        echo "    <!--Page de suppression d'un utilisateur -->
<div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;margin-top: 50px;\">
    <div class=\"col-md-offset-3 col-lg-8\">


    <table  class=\"table table-bordered\" style=\"width: 100%;text-align: left;\">
        <thead>

        <tr>
            <th>id</th>
            <th>Username</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Role</th>
            <th style=\"text-align: center\">Action</tr>
        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LesUtilisateurs"]) ? $context["LesUtilisateurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["UnUtilisateur"]) {
            // line 22
            echo "        <tr>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["UnUtilisateur"], "getID", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["UnUtilisateur"], "getUsername", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["UnUtilisateur"], "getNom", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["UnUtilisateur"], "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
            ";
            // line 27
            $context["role"] = $this->getAttribute($context["UnUtilisateur"], "getroles", array(), "method");
            // line 28
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : null), 0, array(), "array"), "html", null, true);
            echo "</td>
            <td style=\"text-align: center\"><form name=\"Utilisateur\" method=\"post\">
                    <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["UnUtilisateur"], "getID", array(), "method"), "html", null, true);
            echo "\">
                    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\">
                </form> </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UnUtilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:removeVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  82 => 30,  76 => 28,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  58 => 23,  55 => 22,  51 => 21,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* {% block body %}*/
/*     <!--Page de suppression d'un utilisateur -->*/
/* <div class="row" style="margin-left: 0px;margin-right: 0px;margin-top: 50px;">*/
/*     <div class="col-md-offset-3 col-lg-8">*/
/* */
/* */
/*     <table  class="table table-bordered" style="width: 100%;text-align: left;">*/
/*         <thead>*/
/* */
/*         <tr>*/
/*             <th>id</th>*/
/*             <th>Username</th>*/
/*             <th>Nom</th>*/
/*             <th>Prenom</th>*/
/*             <th>Role</th>*/
/*             <th style="text-align: center">Action</tr>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for UnUtilisateur in LesUtilisateurs %}*/
/*         <tr>*/
/*             <td>{{ UnUtilisateur.getID() }}</td>*/
/*             <td>{{ UnUtilisateur.getUsername() }}</td>*/
/*             <td>{{ UnUtilisateur.getNom() }}</td>*/
/*             <td>{{ UnUtilisateur.getPrenom() }}</td>*/
/*             {% set role = UnUtilisateur.getroles() %}*/
/*             <td>{{  role[0] }}</td>*/
/*             <td style="text-align: center"><form name="Utilisateur" method="post">*/
/*                     <input type="hidden" name="id" id="id" value="{{ UnUtilisateur.getID() }}">*/
/*                     <input type="submit" value="Supprimer" class="btn btn-danger">*/
/*                 </form> </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
