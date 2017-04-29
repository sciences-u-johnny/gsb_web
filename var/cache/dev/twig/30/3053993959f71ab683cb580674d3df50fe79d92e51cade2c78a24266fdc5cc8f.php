<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_eb116dc25384a9a3d28b8a884167ddf17b77b343b8d8d76c28e00e3ae28beb29 extends Twig_Template
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
        $__internal_32b6e10c82c1c6e1d99bd1bdd04c55465d7c9e1343d9f13fb5f4239f3ec1142a = $this->env->getExtension("native_profiler");
        $__internal_32b6e10c82c1c6e1d99bd1bdd04c55465d7c9e1343d9f13fb5f4239f3ec1142a->enter($__internal_32b6e10c82c1c6e1d99bd1bdd04c55465d7c9e1343d9f13fb5f4239f3ec1142a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_32b6e10c82c1c6e1d99bd1bdd04c55465d7c9e1343d9f13fb5f4239f3ec1142a->leave($__internal_32b6e10c82c1c6e1d99bd1bdd04c55465d7c9e1343d9f13fb5f4239f3ec1142a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
