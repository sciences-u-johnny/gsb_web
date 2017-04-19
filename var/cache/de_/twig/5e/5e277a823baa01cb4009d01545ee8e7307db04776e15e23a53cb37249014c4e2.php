<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2f334511a442b8dab84a8dd82c67ab622df5293b5d456b94ad8e8467c25866a4 extends Twig_Template
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
        $__internal_a06ffc2933794562949e461d3f42df306bd959618235ca44dc334d1ac0267edf = $this->env->getExtension("native_profiler");
        $__internal_a06ffc2933794562949e461d3f42df306bd959618235ca44dc334d1ac0267edf->enter($__internal_a06ffc2933794562949e461d3f42df306bd959618235ca44dc334d1ac0267edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a06ffc2933794562949e461d3f42df306bd959618235ca44dc334d1ac0267edf->leave($__internal_a06ffc2933794562949e461d3f42df306bd959618235ca44dc334d1ac0267edf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
