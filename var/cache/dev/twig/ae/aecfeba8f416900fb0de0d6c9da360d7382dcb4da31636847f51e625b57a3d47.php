<?php

/* @Test/Default/addVisiteur.html.twig */
class __TwigTemplate_08128f4948c823055fdf3091fef72a10b0537561fdd52e60f4d14deeb42fade2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "@Test/Default/addVisiteur.html.twig", 1);
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
        $__internal_64a51e5ef35f8ef96f047296b0c1cdb17648859374aef8d90c28c7481c8055fc = $this->env->getExtension("native_profiler");
        $__internal_64a51e5ef35f8ef96f047296b0c1cdb17648859374aef8d90c28c7481c8055fc->enter($__internal_64a51e5ef35f8ef96f047296b0c1cdb17648859374aef8d90c28c7481c8055fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/addVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64a51e5ef35f8ef96f047296b0c1cdb17648859374aef8d90c28c7481c8055fc->leave($__internal_64a51e5ef35f8ef96f047296b0c1cdb17648859374aef8d90c28c7481c8055fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42b5ba2bd88dce66d50b6a7dfedac0b08b7c8dcb3fa2132fc59dccd51a39c510 = $this->env->getExtension("native_profiler");
        $__internal_42b5ba2bd88dce66d50b6a7dfedac0b08b7c8dcb3fa2132fc59dccd51a39c510->enter($__internal_42b5ba2bd88dce66d50b6a7dfedac0b08b7c8dcb3fa2132fc59dccd51a39c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout Utilisateur";
        
        $__internal_42b5ba2bd88dce66d50b6a7dfedac0b08b7c8dcb3fa2132fc59dccd51a39c510->leave($__internal_42b5ba2bd88dce66d50b6a7dfedac0b08b7c8dcb3fa2132fc59dccd51a39c510_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2250d84474c0368e5a8b693a17fba1bade33918d3d8ec462026ca2377f637e1 = $this->env->getExtension("native_profiler");
        $__internal_d2250d84474c0368e5a8b693a17fba1bade33918d3d8ec462026ca2377f637e1->enter($__internal_d2250d84474c0368e5a8b693a17fba1bade33918d3d8ec462026ca2377f637e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2250d84474c0368e5a8b693a17fba1bade33918d3d8ec462026ca2377f637e1->leave($__internal_d2250d84474c0368e5a8b693a17fba1bade33918d3d8ec462026ca2377f637e1_prof);

    }

    public function getTemplateName()
    {
        return "@Test/Default/addVisiteur.html.twig";
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
