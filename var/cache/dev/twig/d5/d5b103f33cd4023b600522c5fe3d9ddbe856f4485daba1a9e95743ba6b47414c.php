<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_7127b37b476fd6d1d50409e36367aace13244fddb5e6747a920c43cb4c48a61c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_505faaf3932a473ddbf12acd1fba5ca9f16c1e59ada7a07a32be0295ced7d9a6 = $this->env->getExtension("native_profiler");
        $__internal_505faaf3932a473ddbf12acd1fba5ca9f16c1e59ada7a07a32be0295ced7d9a6->enter($__internal_505faaf3932a473ddbf12acd1fba5ca9f16c1e59ada7a07a32be0295ced7d9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_505faaf3932a473ddbf12acd1fba5ca9f16c1e59ada7a07a32be0295ced7d9a6->leave($__internal_505faaf3932a473ddbf12acd1fba5ca9f16c1e59ada7a07a32be0295ced7d9a6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc19e55bdd08dfbeed3810643b67aa01e8ecc1f45467925a068bca1785be55de = $this->env->getExtension("native_profiler");
        $__internal_cc19e55bdd08dfbeed3810643b67aa01e8ecc1f45467925a068bca1785be55de->enter($__internal_cc19e55bdd08dfbeed3810643b67aa01e8ecc1f45467925a068bca1785be55de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cc19e55bdd08dfbeed3810643b67aa01e8ecc1f45467925a068bca1785be55de->leave($__internal_cc19e55bdd08dfbeed3810643b67aa01e8ecc1f45467925a068bca1785be55de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
