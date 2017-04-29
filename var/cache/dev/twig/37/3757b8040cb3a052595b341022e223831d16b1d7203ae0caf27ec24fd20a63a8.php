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
        $__internal_29d744cf30c0347a10d5ab44e91cb1764282fc2a6004bddae45805536213bc0e = $this->env->getExtension("native_profiler");
        $__internal_29d744cf30c0347a10d5ab44e91cb1764282fc2a6004bddae45805536213bc0e->enter($__internal_29d744cf30c0347a10d5ab44e91cb1764282fc2a6004bddae45805536213bc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_29d744cf30c0347a10d5ab44e91cb1764282fc2a6004bddae45805536213bc0e->leave($__internal_29d744cf30c0347a10d5ab44e91cb1764282fc2a6004bddae45805536213bc0e_prof);

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
