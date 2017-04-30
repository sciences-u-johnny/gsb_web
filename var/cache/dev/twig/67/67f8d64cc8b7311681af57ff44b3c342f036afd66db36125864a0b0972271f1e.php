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
        $__internal_296c3a56978e7161a0c4d87920738a4ff5e04e73cfc89016c2a4d986701cff25 = $this->env->getExtension("native_profiler");
        $__internal_296c3a56978e7161a0c4d87920738a4ff5e04e73cfc89016c2a4d986701cff25->enter($__internal_296c3a56978e7161a0c4d87920738a4ff5e04e73cfc89016c2a4d986701cff25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_296c3a56978e7161a0c4d87920738a4ff5e04e73cfc89016c2a4d986701cff25->leave($__internal_296c3a56978e7161a0c4d87920738a4ff5e04e73cfc89016c2a4d986701cff25_prof);

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
