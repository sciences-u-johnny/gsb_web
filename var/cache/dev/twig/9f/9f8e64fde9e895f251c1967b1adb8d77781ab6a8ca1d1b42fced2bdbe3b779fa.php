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
        $__internal_3ca8258e40ff6b4570217d2456fc473cdb6e1adfedfa32e243cf142f14d9426a = $this->env->getExtension("native_profiler");
        $__internal_3ca8258e40ff6b4570217d2456fc473cdb6e1adfedfa32e243cf142f14d9426a->enter($__internal_3ca8258e40ff6b4570217d2456fc473cdb6e1adfedfa32e243cf142f14d9426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:login.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"));
        
        $__internal_3ca8258e40ff6b4570217d2456fc473cdb6e1adfedfa32e243cf142f14d9426a->leave($__internal_3ca8258e40ff6b4570217d2456fc473cdb6e1adfedfa32e243cf142f14d9426a_prof);

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
