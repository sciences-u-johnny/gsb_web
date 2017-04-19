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
        $__internal_a8ba24570c6e22bc9788738e8c416c5d9d32cb847523349c8b0b00d842758bc8 = $this->env->getExtension("native_profiler");
        $__internal_a8ba24570c6e22bc9788738e8c416c5d9d32cb847523349c8b0b00d842758bc8->enter($__internal_a8ba24570c6e22bc9788738e8c416c5d9d32cb847523349c8b0b00d842758bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a8ba24570c6e22bc9788738e8c416c5d9d32cb847523349c8b0b00d842758bc8->leave($__internal_a8ba24570c6e22bc9788738e8c416c5d9d32cb847523349c8b0b00d842758bc8_prof);

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
