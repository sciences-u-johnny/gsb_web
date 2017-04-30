<?php

/* @Test/Default/login.html.twig */
class __TwigTemplate_6e0927500a1222acf74a58ebf69e04f17890a0ec09565bd2404bc035e0d47497 extends Twig_Template
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
        $__internal_b2d3c6e22a3c4d82b4aeede047ec31866d83cec03c3252a9d575dc1cebfb9d73 = $this->env->getExtension("native_profiler");
        $__internal_b2d3c6e22a3c4d82b4aeede047ec31866d83cec03c3252a9d575dc1cebfb9d73->enter($__internal_b2d3c6e22a3c4d82b4aeede047ec31866d83cec03c3252a9d575dc1cebfb9d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/login.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"));
        
        $__internal_b2d3c6e22a3c4d82b4aeede047ec31866d83cec03c3252a9d575dc1cebfb9d73->leave($__internal_b2d3c6e22a3c4d82b4aeede047ec31866d83cec03c3252a9d575dc1cebfb9d73_prof);

    }

    public function getTemplateName()
    {
        return "@Test/Default/login.html.twig";
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
/* {{ render(controller('FOSUserBundle:Security:login')) }}*/
