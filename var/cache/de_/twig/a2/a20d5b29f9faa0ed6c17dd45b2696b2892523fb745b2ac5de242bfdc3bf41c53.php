<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_50b9ba44982c904eca079fc317e3e9c94fbb2d8c25b3e40bd7397524e0d3b5a8 extends Twig_Template
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
        $__internal_8207437978d910b06e2eb8fc57ae22bbbcfd4cbe5efa5a3c4fa6a7c7ad14bbaa = $this->env->getExtension("native_profiler");
        $__internal_8207437978d910b06e2eb8fc57ae22bbbcfd4cbe5efa5a3c4fa6a7c7ad14bbaa->enter($__internal_8207437978d910b06e2eb8fc57ae22bbbcfd4cbe5efa5a3c4fa6a7c7ad14bbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8207437978d910b06e2eb8fc57ae22bbbcfd4cbe5efa5a3c4fa6a7c7ad14bbaa->leave($__internal_8207437978d910b06e2eb8fc57ae22bbbcfd4cbe5efa5a3c4fa6a7c7ad14bbaa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
