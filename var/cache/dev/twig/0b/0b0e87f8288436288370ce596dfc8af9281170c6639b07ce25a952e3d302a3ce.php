<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_a8ab057dd5100404bb39192384df9132e5d0d0d083bbdc35efaca87b7ff0886e extends Twig_Template
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
        $__internal_0c8a33ce123813853b9ea161e9ad808a9bdf3dc5a4cd9c4ae23d45382853fb3a = $this->env->getExtension("native_profiler");
        $__internal_0c8a33ce123813853b9ea161e9ad808a9bdf3dc5a4cd9c4ae23d45382853fb3a->enter($__internal_0c8a33ce123813853b9ea161e9ad808a9bdf3dc5a4cd9c4ae23d45382853fb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0c8a33ce123813853b9ea161e9ad808a9bdf3dc5a4cd9c4ae23d45382853fb3a->leave($__internal_0c8a33ce123813853b9ea161e9ad808a9bdf3dc5a4cd9c4ae23d45382853fb3a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
