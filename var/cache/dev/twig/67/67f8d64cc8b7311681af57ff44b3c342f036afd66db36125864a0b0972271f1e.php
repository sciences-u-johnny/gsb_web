<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bd2ccb418414e172b0e366b0407c460866623715d65ccf0b07f9fa0b70617063 extends Twig_Template
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
        $__internal_9acc54a64a525b44cc799ab361b38b3a7ac286868a5652d84a9bc37b50069cf7 = $this->env->getExtension("native_profiler");
        $__internal_9acc54a64a525b44cc799ab361b38b3a7ac286868a5652d84a9bc37b50069cf7->enter($__internal_9acc54a64a525b44cc799ab361b38b3a7ac286868a5652d84a9bc37b50069cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9acc54a64a525b44cc799ab361b38b3a7ac286868a5652d84a9bc37b50069cf7->leave($__internal_9acc54a64a525b44cc799ab361b38b3a7ac286868a5652d84a9bc37b50069cf7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
