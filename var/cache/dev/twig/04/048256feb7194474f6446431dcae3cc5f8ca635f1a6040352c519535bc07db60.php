<?php

/* TestBundle:Default:removeVisiteur.html.twig */
class __TwigTemplate_21186b69e080c62e7a557a36dd06f0797c53d3f22fc75429184b5cf9a4358115 extends Twig_Template
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
        $__internal_043d82a0107518c77a44265907e2dee99bbbc16ebfcba542f4fc103cc8c86506 = $this->env->getExtension("native_profiler");
        $__internal_043d82a0107518c77a44265907e2dee99bbbc16ebfcba542f4fc103cc8c86506->enter($__internal_043d82a0107518c77a44265907e2dee99bbbc16ebfcba542f4fc103cc8c86506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:removeVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_043d82a0107518c77a44265907e2dee99bbbc16ebfcba542f4fc103cc8c86506->leave($__internal_043d82a0107518c77a44265907e2dee99bbbc16ebfcba542f4fc103cc8c86506_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d37c9820434f5cfbea8c5a0a93a67febf1620b5381e1d32104bb7fea86bf902 = $this->env->getExtension("native_profiler");
        $__internal_4d37c9820434f5cfbea8c5a0a93a67febf1620b5381e1d32104bb7fea86bf902->enter($__internal_4d37c9820434f5cfbea8c5a0a93a67febf1620b5381e1d32104bb7fea86bf902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;margin-top: 50px;\">
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
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LesUtilisateurs"]) ? $context["LesUtilisateurs"] : $this->getContext($context, "LesUtilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["UnUtilisateur"]) {
            // line 21
            echo "        <tr>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["UnUtilisateur"], "getID", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["UnUtilisateur"], "getUsername", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["UnUtilisateur"], "getNom", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["UnUtilisateur"], "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
            ";
            // line 26
            $context["role"] = $this->getAttribute($context["UnUtilisateur"], "getroles", array(), "method");
            // line 27
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), 0, array(), "array"), "html", null, true);
            echo "</td>
            <td style=\"text-align: center\"><form name=\"Utilisateur\" method=\"post\">
                    <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
            // line 29
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
        // line 34
        echo "        </tbody>
    </table>

    </div>
    </div>
";
        
        $__internal_4d37c9820434f5cfbea8c5a0a93a67febf1620b5381e1d32104bb7fea86bf902->leave($__internal_4d37c9820434f5cfbea8c5a0a93a67febf1620b5381e1d32104bb7fea86bf902_prof);

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
        return array (  101 => 34,  90 => 29,  84 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  63 => 21,  59 => 20,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* {% block body %}*/
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
