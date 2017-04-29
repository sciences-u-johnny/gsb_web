<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9dbb71c90d7678d84eb9f9077fc9e3904c40213864ddcef1b32a384b3093206b extends Twig_Template
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
        $__internal_b5af01e30717eddf02015199616b2725bbfa099095dbf6500288a99c364dfd85 = $this->env->getExtension("native_profiler");
        $__internal_b5af01e30717eddf02015199616b2725bbfa099095dbf6500288a99c364dfd85->enter($__internal_b5af01e30717eddf02015199616b2725bbfa099095dbf6500288a99c364dfd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b5af01e30717eddf02015199616b2725bbfa099095dbf6500288a99c364dfd85->leave($__internal_b5af01e30717eddf02015199616b2725bbfa099095dbf6500288a99c364dfd85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
