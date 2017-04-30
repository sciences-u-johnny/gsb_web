<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_28d8a9eb498a92f4971a480d64c845e8b1dfab173dd4b7d24951631c01e7ac15 extends Twig_Template
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
        $__internal_46cdd4f5f3b7be5c7c0b5fcd493e89799762711f42b658a41267b8f419230b44 = $this->env->getExtension("native_profiler");
        $__internal_46cdd4f5f3b7be5c7c0b5fcd493e89799762711f42b658a41267b8f419230b44->enter($__internal_46cdd4f5f3b7be5c7c0b5fcd493e89799762711f42b658a41267b8f419230b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_46cdd4f5f3b7be5c7c0b5fcd493e89799762711f42b658a41267b8f419230b44->leave($__internal_46cdd4f5f3b7be5c7c0b5fcd493e89799762711f42b658a41267b8f419230b44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
