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
        $__internal_e35993cb6748433a9f6287af577508d48f31f2055624430ffcca9740662fd919 = $this->env->getExtension("native_profiler");
        $__internal_e35993cb6748433a9f6287af577508d48f31f2055624430ffcca9740662fd919->enter($__internal_e35993cb6748433a9f6287af577508d48f31f2055624430ffcca9740662fd919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:addVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e35993cb6748433a9f6287af577508d48f31f2055624430ffcca9740662fd919->leave($__internal_e35993cb6748433a9f6287af577508d48f31f2055624430ffcca9740662fd919_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f1e66d59b8d4ade3e22759fcba28ed103ff43cd963edfacb2c8b0be9cbd70e3 = $this->env->getExtension("native_profiler");
        $__internal_8f1e66d59b8d4ade3e22759fcba28ed103ff43cd963edfacb2c8b0be9cbd70e3->enter($__internal_8f1e66d59b8d4ade3e22759fcba28ed103ff43cd963edfacb2c8b0be9cbd70e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout Utilisateur";
        
        $__internal_8f1e66d59b8d4ade3e22759fcba28ed103ff43cd963edfacb2c8b0be9cbd70e3->leave($__internal_8f1e66d59b8d4ade3e22759fcba28ed103ff43cd963edfacb2c8b0be9cbd70e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d1c3931a66dd7274df143663cf8028ec8a21aec544f64aa1b7bc7961bcf610c = $this->env->getExtension("native_profiler");
        $__internal_0d1c3931a66dd7274df143663cf8028ec8a21aec544f64aa1b7bc7961bcf610c->enter($__internal_0d1c3931a66dd7274df143663cf8028ec8a21aec544f64aa1b7bc7961bcf610c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0d1c3931a66dd7274df143663cf8028ec8a21aec544f64aa1b7bc7961bcf610c->leave($__internal_0d1c3931a66dd7274df143663cf8028ec8a21aec544f64aa1b7bc7961bcf610c_prof);

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
