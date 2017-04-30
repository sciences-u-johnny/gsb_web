<?php

/* TestBundle:Default:login.html.twig */
class __TwigTemplate_5348b1ea7c0d530391d904b399fcd170577a3e4ae07a9491ddb303743809e8b7 extends Twig_Template
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
        return "TestBundle:Default:login.html.twig";
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
