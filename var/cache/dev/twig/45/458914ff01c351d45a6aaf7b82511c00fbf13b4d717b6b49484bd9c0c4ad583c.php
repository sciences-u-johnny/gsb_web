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
        $__internal_969cd4cdbd6a5e897da0aaea9dc1ad9ef17a1690578eb4a3123c7a17e0d82187 = $this->env->getExtension("native_profiler");
        $__internal_969cd4cdbd6a5e897da0aaea9dc1ad9ef17a1690578eb4a3123c7a17e0d82187->enter($__internal_969cd4cdbd6a5e897da0aaea9dc1ad9ef17a1690578eb4a3123c7a17e0d82187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_969cd4cdbd6a5e897da0aaea9dc1ad9ef17a1690578eb4a3123c7a17e0d82187->leave($__internal_969cd4cdbd6a5e897da0aaea9dc1ad9ef17a1690578eb4a3123c7a17e0d82187_prof);

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
