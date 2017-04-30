<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8cdb46b3acad6448b79906edaa0740ac4bbfd512619f52a058714bae111622fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_7b384aebee5af22e2c8a5c6da9065c766adf7b936a810c0a70b206119afbff70 = $this->env->getExtension("native_profiler");
        $__internal_7b384aebee5af22e2c8a5c6da9065c766adf7b936a810c0a70b206119afbff70->enter($__internal_7b384aebee5af22e2c8a5c6da9065c766adf7b936a810c0a70b206119afbff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b384aebee5af22e2c8a5c6da9065c766adf7b936a810c0a70b206119afbff70->leave($__internal_7b384aebee5af22e2c8a5c6da9065c766adf7b936a810c0a70b206119afbff70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ca1bf2ae05b74b9e063e7e9121dd2eb4f3d8622ddb8d761a1ab1f8d6dca7a70 = $this->env->getExtension("native_profiler");
        $__internal_0ca1bf2ae05b74b9e063e7e9121dd2eb4f3d8622ddb8d761a1ab1f8d6dca7a70->enter($__internal_0ca1bf2ae05b74b9e063e7e9121dd2eb4f3d8622ddb8d761a1ab1f8d6dca7a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_0ca1bf2ae05b74b9e063e7e9121dd2eb4f3d8622ddb8d761a1ab1f8d6dca7a70->leave($__internal_0ca1bf2ae05b74b9e063e7e9121dd2eb4f3d8622ddb8d761a1ab1f8d6dca7a70_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Profile/show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
