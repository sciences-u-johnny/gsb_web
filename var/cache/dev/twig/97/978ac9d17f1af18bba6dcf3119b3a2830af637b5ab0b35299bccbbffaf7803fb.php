<?php

/* TestBundle:Default:Acceuil.html.twig */
class __TwigTemplate_710325ef71d1bf34beec9a785452607daac8e33e54ae2efcfe9aefd8435e4fe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "TestBundle:Default:Acceuil.html.twig", 1);
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
        $__internal_007b548c7d7f8d12b17f074fc648a25b670fc4682637fe6655655f8442e9ed09 = $this->env->getExtension("native_profiler");
        $__internal_007b548c7d7f8d12b17f074fc648a25b670fc4682637fe6655655f8442e9ed09->enter($__internal_007b548c7d7f8d12b17f074fc648a25b670fc4682637fe6655655f8442e9ed09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:Acceuil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_007b548c7d7f8d12b17f074fc648a25b670fc4682637fe6655655f8442e9ed09->leave($__internal_007b548c7d7f8d12b17f074fc648a25b670fc4682637fe6655655f8442e9ed09_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a96511625d88288b9c1650b4846234287d1074a9b60913c6fdd66fd3cad7b442 = $this->env->getExtension("native_profiler");
        $__internal_a96511625d88288b9c1650b4846234287d1074a9b60913c6fdd66fd3cad7b442->enter($__internal_a96511625d88288b9c1650b4846234287d1074a9b60913c6fdd66fd3cad7b442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
         <div class=\"col-md-offset-2\">
         </div>

     </div>

";
        
        $__internal_a96511625d88288b9c1650b4846234287d1074a9b60913c6fdd66fd3cad7b442->leave($__internal_a96511625d88288b9c1650b4846234287d1074a9b60913c6fdd66fd3cad7b442_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:Acceuil.html.twig";
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
