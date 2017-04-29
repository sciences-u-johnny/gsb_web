<?php

/* @Test/Default/removeVisiteur.html.twig */
class __TwigTemplate_266263411e8fdeeb63c0747c2687ecb3d28cfc76694ffd675476ab46b2fbded9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "@Test/Default/removeVisiteur.html.twig", 1);
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
        $__internal_ce585cfd3634f147c22c82ce111e140a6b9ac41ff3d7761eecb47a689347fb54 = $this->env->getExtension("native_profiler");
        $__internal_ce585cfd3634f147c22c82ce111e140a6b9ac41ff3d7761eecb47a689347fb54->enter($__internal_ce585cfd3634f147c22c82ce111e140a6b9ac41ff3d7761eecb47a689347fb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/removeVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce585cfd3634f147c22c82ce111e140a6b9ac41ff3d7761eecb47a689347fb54->leave($__internal_ce585cfd3634f147c22c82ce111e140a6b9ac41ff3d7761eecb47a689347fb54_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1adee3cfd55557a47b1eb4919fc0c657c31acf4f5a272601d8167eb058e7184 = $this->env->getExtension("native_profiler");
        $__internal_c1adee3cfd55557a47b1eb4919fc0c657c31acf4f5a272601d8167eb058e7184->enter($__internal_c1adee3cfd55557a47b1eb4919fc0c657c31acf4f5a272601d8167eb058e7184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c1adee3cfd55557a47b1eb4919fc0c657c31acf4f5a272601d8167eb058e7184->leave($__internal_c1adee3cfd55557a47b1eb4919fc0c657c31acf4f5a272601d8167eb058e7184_prof);

    }

    public function getTemplateName()
    {
        return "@Test/Default/removeVisiteur.html.twig";
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
