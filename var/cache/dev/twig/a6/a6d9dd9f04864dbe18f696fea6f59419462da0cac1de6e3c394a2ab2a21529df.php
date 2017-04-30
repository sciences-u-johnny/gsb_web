<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ce64ec12a2b2dd809e7e95f6efc67bc855fb8a460e13ffda5e056b78545b9e3c extends Twig_Template
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
        $__internal_3c22ef4a026bafa89f79977267e3b2877a6316fa88944f1347dad6e6aa672ea4 = $this->env->getExtension("native_profiler");
        $__internal_3c22ef4a026bafa89f79977267e3b2877a6316fa88944f1347dad6e6aa672ea4->enter($__internal_3c22ef4a026bafa89f79977267e3b2877a6316fa88944f1347dad6e6aa672ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3c22ef4a026bafa89f79977267e3b2877a6316fa88944f1347dad6e6aa672ea4->leave($__internal_3c22ef4a026bafa89f79977267e3b2877a6316fa88944f1347dad6e6aa672ea4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
