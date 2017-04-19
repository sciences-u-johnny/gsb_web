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
        $__internal_6954212acb48d6806c15242997e74f59f3cb72fc4de5a552cf698102b7f2f2de = $this->env->getExtension("native_profiler");
        $__internal_6954212acb48d6806c15242997e74f59f3cb72fc4de5a552cf698102b7f2f2de->enter($__internal_6954212acb48d6806c15242997e74f59f3cb72fc4de5a552cf698102b7f2f2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/login.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"));
        
        $__internal_6954212acb48d6806c15242997e74f59f3cb72fc4de5a552cf698102b7f2f2de->leave($__internal_6954212acb48d6806c15242997e74f59f3cb72fc4de5a552cf698102b7f2f2de_prof);

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
