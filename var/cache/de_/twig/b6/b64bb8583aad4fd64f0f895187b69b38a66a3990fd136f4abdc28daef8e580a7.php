<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_beeed2b2849f12f5de726831f96a522c5f51b15a425d3af997d14009dee36a70 extends Twig_Template
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
        $__internal_5716809419bf670db34be50363e0d4040bff5d8e51df1cf5ab98e9f018212081 = $this->env->getExtension("native_profiler");
        $__internal_5716809419bf670db34be50363e0d4040bff5d8e51df1cf5ab98e9f018212081->enter($__internal_5716809419bf670db34be50363e0d4040bff5d8e51df1cf5ab98e9f018212081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5716809419bf670db34be50363e0d4040bff5d8e51df1cf5ab98e9f018212081->leave($__internal_5716809419bf670db34be50363e0d4040bff5d8e51df1cf5ab98e9f018212081_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
