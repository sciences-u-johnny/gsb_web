<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_798a9e1e8e5479fbf21958dd5918b057e22382a890bf63a5ea2ab89761ca752d extends Twig_Template
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
        $__internal_cd40550da26f061a91d8627782c190a4ec7638d9720cc89b153b27cb1d1751c6 = $this->env->getExtension("native_profiler");
        $__internal_cd40550da26f061a91d8627782c190a4ec7638d9720cc89b153b27cb1d1751c6->enter($__internal_cd40550da26f061a91d8627782c190a4ec7638d9720cc89b153b27cb1d1751c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cd40550da26f061a91d8627782c190a4ec7638d9720cc89b153b27cb1d1751c6->leave($__internal_cd40550da26f061a91d8627782c190a4ec7638d9720cc89b153b27cb1d1751c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
