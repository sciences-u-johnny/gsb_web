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
        $__internal_d26b8e5c4ffae27728f9800b53a8d03a1e9e1e942fd6fbd9fdf8f4d9fbdd31e9 = $this->env->getExtension("native_profiler");
        $__internal_d26b8e5c4ffae27728f9800b53a8d03a1e9e1e942fd6fbd9fdf8f4d9fbdd31e9->enter($__internal_d26b8e5c4ffae27728f9800b53a8d03a1e9e1e942fd6fbd9fdf8f4d9fbdd31e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/addVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d26b8e5c4ffae27728f9800b53a8d03a1e9e1e942fd6fbd9fdf8f4d9fbdd31e9->leave($__internal_d26b8e5c4ffae27728f9800b53a8d03a1e9e1e942fd6fbd9fdf8f4d9fbdd31e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8f1c427dbe9bd5237d28770780037aea93701e0f1d4902e209866876a9fee30 = $this->env->getExtension("native_profiler");
        $__internal_f8f1c427dbe9bd5237d28770780037aea93701e0f1d4902e209866876a9fee30->enter($__internal_f8f1c427dbe9bd5237d28770780037aea93701e0f1d4902e209866876a9fee30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout Utilisateur";
        
        $__internal_f8f1c427dbe9bd5237d28770780037aea93701e0f1d4902e209866876a9fee30->leave($__internal_f8f1c427dbe9bd5237d28770780037aea93701e0f1d4902e209866876a9fee30_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a2d981429bd8f91644071aa8bdea639c05453f473a983a4bd3914bd72a1face = $this->env->getExtension("native_profiler");
        $__internal_3a2d981429bd8f91644071aa8bdea639c05453f473a983a4bd3914bd72a1face->enter($__internal_3a2d981429bd8f91644071aa8bdea639c05453f473a983a4bd3914bd72a1face_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3a2d981429bd8f91644071aa8bdea639c05453f473a983a4bd3914bd72a1face->leave($__internal_3a2d981429bd8f91644071aa8bdea639c05453f473a983a4bd3914bd72a1face_prof);

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
