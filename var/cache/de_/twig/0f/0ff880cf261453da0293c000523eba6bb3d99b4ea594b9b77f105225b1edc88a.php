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
        $__internal_463ea8d11f2c598402119e07800ef662278a3d4b695e835a5eb039a801d130b9 = $this->env->getExtension("native_profiler");
        $__internal_463ea8d11f2c598402119e07800ef662278a3d4b695e835a5eb039a801d130b9->enter($__internal_463ea8d11f2c598402119e07800ef662278a3d4b695e835a5eb039a801d130b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_463ea8d11f2c598402119e07800ef662278a3d4b695e835a5eb039a801d130b9->leave($__internal_463ea8d11f2c598402119e07800ef662278a3d4b695e835a5eb039a801d130b9_prof);

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
