<?php

/* TestBundle:Default:Erreur.html.twig */
class __TwigTemplate_8b509b99cc735b950ce634d288dbd3c3e2b25635b38aebb6207099c2a685c15d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "TestBundle:Default:Erreur.html.twig", 1);
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
        $__internal_3a390983629b5e95a6cb14f62eb1f58cbfd42cd2c3cc83e5a27526ea19f5ddf4 = $this->env->getExtension("native_profiler");
        $__internal_3a390983629b5e95a6cb14f62eb1f58cbfd42cd2c3cc83e5a27526ea19f5ddf4->enter($__internal_3a390983629b5e95a6cb14f62eb1f58cbfd42cd2c3cc83e5a27526ea19f5ddf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:Erreur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a390983629b5e95a6cb14f62eb1f58cbfd42cd2c3cc83e5a27526ea19f5ddf4->leave($__internal_3a390983629b5e95a6cb14f62eb1f58cbfd42cd2c3cc83e5a27526ea19f5ddf4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_25b95965c6aa71af46abd18adfe5ca0e4d24e2540de6ab08a4280715e0881ab0 = $this->env->getExtension("native_profiler");
        $__internal_25b95965c6aa71af46abd18adfe5ca0e4d24e2540de6ab08a4280715e0881ab0->enter($__internal_25b95965c6aa71af46abd18adfe5ca0e4d24e2540de6ab08a4280715e0881ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
         <div class=\"col-md-offset-2 col-md-8\">
             <h1 style=\"background-color: red;font-size: 50px\">Erreur seul les utilisateurs possédent des fiches fraits</h1>
         </div>
     </div>

";
        
        $__internal_25b95965c6aa71af46abd18adfe5ca0e4d24e2540de6ab08a4280715e0881ab0->leave($__internal_25b95965c6aa71af46abd18adfe5ca0e4d24e2540de6ab08a4280715e0881ab0_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:Erreur.html.twig";
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
/* */
/*      <div class="row" style="margin-left: 0px;margin-right: 0px;" >*/
/*          <div class="col-md-offset-2 col-md-8">*/
/*              <h1 style="background-color: red;font-size: 50px">Erreur seul les utilisateurs possédent des fiches fraits</h1>*/
/*          </div>*/
/*      </div>*/
/* */
/* {% endblock %}*/
/* */
