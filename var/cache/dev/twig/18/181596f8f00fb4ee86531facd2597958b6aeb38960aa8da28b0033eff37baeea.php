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
        $__internal_b0b531d2801d7e633bfc3fc666a4148b77bd73b97a54c72309048a596bbfd717 = $this->env->getExtension("native_profiler");
        $__internal_b0b531d2801d7e633bfc3fc666a4148b77bd73b97a54c72309048a596bbfd717->enter($__internal_b0b531d2801d7e633bfc3fc666a4148b77bd73b97a54c72309048a596bbfd717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0b531d2801d7e633bfc3fc666a4148b77bd73b97a54c72309048a596bbfd717->leave($__internal_b0b531d2801d7e633bfc3fc666a4148b77bd73b97a54c72309048a596bbfd717_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cac3eb6af7b898c1d20780bd982fe4ee071ac1e2d535a2d4ee43791f4e985e0c = $this->env->getExtension("native_profiler");
        $__internal_cac3eb6af7b898c1d20780bd982fe4ee071ac1e2d535a2d4ee43791f4e985e0c->enter($__internal_cac3eb6af7b898c1d20780bd982fe4ee071ac1e2d535a2d4ee43791f4e985e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_cac3eb6af7b898c1d20780bd982fe4ee071ac1e2d535a2d4ee43791f4e985e0c->leave($__internal_cac3eb6af7b898c1d20780bd982fe4ee071ac1e2d535a2d4ee43791f4e985e0c_prof);

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
