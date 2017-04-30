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
        $__internal_69305e16d4b0c0b74c1fcf12598c85225a80b67a77f48b1cd3f821833c8fed76 = $this->env->getExtension("native_profiler");
        $__internal_69305e16d4b0c0b74c1fcf12598c85225a80b67a77f48b1cd3f821833c8fed76->enter($__internal_69305e16d4b0c0b74c1fcf12598c85225a80b67a77f48b1cd3f821833c8fed76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_69305e16d4b0c0b74c1fcf12598c85225a80b67a77f48b1cd3f821833c8fed76->leave($__internal_69305e16d4b0c0b74c1fcf12598c85225a80b67a77f48b1cd3f821833c8fed76_prof);

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
