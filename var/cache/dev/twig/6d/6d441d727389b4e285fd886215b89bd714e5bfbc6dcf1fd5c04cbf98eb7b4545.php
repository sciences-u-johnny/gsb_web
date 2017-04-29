<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e69b12e42bb3b2caffec7241a8ffdee8244973255b8699d9529a1a8621fb336e extends Twig_Template
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
        $__internal_a60d94abd3545d093bc340d4d91d6f4984ef03485b168da7f2a724b044047281 = $this->env->getExtension("native_profiler");
        $__internal_a60d94abd3545d093bc340d4d91d6f4984ef03485b168da7f2a724b044047281->enter($__internal_a60d94abd3545d093bc340d4d91d6f4984ef03485b168da7f2a724b044047281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_a60d94abd3545d093bc340d4d91d6f4984ef03485b168da7f2a724b044047281->leave($__internal_a60d94abd3545d093bc340d4d91d6f4984ef03485b168da7f2a724b044047281_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
