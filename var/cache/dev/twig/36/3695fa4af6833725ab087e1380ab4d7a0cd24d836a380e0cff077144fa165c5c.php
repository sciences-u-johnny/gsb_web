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
        $__internal_f3deb693b7d9f653edbf941f163db85ac5ff8a90d24b3556bc6ac966440212f6 = $this->env->getExtension("native_profiler");
        $__internal_f3deb693b7d9f653edbf941f163db85ac5ff8a90d24b3556bc6ac966440212f6->enter($__internal_f3deb693b7d9f653edbf941f163db85ac5ff8a90d24b3556bc6ac966440212f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:addVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3deb693b7d9f653edbf941f163db85ac5ff8a90d24b3556bc6ac966440212f6->leave($__internal_f3deb693b7d9f653edbf941f163db85ac5ff8a90d24b3556bc6ac966440212f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c6e2faa71d6211e751ce28002668cabac7d2780bcc43486909c5a1c93c675c9 = $this->env->getExtension("native_profiler");
        $__internal_4c6e2faa71d6211e751ce28002668cabac7d2780bcc43486909c5a1c93c675c9->enter($__internal_4c6e2faa71d6211e751ce28002668cabac7d2780bcc43486909c5a1c93c675c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout Utilisateur";
        
        $__internal_4c6e2faa71d6211e751ce28002668cabac7d2780bcc43486909c5a1c93c675c9->leave($__internal_4c6e2faa71d6211e751ce28002668cabac7d2780bcc43486909c5a1c93c675c9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_550d45dca64aa13241a1d8e64a1e1da8cd93187a05baefba52eea7ac5372de7e = $this->env->getExtension("native_profiler");
        $__internal_550d45dca64aa13241a1d8e64a1e1da8cd93187a05baefba52eea7ac5372de7e->enter($__internal_550d45dca64aa13241a1d8e64a1e1da8cd93187a05baefba52eea7ac5372de7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Page d'ajout d'un utilisateur -->
<div class=\"row \">
    <div class=\"col-md-offset-2 col-md-8\" style=\"padding-top: 20px\">
        <!-- Afficage du formulaire d'ajout d'utilisateur -->
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    </div>
</div>

";
        
        $__internal_550d45dca64aa13241a1d8e64a1e1da8cd93187a05baefba52eea7ac5372de7e->leave($__internal_550d45dca64aa13241a1d8e64a1e1da8cd93187a05baefba52eea7ac5372de7e_prof);

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
        return array (  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Ajout Utilisateur{% endblock %}*/
/* */
/* {% block body %}*/
/*     <!-- Page d'ajout d'un utilisateur -->*/
/* <div class="row ">*/
/*     <div class="col-md-offset-2 col-md-8" style="padding-top: 20px">*/
/*         <!-- Afficage du formulaire d'ajout d'utilisateur -->*/
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
