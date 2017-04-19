<?php

/* @Test/Default/Erreur.html.twig */
class __TwigTemplate_05fa30ba3ddfc2cfb76693d53576f31165867d4711471aa6c4a6c14bbe6aea94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "@Test/Default/Erreur.html.twig", 1);
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
        $__internal_581ac1d7eb32d67cc9b18d36e21fd0dcf73812b40424c9dba816ad5fbb49407c = $this->env->getExtension("native_profiler");
        $__internal_581ac1d7eb32d67cc9b18d36e21fd0dcf73812b40424c9dba816ad5fbb49407c->enter($__internal_581ac1d7eb32d67cc9b18d36e21fd0dcf73812b40424c9dba816ad5fbb49407c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/Erreur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_581ac1d7eb32d67cc9b18d36e21fd0dcf73812b40424c9dba816ad5fbb49407c->leave($__internal_581ac1d7eb32d67cc9b18d36e21fd0dcf73812b40424c9dba816ad5fbb49407c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_418c720ec5bd06557dcfa5ceb9355034e90338ec78fdb10b6227292412893810 = $this->env->getExtension("native_profiler");
        $__internal_418c720ec5bd06557dcfa5ceb9355034e90338ec78fdb10b6227292412893810->enter($__internal_418c720ec5bd06557dcfa5ceb9355034e90338ec78fdb10b6227292412893810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
         <div class=\"col-md-offset-2 col-md-8\">
             <h1 style=\"background-color: red;font-size: 50px\">Erreur seul les utilisateurs possédent des fiches fraits</h1>
         </div>
     </div>

";
        
        $__internal_418c720ec5bd06557dcfa5ceb9355034e90338ec78fdb10b6227292412893810->leave($__internal_418c720ec5bd06557dcfa5ceb9355034e90338ec78fdb10b6227292412893810_prof);

    }

    public function getTemplateName()
    {
        return "@Test/Default/Erreur.html.twig";
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
