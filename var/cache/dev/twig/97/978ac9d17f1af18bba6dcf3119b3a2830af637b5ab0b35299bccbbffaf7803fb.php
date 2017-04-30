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
        $__internal_6aee32aedcb2708c22e557ce0458b3a0a93c8b8aa16933cab9cb189fff39161b = $this->env->getExtension("native_profiler");
        $__internal_6aee32aedcb2708c22e557ce0458b3a0a93c8b8aa16933cab9cb189fff39161b->enter($__internal_6aee32aedcb2708c22e557ce0458b3a0a93c8b8aa16933cab9cb189fff39161b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:Acceuil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aee32aedcb2708c22e557ce0458b3a0a93c8b8aa16933cab9cb189fff39161b->leave($__internal_6aee32aedcb2708c22e557ce0458b3a0a93c8b8aa16933cab9cb189fff39161b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ff07a9d0a240bfd9e13cd698e0b5b06f4ede0f14cf1d2748cd99685e086be28 = $this->env->getExtension("native_profiler");
        $__internal_3ff07a9d0a240bfd9e13cd698e0b5b06f4ede0f14cf1d2748cd99685e086be28->enter($__internal_3ff07a9d0a240bfd9e13cd698e0b5b06f4ede0f14cf1d2748cd99685e086be28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!-- Page d'acceuil -->

     <div class=\"row\" style=\"margin-left: 0px;margin-right: 0px;\" >
         <div class=\"col-md-offset-2\">
         </div>

     </div>

";
        
        $__internal_3ff07a9d0a240bfd9e13cd698e0b5b06f4ede0f14cf1d2748cd99685e086be28->leave($__internal_3ff07a9d0a240bfd9e13cd698e0b5b06f4ede0f14cf1d2748cd99685e086be28_prof);

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
