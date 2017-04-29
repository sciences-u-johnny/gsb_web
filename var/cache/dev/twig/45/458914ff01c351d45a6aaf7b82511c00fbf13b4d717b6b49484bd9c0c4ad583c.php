<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_32a9e325ca057db7967da2673625e6fccdb5fed15be7def6968b9c11954c0a16 extends Twig_Template
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
        $__internal_cf43e93b5c5df8e1084a6bec0c4f0616489fe8c332350df55f7ed72ca3f13f9a = $this->env->getExtension("native_profiler");
        $__internal_cf43e93b5c5df8e1084a6bec0c4f0616489fe8c332350df55f7ed72ca3f13f9a->enter($__internal_cf43e93b5c5df8e1084a6bec0c4f0616489fe8c332350df55f7ed72ca3f13f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cf43e93b5c5df8e1084a6bec0c4f0616489fe8c332350df55f7ed72ca3f13f9a->leave($__internal_cf43e93b5c5df8e1084a6bec0c4f0616489fe8c332350df55f7ed72ca3f13f9a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
