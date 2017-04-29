<?php

/* TestBundle:Default:addVisiteur.html.twig */
class __TwigTemplate_fd6f1522f78cc8b998f752952d8fbd5cc7fc54d00c3eea14b93af017992bca14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "TestBundle:Default:addVisiteur.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9002d5093356b7ea976093d296441bbcf018bb717e3ad25dddde844f5bf3b44 = $this->env->getExtension("native_profiler");
        $__internal_d9002d5093356b7ea976093d296441bbcf018bb717e3ad25dddde844f5bf3b44->enter($__internal_d9002d5093356b7ea976093d296441bbcf018bb717e3ad25dddde844f5bf3b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:addVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9002d5093356b7ea976093d296441bbcf018bb717e3ad25dddde844f5bf3b44->leave($__internal_d9002d5093356b7ea976093d296441bbcf018bb717e3ad25dddde844f5bf3b44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4862a733662a70813637959752e89de92964c53cf48142879b36758e54ee454 = $this->env->getExtension("native_profiler");
        $__internal_d4862a733662a70813637959752e89de92964c53cf48142879b36758e54ee454->enter($__internal_d4862a733662a70813637959752e89de92964c53cf48142879b36758e54ee454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout Utilisateur";
        
        $__internal_d4862a733662a70813637959752e89de92964c53cf48142879b36758e54ee454->leave($__internal_d4862a733662a70813637959752e89de92964c53cf48142879b36758e54ee454_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c98166f9603a0101c58a461073435b0332e79dc6e0dbd5cb03c678c2d145c7c1 = $this->env->getExtension("native_profiler");
        $__internal_c98166f9603a0101c58a461073435b0332e79dc6e0dbd5cb03c678c2d145c7c1->enter($__internal_c98166f9603a0101c58a461073435b0332e79dc6e0dbd5cb03c678c2d145c7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"row \">
    <div class=\"col-md-offset-2 col-md-8\" style=\"padding-top: 20px\">
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    </div>
</div>

";
        
        $__internal_c98166f9603a0101c58a461073435b0332e79dc6e0dbd5cb03c678c2d145c7c1->leave($__internal_c98166f9603a0101c58a461073435b0332e79dc6e0dbd5cb03c678c2d145c7c1_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:addVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Ajout Utilisateur{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="row ">*/
/*     <div class="col-md-offset-2 col-md-8" style="padding-top: 20px">*/
/*         {{ form(form) }}*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
