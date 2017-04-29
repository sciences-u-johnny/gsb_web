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
        $__internal_83bd8c36f1ecad9aecbb7ef37bb3076a10f9f6ac8b192e6e460721ea8dc2de7d = $this->env->getExtension("native_profiler");
        $__internal_83bd8c36f1ecad9aecbb7ef37bb3076a10f9f6ac8b192e6e460721ea8dc2de7d->enter($__internal_83bd8c36f1ecad9aecbb7ef37bb3076a10f9f6ac8b192e6e460721ea8dc2de7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_83bd8c36f1ecad9aecbb7ef37bb3076a10f9f6ac8b192e6e460721ea8dc2de7d->leave($__internal_83bd8c36f1ecad9aecbb7ef37bb3076a10f9f6ac8b192e6e460721ea8dc2de7d_prof);

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
