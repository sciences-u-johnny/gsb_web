<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7973156018b98192a066039e46e5850f32665474ef98d95396c02bd42c107944 extends Twig_Template
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
        $__internal_27b1c71f5b0dd7e06cc7e2f5684450c8db65ce3c17fe5b07f26911ab2888c196 = $this->env->getExtension("native_profiler");
        $__internal_27b1c71f5b0dd7e06cc7e2f5684450c8db65ce3c17fe5b07f26911ab2888c196->enter($__internal_27b1c71f5b0dd7e06cc7e2f5684450c8db65ce3c17fe5b07f26911ab2888c196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_27b1c71f5b0dd7e06cc7e2f5684450c8db65ce3c17fe5b07f26911ab2888c196->leave($__internal_27b1c71f5b0dd7e06cc7e2f5684450c8db65ce3c17fe5b07f26911ab2888c196_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
