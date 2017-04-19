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
        $__internal_4178af0456c674937d8706a68d7e84a8d76e876a4d39e628af072fe8c7a40eac = $this->env->getExtension("native_profiler");
        $__internal_4178af0456c674937d8706a68d7e84a8d76e876a4d39e628af072fe8c7a40eac->enter($__internal_4178af0456c674937d8706a68d7e84a8d76e876a4d39e628af072fe8c7a40eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4178af0456c674937d8706a68d7e84a8d76e876a4d39e628af072fe8c7a40eac->leave($__internal_4178af0456c674937d8706a68d7e84a8d76e876a4d39e628af072fe8c7a40eac_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a0a9452bef841b40a8e5a62c9b203049364b21ec5f887f998cd5290e0b25590 = $this->env->getExtension("native_profiler");
        $__internal_9a0a9452bef841b40a8e5a62c9b203049364b21ec5f887f998cd5290e0b25590->enter($__internal_9a0a9452bef841b40a8e5a62c9b203049364b21ec5f887f998cd5290e0b25590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9a0a9452bef841b40a8e5a62c9b203049364b21ec5f887f998cd5290e0b25590->leave($__internal_9a0a9452bef841b40a8e5a62c9b203049364b21ec5f887f998cd5290e0b25590_prof);

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
