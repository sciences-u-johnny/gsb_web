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
        $__internal_ef4a44d0ad4ffc1d96ea14a2246564aa2fc706b9e18d91cb438666eedacc4544 = $this->env->getExtension("native_profiler");
        $__internal_ef4a44d0ad4ffc1d96ea14a2246564aa2fc706b9e18d91cb438666eedacc4544->enter($__internal_ef4a44d0ad4ffc1d96ea14a2246564aa2fc706b9e18d91cb438666eedacc4544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ef4a44d0ad4ffc1d96ea14a2246564aa2fc706b9e18d91cb438666eedacc4544->leave($__internal_ef4a44d0ad4ffc1d96ea14a2246564aa2fc706b9e18d91cb438666eedacc4544_prof);

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
