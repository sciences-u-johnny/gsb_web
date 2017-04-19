<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4763036af7338338d5a44a32e0d844955d548466f6ae2ed01e42219ecc4a6da9 extends Twig_Template
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
        $__internal_6e624a65e7d206d871ccdf4754b39a6d47c62a930311f0c6695ed1a372e812c9 = $this->env->getExtension("native_profiler");
        $__internal_6e624a65e7d206d871ccdf4754b39a6d47c62a930311f0c6695ed1a372e812c9->enter($__internal_6e624a65e7d206d871ccdf4754b39a6d47c62a930311f0c6695ed1a372e812c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6e624a65e7d206d871ccdf4754b39a6d47c62a930311f0c6695ed1a372e812c9->leave($__internal_6e624a65e7d206d871ccdf4754b39a6d47c62a930311f0c6695ed1a372e812c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
