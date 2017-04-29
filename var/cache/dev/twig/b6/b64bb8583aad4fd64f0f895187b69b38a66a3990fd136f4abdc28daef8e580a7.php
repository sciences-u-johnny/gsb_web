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
        $__internal_2853c1947d92529b7692e0dda485a5b54a0679db91afeafb2bc0789f08651c8c = $this->env->getExtension("native_profiler");
        $__internal_2853c1947d92529b7692e0dda485a5b54a0679db91afeafb2bc0789f08651c8c->enter($__internal_2853c1947d92529b7692e0dda485a5b54a0679db91afeafb2bc0789f08651c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2853c1947d92529b7692e0dda485a5b54a0679db91afeafb2bc0789f08651c8c->leave($__internal_2853c1947d92529b7692e0dda485a5b54a0679db91afeafb2bc0789f08651c8c_prof);

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
