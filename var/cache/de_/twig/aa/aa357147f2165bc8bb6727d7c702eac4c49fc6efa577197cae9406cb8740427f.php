<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_708c918b20446ae8f4fab2b0d559580dd32fca0bf6b5c43a25eca34f7528c6d3 extends Twig_Template
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
        $__internal_3d185e5c0abd1ba14ef1013358c8feef87f8dc08361257a4c4cb8f4a9025d0b8 = $this->env->getExtension("native_profiler");
        $__internal_3d185e5c0abd1ba14ef1013358c8feef87f8dc08361257a4c4cb8f4a9025d0b8->enter($__internal_3d185e5c0abd1ba14ef1013358c8feef87f8dc08361257a4c4cb8f4a9025d0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_3d185e5c0abd1ba14ef1013358c8feef87f8dc08361257a4c4cb8f4a9025d0b8->leave($__internal_3d185e5c0abd1ba14ef1013358c8feef87f8dc08361257a4c4cb8f4a9025d0b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
