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
        $__internal_bf75febef76fb1b66428d3057a4e3b6912ea2390d22f51e31f664bea28bff755 = $this->env->getExtension("native_profiler");
        $__internal_bf75febef76fb1b66428d3057a4e3b6912ea2390d22f51e31f664bea28bff755->enter($__internal_bf75febef76fb1b66428d3057a4e3b6912ea2390d22f51e31f664bea28bff755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf75febef76fb1b66428d3057a4e3b6912ea2390d22f51e31f664bea28bff755->leave($__internal_bf75febef76fb1b66428d3057a4e3b6912ea2390d22f51e31f664bea28bff755_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_971248be2b726c50979c17bc1878c1b1fa8511a1f11c04aa2a4f61879cf49a0f = $this->env->getExtension("native_profiler");
        $__internal_971248be2b726c50979c17bc1878c1b1fa8511a1f11c04aa2a4f61879cf49a0f->enter($__internal_971248be2b726c50979c17bc1878c1b1fa8511a1f11c04aa2a4f61879cf49a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_971248be2b726c50979c17bc1878c1b1fa8511a1f11c04aa2a4f61879cf49a0f->leave($__internal_971248be2b726c50979c17bc1878c1b1fa8511a1f11c04aa2a4f61879cf49a0f_prof);

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
