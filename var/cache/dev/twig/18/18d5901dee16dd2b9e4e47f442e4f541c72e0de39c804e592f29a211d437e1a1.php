<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_e6a0b013cddc5a7dd02d5909532b8eac68a071e70d3b7af81d0f061cd390d02f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_0dcd87002578e456f889f96a1da4a5cda52c226fd96761bb00a81ae81a68e8a2 = $this->env->getExtension("native_profiler");
        $__internal_0dcd87002578e456f889f96a1da4a5cda52c226fd96761bb00a81ae81a68e8a2->enter($__internal_0dcd87002578e456f889f96a1da4a5cda52c226fd96761bb00a81ae81a68e8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dcd87002578e456f889f96a1da4a5cda52c226fd96761bb00a81ae81a68e8a2->leave($__internal_0dcd87002578e456f889f96a1da4a5cda52c226fd96761bb00a81ae81a68e8a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3bacd1b83abb95f9d87ec98facf2ef0c7962d5041e40faaf42add8799441f61 = $this->env->getExtension("native_profiler");
        $__internal_f3bacd1b83abb95f9d87ec98facf2ef0c7962d5041e40faaf42add8799441f61->enter($__internal_f3bacd1b83abb95f9d87ec98facf2ef0c7962d5041e40faaf42add8799441f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_f3bacd1b83abb95f9d87ec98facf2ef0c7962d5041e40faaf42add8799441f61->leave($__internal_f3bacd1b83abb95f9d87ec98facf2ef0c7962d5041e40faaf42add8799441f61_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "@FOSUser/Resetting/reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
