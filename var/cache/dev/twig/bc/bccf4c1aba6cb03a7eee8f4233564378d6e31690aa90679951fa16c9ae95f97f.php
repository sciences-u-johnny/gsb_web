<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_66a3a6c819da7cad935fa89daa4845e332b44834686f43ccdff2a3922c5df3b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd6b79b75c54afce8347586101a7ef7745221d048caacbf2bb302b252e928272 = $this->env->getExtension("native_profiler");
        $__internal_dd6b79b75c54afce8347586101a7ef7745221d048caacbf2bb302b252e928272->enter($__internal_dd6b79b75c54afce8347586101a7ef7745221d048caacbf2bb302b252e928272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dd6b79b75c54afce8347586101a7ef7745221d048caacbf2bb302b252e928272->leave($__internal_dd6b79b75c54afce8347586101a7ef7745221d048caacbf2bb302b252e928272_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7511640431c2fdb89cb47c2950f63a45a06fcad1ca2acb7af7dfd6ecbce9636 = $this->env->getExtension("native_profiler");
        $__internal_b7511640431c2fdb89cb47c2950f63a45a06fcad1ca2acb7af7dfd6ecbce9636->enter($__internal_b7511640431c2fdb89cb47c2950f63a45a06fcad1ca2acb7af7dfd6ecbce9636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b7511640431c2fdb89cb47c2950f63a45a06fcad1ca2acb7af7dfd6ecbce9636->leave($__internal_b7511640431c2fdb89cb47c2950f63a45a06fcad1ca2acb7af7dfd6ecbce9636_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
