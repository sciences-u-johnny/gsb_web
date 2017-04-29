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
        $__internal_af29b458e10cd4d8228b79223688296366aaab776c1302dc7f9b4589ec7d2082 = $this->env->getExtension("native_profiler");
        $__internal_af29b458e10cd4d8228b79223688296366aaab776c1302dc7f9b4589ec7d2082->enter($__internal_af29b458e10cd4d8228b79223688296366aaab776c1302dc7f9b4589ec7d2082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_af29b458e10cd4d8228b79223688296366aaab776c1302dc7f9b4589ec7d2082->leave($__internal_af29b458e10cd4d8228b79223688296366aaab776c1302dc7f9b4589ec7d2082_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eed3e15957678a55d1a05e41cee07ebfa558a9d03d7a56785ca570f81c2ede7c = $this->env->getExtension("native_profiler");
        $__internal_eed3e15957678a55d1a05e41cee07ebfa558a9d03d7a56785ca570f81c2ede7c->enter($__internal_eed3e15957678a55d1a05e41cee07ebfa558a9d03d7a56785ca570f81c2ede7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eed3e15957678a55d1a05e41cee07ebfa558a9d03d7a56785ca570f81c2ede7c->leave($__internal_eed3e15957678a55d1a05e41cee07ebfa558a9d03d7a56785ca570f81c2ede7c_prof);

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
