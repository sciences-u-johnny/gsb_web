<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0e9319d429021c93f4abbc057a629e8ad90f15375f4198933b6599c9a9f06cce extends Twig_Template
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
        $__internal_e06db2ba52b1364560193dea5d880e281f4e20ed417b474cc92f812e01c6f69e = $this->env->getExtension("native_profiler");
        $__internal_e06db2ba52b1364560193dea5d880e281f4e20ed417b474cc92f812e01c6f69e->enter($__internal_e06db2ba52b1364560193dea5d880e281f4e20ed417b474cc92f812e01c6f69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e06db2ba52b1364560193dea5d880e281f4e20ed417b474cc92f812e01c6f69e->leave($__internal_e06db2ba52b1364560193dea5d880e281f4e20ed417b474cc92f812e01c6f69e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
