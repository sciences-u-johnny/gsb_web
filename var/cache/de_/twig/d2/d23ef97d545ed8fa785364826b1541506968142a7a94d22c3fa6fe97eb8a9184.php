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
        $__internal_c6168b8ea39d88c75f6e6cb4773326ed1f19fd505d0693dd185af1335436fb95 = $this->env->getExtension("native_profiler");
        $__internal_c6168b8ea39d88c75f6e6cb4773326ed1f19fd505d0693dd185af1335436fb95->enter($__internal_c6168b8ea39d88c75f6e6cb4773326ed1f19fd505d0693dd185af1335436fb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:Erreur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6168b8ea39d88c75f6e6cb4773326ed1f19fd505d0693dd185af1335436fb95->leave($__internal_c6168b8ea39d88c75f6e6cb4773326ed1f19fd505d0693dd185af1335436fb95_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_333d623a48d5179c9f96bb144e106a386b3f5e5e2e2e1d0d8ecb371e672841a2 = $this->env->getExtension("native_profiler");
        $__internal_333d623a48d5179c9f96bb144e106a386b3f5e5e2e2e1d0d8ecb371e672841a2->enter($__internal_333d623a48d5179c9f96bb144e106a386b3f5e5e2e2e1d0d8ecb371e672841a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
         <div class=\"col-md-offset-2 col-md-8\">
             <h1 style=\"background-color: red;font-size: 50px\">Erreur seul les utilisateurs possédent des fiches fraits</h1>
         </div>
     </div>

";
        
        $__internal_333d623a48d5179c9f96bb144e106a386b3f5e5e2e2e1d0d8ecb371e672841a2->leave($__internal_333d623a48d5179c9f96bb144e106a386b3f5e5e2e2e1d0d8ecb371e672841a2_prof);

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
