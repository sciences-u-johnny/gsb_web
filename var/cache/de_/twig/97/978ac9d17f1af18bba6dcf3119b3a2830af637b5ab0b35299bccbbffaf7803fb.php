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
        $__internal_300d5cc697f14dec30f947e812fd1712d67f12f4af91f9c548aeda4c35be2cca = $this->env->getExtension("native_profiler");
        $__internal_300d5cc697f14dec30f947e812fd1712d67f12f4af91f9c548aeda4c35be2cca->enter($__internal_300d5cc697f14dec30f947e812fd1712d67f12f4af91f9c548aeda4c35be2cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:Acceuil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_300d5cc697f14dec30f947e812fd1712d67f12f4af91f9c548aeda4c35be2cca->leave($__internal_300d5cc697f14dec30f947e812fd1712d67f12f4af91f9c548aeda4c35be2cca_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_602d581562934174da30fd6ce66c1ade09f4224543d9a6c943883aa85897dd65 = $this->env->getExtension("native_profiler");
        $__internal_602d581562934174da30fd6ce66c1ade09f4224543d9a6c943883aa85897dd65->enter($__internal_602d581562934174da30fd6ce66c1ade09f4224543d9a6c943883aa85897dd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
         <div class=\"col-md-offset-2\">
         </div>

     </div>

";
        
        $__internal_602d581562934174da30fd6ce66c1ade09f4224543d9a6c943883aa85897dd65->leave($__internal_602d581562934174da30fd6ce66c1ade09f4224543d9a6c943883aa85897dd65_prof);

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
