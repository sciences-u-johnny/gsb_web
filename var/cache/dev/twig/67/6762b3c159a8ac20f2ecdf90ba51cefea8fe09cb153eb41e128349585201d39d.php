<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_02b122e314fec7d8a568189e7e579edad4ca970b9cb8fef4ae474b75650fb61e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c11e66b28f9d0788b5045ac50c79ad2fe315f1f4e47d4949ed3745f227007aaa = $this->env->getExtension("native_profiler");
        $__internal_c11e66b28f9d0788b5045ac50c79ad2fe315f1f4e47d4949ed3745f227007aaa->enter($__internal_c11e66b28f9d0788b5045ac50c79ad2fe315f1f4e47d4949ed3745f227007aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c11e66b28f9d0788b5045ac50c79ad2fe315f1f4e47d4949ed3745f227007aaa->leave($__internal_c11e66b28f9d0788b5045ac50c79ad2fe315f1f4e47d4949ed3745f227007aaa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
