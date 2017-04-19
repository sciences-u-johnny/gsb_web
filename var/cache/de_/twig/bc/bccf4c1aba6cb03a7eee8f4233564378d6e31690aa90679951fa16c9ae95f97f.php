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
        $__internal_df3ec07fab24ecb0e1d41d47224e1f4c20d3b62532ed79b8c004c4e999d1f50e = $this->env->getExtension("native_profiler");
        $__internal_df3ec07fab24ecb0e1d41d47224e1f4c20d3b62532ed79b8c004c4e999d1f50e->enter($__internal_df3ec07fab24ecb0e1d41d47224e1f4c20d3b62532ed79b8c004c4e999d1f50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_df3ec07fab24ecb0e1d41d47224e1f4c20d3b62532ed79b8c004c4e999d1f50e->leave($__internal_df3ec07fab24ecb0e1d41d47224e1f4c20d3b62532ed79b8c004c4e999d1f50e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8be0901848493b9e677921e437d49e4e019f3eda73ed491e594a3d16f7ec911 = $this->env->getExtension("native_profiler");
        $__internal_b8be0901848493b9e677921e437d49e4e019f3eda73ed491e594a3d16f7ec911->enter($__internal_b8be0901848493b9e677921e437d49e4e019f3eda73ed491e594a3d16f7ec911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b8be0901848493b9e677921e437d49e4e019f3eda73ed491e594a3d16f7ec911->leave($__internal_b8be0901848493b9e677921e437d49e4e019f3eda73ed491e594a3d16f7ec911_prof);

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
