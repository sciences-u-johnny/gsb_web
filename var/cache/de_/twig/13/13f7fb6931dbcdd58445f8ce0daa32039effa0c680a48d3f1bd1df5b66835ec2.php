<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_7fbd83a5eef86d71cabe9e907c279aa4e0a497c053750cd5e34e53052e9e59a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddaf5e4df92a2caa0c6d9d92bd92bf42d53ba2bfa65e2138e4f82051b00d3d03 = $this->env->getExtension("native_profiler");
        $__internal_ddaf5e4df92a2caa0c6d9d92bd92bf42d53ba2bfa65e2138e4f82051b00d3d03->enter($__internal_ddaf5e4df92a2caa0c6d9d92bd92bf42d53ba2bfa65e2138e4f82051b00d3d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddaf5e4df92a2caa0c6d9d92bd92bf42d53ba2bfa65e2138e4f82051b00d3d03->leave($__internal_ddaf5e4df92a2caa0c6d9d92bd92bf42d53ba2bfa65e2138e4f82051b00d3d03_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3c15e42324d382b4c3790587b57219e08e3f34636d67b030de0b47267815e00 = $this->env->getExtension("native_profiler");
        $__internal_c3c15e42324d382b4c3790587b57219e08e3f34636d67b030de0b47267815e00->enter($__internal_c3c15e42324d382b4c3790587b57219e08e3f34636d67b030de0b47267815e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c3c15e42324d382b4c3790587b57219e08e3f34636d67b030de0b47267815e00->leave($__internal_c3c15e42324d382b4c3790587b57219e08e3f34636d67b030de0b47267815e00_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
