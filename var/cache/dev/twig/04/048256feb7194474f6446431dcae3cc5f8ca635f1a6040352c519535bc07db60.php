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
        $__internal_3042c63078f8493c2f16fe54208b1bfbaffb1fd3205e15e6fc83f8cb97446d19 = $this->env->getExtension("native_profiler");
        $__internal_3042c63078f8493c2f16fe54208b1bfbaffb1fd3205e15e6fc83f8cb97446d19->enter($__internal_3042c63078f8493c2f16fe54208b1bfbaffb1fd3205e15e6fc83f8cb97446d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:removeVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3042c63078f8493c2f16fe54208b1bfbaffb1fd3205e15e6fc83f8cb97446d19->leave($__internal_3042c63078f8493c2f16fe54208b1bfbaffb1fd3205e15e6fc83f8cb97446d19_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b962779d409e46af7bb1cf6ef663a798ce4988ba781933db39697c805d6b723 = $this->env->getExtension("native_profiler");
        $__internal_3b962779d409e46af7bb1cf6ef663a798ce4988ba781933db39697c805d6b723->enter($__internal_3b962779d409e46af7bb1cf6ef663a798ce4988ba781933db39697c805d6b723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["LesUtilisateurs"]) ? $context["LesUtilisateurs"] : $this->getContext($context, "LesUtilisateurs")));
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), 0, array(), "array"), "html", null, true);
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
        
        $__internal_3b962779d409e46af7bb1cf6ef663a798ce4988ba781933db39697c805d6b723->leave($__internal_3b962779d409e46af7bb1cf6ef663a798ce4988ba781933db39697c805d6b723_prof);

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
        return array (  102 => 35,  91 => 30,  85 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  64 => 22,  60 => 21,  40 => 3,  34 => 2,  11 => 1,);
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
