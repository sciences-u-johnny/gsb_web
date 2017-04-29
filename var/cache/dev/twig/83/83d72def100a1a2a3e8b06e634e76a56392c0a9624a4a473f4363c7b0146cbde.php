<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fde02ae376a9c68db2265083939b935d58ec8a41f4355f131ad1b174f9302c36 extends Twig_Template
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
        $__internal_c6ca291ad9c57d0f9d7344c9f8e7000c03164c46126708bd8ac87965a8caf55f = $this->env->getExtension("native_profiler");
        $__internal_c6ca291ad9c57d0f9d7344c9f8e7000c03164c46126708bd8ac87965a8caf55f->enter($__internal_c6ca291ad9c57d0f9d7344c9f8e7000c03164c46126708bd8ac87965a8caf55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c6ca291ad9c57d0f9d7344c9f8e7000c03164c46126708bd8ac87965a8caf55f->leave($__internal_c6ca291ad9c57d0f9d7344c9f8e7000c03164c46126708bd8ac87965a8caf55f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
