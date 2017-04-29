<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_4501cb16b9ae048cbcf5c5f879a73bdd3923c9f67c2b93e35381f2da734f9437 extends Twig_Template
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
        $__internal_3df8271f1a625356be25d7687849be9a81d23e5000b3cc93fc0c318a93837437 = $this->env->getExtension("native_profiler");
        $__internal_3df8271f1a625356be25d7687849be9a81d23e5000b3cc93fc0c318a93837437->enter($__internal_3df8271f1a625356be25d7687849be9a81d23e5000b3cc93fc0c318a93837437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3df8271f1a625356be25d7687849be9a81d23e5000b3cc93fc0c318a93837437->leave($__internal_3df8271f1a625356be25d7687849be9a81d23e5000b3cc93fc0c318a93837437_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
