<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_3b77621546c1ba38d000cba9697593a0d3c844a1c14f1e62f5c27a59f82300b0 extends Twig_Template
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
        $__internal_60acc3bfd0efd307ba8c9fd8aa4e8d3a74aa18f1425b54659317d1b4b238271d = $this->env->getExtension("native_profiler");
        $__internal_60acc3bfd0efd307ba8c9fd8aa4e8d3a74aa18f1425b54659317d1b4b238271d->enter($__internal_60acc3bfd0efd307ba8c9fd8aa4e8d3a74aa18f1425b54659317d1b4b238271d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_60acc3bfd0efd307ba8c9fd8aa4e8d3a74aa18f1425b54659317d1b4b238271d->leave($__internal_60acc3bfd0efd307ba8c9fd8aa4e8d3a74aa18f1425b54659317d1b4b238271d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
