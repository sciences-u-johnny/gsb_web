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
        $__internal_aef04c1d64a45754c41d703ada27c3696fd92ce633d6cb0d6ccf001ee30c384b = $this->env->getExtension("native_profiler");
        $__internal_aef04c1d64a45754c41d703ada27c3696fd92ce633d6cb0d6ccf001ee30c384b->enter($__internal_aef04c1d64a45754c41d703ada27c3696fd92ce633d6cb0d6ccf001ee30c384b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_aef04c1d64a45754c41d703ada27c3696fd92ce633d6cb0d6ccf001ee30c384b->leave($__internal_aef04c1d64a45754c41d703ada27c3696fd92ce633d6cb0d6ccf001ee30c384b_prof);

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
