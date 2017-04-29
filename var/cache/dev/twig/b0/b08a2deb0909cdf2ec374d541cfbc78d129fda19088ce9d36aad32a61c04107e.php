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
        $__internal_aab738dfe9dbdfc1ea30422dd9ba5b62cca9a0db764b6089b664094bfada74d7 = $this->env->getExtension("native_profiler");
        $__internal_aab738dfe9dbdfc1ea30422dd9ba5b62cca9a0db764b6089b664094bfada74d7->enter($__internal_aab738dfe9dbdfc1ea30422dd9ba5b62cca9a0db764b6089b664094bfada74d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/login.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"));
        
        $__internal_aab738dfe9dbdfc1ea30422dd9ba5b62cca9a0db764b6089b664094bfada74d7->leave($__internal_aab738dfe9dbdfc1ea30422dd9ba5b62cca9a0db764b6089b664094bfada74d7_prof);

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
