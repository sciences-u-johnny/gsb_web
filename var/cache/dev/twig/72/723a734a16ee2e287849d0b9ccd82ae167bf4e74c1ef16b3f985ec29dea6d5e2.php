<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f79b649d65e1574effa4391719fa3873e994b34b5439d19578917984422fe584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_a4b19e3ca97c0d9fb4d81a2392efaf5ea2fccd9f1e2636ecb6b339c0248e8b90 = $this->env->getExtension("native_profiler");
        $__internal_a4b19e3ca97c0d9fb4d81a2392efaf5ea2fccd9f1e2636ecb6b339c0248e8b90->enter($__internal_a4b19e3ca97c0d9fb4d81a2392efaf5ea2fccd9f1e2636ecb6b339c0248e8b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4b19e3ca97c0d9fb4d81a2392efaf5ea2fccd9f1e2636ecb6b339c0248e8b90->leave($__internal_a4b19e3ca97c0d9fb4d81a2392efaf5ea2fccd9f1e2636ecb6b339c0248e8b90_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfc3da31600e3ad6db87162804d5240b3ab1c8eb17dc4ea1377cd010366c85a7 = $this->env->getExtension("native_profiler");
        $__internal_dfc3da31600e3ad6db87162804d5240b3ab1c8eb17dc4ea1377cd010366c85a7->enter($__internal_dfc3da31600e3ad6db87162804d5240b3ab1c8eb17dc4ea1377cd010366c85a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_dfc3da31600e3ad6db87162804d5240b3ab1c8eb17dc4ea1377cd010366c85a7->leave($__internal_dfc3da31600e3ad6db87162804d5240b3ab1c8eb17dc4ea1377cd010366c85a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
