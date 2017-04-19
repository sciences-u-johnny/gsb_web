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
        $__internal_77c43376b0bccd5165f91f161960717f3618e69504f7bf7c586ba615e301d475 = $this->env->getExtension("native_profiler");
        $__internal_77c43376b0bccd5165f91f161960717f3618e69504f7bf7c586ba615e301d475->enter($__internal_77c43376b0bccd5165f91f161960717f3618e69504f7bf7c586ba615e301d475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_77c43376b0bccd5165f91f161960717f3618e69504f7bf7c586ba615e301d475->leave($__internal_77c43376b0bccd5165f91f161960717f3618e69504f7bf7c586ba615e301d475_prof);

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
