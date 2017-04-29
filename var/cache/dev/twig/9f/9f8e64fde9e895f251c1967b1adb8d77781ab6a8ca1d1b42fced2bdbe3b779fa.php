<?php

/* TestBundle:Default:login.html.twig */
class __TwigTemplate_dde79e9d0713d6d0c537346831f3fe400e8e696d9fdfc9c7e9e7d61fd3369b97 extends Twig_Template
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
        $__internal_72e5e88ef33c54f5ad1551507dffa8276055ad213924ea3780e9edcff59c2817 = $this->env->getExtension("native_profiler");
        $__internal_72e5e88ef33c54f5ad1551507dffa8276055ad213924ea3780e9edcff59c2817->enter($__internal_72e5e88ef33c54f5ad1551507dffa8276055ad213924ea3780e9edcff59c2817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:login.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"));
        
        $__internal_72e5e88ef33c54f5ad1551507dffa8276055ad213924ea3780e9edcff59c2817->leave($__internal_72e5e88ef33c54f5ad1551507dffa8276055ad213924ea3780e9edcff59c2817_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:login.html.twig";
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
