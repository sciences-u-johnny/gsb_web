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
        $__internal_e4df1064303d1a3dd8871c85208574095a6cc13d5db3f66f390501827008c2a4 = $this->env->getExtension("native_profiler");
        $__internal_e4df1064303d1a3dd8871c85208574095a6cc13d5db3f66f390501827008c2a4->enter($__internal_e4df1064303d1a3dd8871c85208574095a6cc13d5db3f66f390501827008c2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:Acceuil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4df1064303d1a3dd8871c85208574095a6cc13d5db3f66f390501827008c2a4->leave($__internal_e4df1064303d1a3dd8871c85208574095a6cc13d5db3f66f390501827008c2a4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_96ad4f34896a330b03c541ff23cc84a99ed4fb571bab77409d2f7989e7664300 = $this->env->getExtension("native_profiler");
        $__internal_96ad4f34896a330b03c541ff23cc84a99ed4fb571bab77409d2f7989e7664300->enter($__internal_96ad4f34896a330b03c541ff23cc84a99ed4fb571bab77409d2f7989e7664300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!-- Page d'acceuil -->

     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
         <div class=\"col-md-offset-2\">
         </div>

     </div>

";
        
        $__internal_96ad4f34896a330b03c541ff23cc84a99ed4fb571bab77409d2f7989e7664300->leave($__internal_96ad4f34896a330b03c541ff23cc84a99ed4fb571bab77409d2f7989e7664300_prof);

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
