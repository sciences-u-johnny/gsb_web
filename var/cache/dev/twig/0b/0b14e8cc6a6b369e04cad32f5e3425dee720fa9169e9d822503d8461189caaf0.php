<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_7f42a06a2b455e1de6b850897bf62477721cb674b12fa5935e5e22deee907e36 extends Twig_Template
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
        $__internal_6c9e6667bdc8a46f31b131f10f2d7d0bc3368c2bf6c4bcc12dedd7e79fc4c9e9 = $this->env->getExtension("native_profiler");
        $__internal_6c9e6667bdc8a46f31b131f10f2d7d0bc3368c2bf6c4bcc12dedd7e79fc4c9e9->enter($__internal_6c9e6667bdc8a46f31b131f10f2d7d0bc3368c2bf6c4bcc12dedd7e79fc4c9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6c9e6667bdc8a46f31b131f10f2d7d0bc3368c2bf6c4bcc12dedd7e79fc4c9e9->leave($__internal_6c9e6667bdc8a46f31b131f10f2d7d0bc3368c2bf6c4bcc12dedd7e79fc4c9e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
