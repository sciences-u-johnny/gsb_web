<?php

/* @Test/Default/login.html.twig */
class __TwigTemplate_0936c9b5ccc62994b82fe179f4ee90950bb0329ad7125d122bfd6e5478d0b273 extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"));
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
        return array (  19 => 1,);
    }
}
/* {{ render(controller('FOSUserBundle:Security:login')) }}*/
