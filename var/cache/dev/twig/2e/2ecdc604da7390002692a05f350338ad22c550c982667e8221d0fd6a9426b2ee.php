<?php

/* @Test/Default/Acceuil.html.twig */
class __TwigTemplate_738a9644bf81a6cf0a6c26b5a3ed8cf9d9ce0ac1d3a2dfdad88849308f07c3d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "@Test/Default/Acceuil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e5ae8cd1c38c49f18daa6c103500f432f9c8463f4e37d10dfec1e501490dae6 = $this->env->getExtension("native_profiler");
        $__internal_4e5ae8cd1c38c49f18daa6c103500f432f9c8463f4e37d10dfec1e501490dae6->enter($__internal_4e5ae8cd1c38c49f18daa6c103500f432f9c8463f4e37d10dfec1e501490dae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/Acceuil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e5ae8cd1c38c49f18daa6c103500f432f9c8463f4e37d10dfec1e501490dae6->leave($__internal_4e5ae8cd1c38c49f18daa6c103500f432f9c8463f4e37d10dfec1e501490dae6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_da65c8d045342add0affcd5c6ea7acb3378a052849a1644b796f7ac3296a74d9 = $this->env->getExtension("native_profiler");
        $__internal_da65c8d045342add0affcd5c6ea7acb3378a052849a1644b796f7ac3296a74d9->enter($__internal_da65c8d045342add0affcd5c6ea7acb3378a052849a1644b796f7ac3296a74d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
         <div class=\"col-md-offset-2\">
         </div>

     </div>

";
        
        $__internal_da65c8d045342add0affcd5c6ea7acb3378a052849a1644b796f7ac3296a74d9->leave($__internal_da65c8d045342add0affcd5c6ea7acb3378a052849a1644b796f7ac3296a74d9_prof);

    }

    public function getTemplateName()
    {
        return "@Test/Default/Acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* {% block body %}*/
/* */
/* */
/*      <div class="row" style="margin-left: 0px;margin-right: 0px;" >*/
/*          <div class="col-md-offset-2">*/
/*          </div>*/
/* */
/*      </div>*/
/* */
/* {% endblock %}*/
/* */
