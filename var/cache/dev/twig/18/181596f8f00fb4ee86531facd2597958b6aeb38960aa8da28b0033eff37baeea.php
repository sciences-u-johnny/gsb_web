<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_d11e5e062825329f3caca58bff5eae99da85193918da078d16dbf28f0b101f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_b5ac7aa024628c7e9c7d60a833e314b32dc592ebf86f66bce5081dd1b5bde110 = $this->env->getExtension("native_profiler");
        $__internal_b5ac7aa024628c7e9c7d60a833e314b32dc592ebf86f66bce5081dd1b5bde110->enter($__internal_b5ac7aa024628c7e9c7d60a833e314b32dc592ebf86f66bce5081dd1b5bde110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5ac7aa024628c7e9c7d60a833e314b32dc592ebf86f66bce5081dd1b5bde110->leave($__internal_b5ac7aa024628c7e9c7d60a833e314b32dc592ebf86f66bce5081dd1b5bde110_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cbb044ec1e92acebc06538cc51116437d223117f8965b19b14a034e54a513a5b = $this->env->getExtension("native_profiler");
        $__internal_cbb044ec1e92acebc06538cc51116437d223117f8965b19b14a034e54a513a5b->enter($__internal_cbb044ec1e92acebc06538cc51116437d223117f8965b19b14a034e54a513a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_cbb044ec1e92acebc06538cc51116437d223117f8965b19b14a034e54a513a5b->leave($__internal_cbb044ec1e92acebc06538cc51116437d223117f8965b19b14a034e54a513a5b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}*/
/* </p>*/
/* {% endblock %}*/
/* */
