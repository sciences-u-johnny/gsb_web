<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_0689b0d8cea521928471cc0730b206330410e8e0b4ece7556d5128a75865af49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_5acd049e577aecceb7928d4a4418dcdbd8eed20792edcbe0bb5e20630b662e62 = $this->env->getExtension("native_profiler");
        $__internal_5acd049e577aecceb7928d4a4418dcdbd8eed20792edcbe0bb5e20630b662e62->enter($__internal_5acd049e577aecceb7928d4a4418dcdbd8eed20792edcbe0bb5e20630b662e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5acd049e577aecceb7928d4a4418dcdbd8eed20792edcbe0bb5e20630b662e62->leave($__internal_5acd049e577aecceb7928d4a4418dcdbd8eed20792edcbe0bb5e20630b662e62_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ec0288aa5474aa9f1095a2693c3973bfce3cd4c6653df8b13136d186939d7e9 = $this->env->getExtension("native_profiler");
        $__internal_5ec0288aa5474aa9f1095a2693c3973bfce3cd4c6653df8b13136d186939d7e9->enter($__internal_5ec0288aa5474aa9f1095a2693c3973bfce3cd4c6653df8b13136d186939d7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_5ec0288aa5474aa9f1095a2693c3973bfce3cd4c6653df8b13136d186939d7e9->leave($__internal_5ec0288aa5474aa9f1095a2693c3973bfce3cd4c6653df8b13136d186939d7e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
