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
        $__internal_7178e33d3e3120851299744de00a14a3efdcd219c002bc132a33a0ce36942a0b = $this->env->getExtension("native_profiler");
        $__internal_7178e33d3e3120851299744de00a14a3efdcd219c002bc132a33a0ce36942a0b->enter($__internal_7178e33d3e3120851299744de00a14a3efdcd219c002bc132a33a0ce36942a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/Erreur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7178e33d3e3120851299744de00a14a3efdcd219c002bc132a33a0ce36942a0b->leave($__internal_7178e33d3e3120851299744de00a14a3efdcd219c002bc132a33a0ce36942a0b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4d3c5a50b3da382d5534c0eba0df92ce0dbf7ce5357c43b6448efcb8397a861 = $this->env->getExtension("native_profiler");
        $__internal_b4d3c5a50b3da382d5534c0eba0df92ce0dbf7ce5357c43b6448efcb8397a861->enter($__internal_b4d3c5a50b3da382d5534c0eba0df92ce0dbf7ce5357c43b6448efcb8397a861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
         <div class=\"col-md-offset-2 col-md-8\">
             <h1 style=\"background-color: red;font-size: 50px\">Erreur seul les utilisateurs possédent des fiches fraits</h1>
         </div>
     </div>

";
        
        $__internal_b4d3c5a50b3da382d5534c0eba0df92ce0dbf7ce5357c43b6448efcb8397a861->leave($__internal_b4d3c5a50b3da382d5534c0eba0df92ce0dbf7ce5357c43b6448efcb8397a861_prof);

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
