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
        $__internal_d4a60ced4da23eae2b70c81da63d1c1bbc14e72136e3e18b547978de9c1a16a3 = $this->env->getExtension("native_profiler");
        $__internal_d4a60ced4da23eae2b70c81da63d1c1bbc14e72136e3e18b547978de9c1a16a3->enter($__internal_d4a60ced4da23eae2b70c81da63d1c1bbc14e72136e3e18b547978de9c1a16a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/Acceuil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a60ced4da23eae2b70c81da63d1c1bbc14e72136e3e18b547978de9c1a16a3->leave($__internal_d4a60ced4da23eae2b70c81da63d1c1bbc14e72136e3e18b547978de9c1a16a3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_84fb00f35229a3ea42ff5ffa649ff75363ab27ad52c80613bdf1559415551aa7 = $this->env->getExtension("native_profiler");
        $__internal_84fb00f35229a3ea42ff5ffa649ff75363ab27ad52c80613bdf1559415551aa7->enter($__internal_84fb00f35229a3ea42ff5ffa649ff75363ab27ad52c80613bdf1559415551aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!-- Page d'acceuil -->

     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
         <div class=\"col-md-offset-2\">
         </div>

     </div>

";
        
        $__internal_84fb00f35229a3ea42ff5ffa649ff75363ab27ad52c80613bdf1559415551aa7->leave($__internal_84fb00f35229a3ea42ff5ffa649ff75363ab27ad52c80613bdf1559415551aa7_prof);

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
/* <!-- Page d'acceuil -->*/
/* */
/*      <div class="row" style="margin-left: 0px;margin-right: 0px;" >*/
/*          <div class="col-md-offset-2">*/
/*          </div>*/
/* */
/*      </div>*/
/* */
/* {% endblock %}*/
/* */
