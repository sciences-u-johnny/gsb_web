<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_16623a003b81f7e6417eeeb019e3450b2d1a83e8b0ca82bae1c985e1f2e2ba84 extends Twig_Template
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
        $__internal_b6132c46d305dc0f4182a7bd3e618eea77c8628dd39dfaa536e810036e5402f2 = $this->env->getExtension("native_profiler");
        $__internal_b6132c46d305dc0f4182a7bd3e618eea77c8628dd39dfaa536e810036e5402f2->enter($__internal_b6132c46d305dc0f4182a7bd3e618eea77c8628dd39dfaa536e810036e5402f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b6132c46d305dc0f4182a7bd3e618eea77c8628dd39dfaa536e810036e5402f2->leave($__internal_b6132c46d305dc0f4182a7bd3e618eea77c8628dd39dfaa536e810036e5402f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
