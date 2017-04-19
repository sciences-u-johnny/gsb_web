<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_e6a0b013cddc5a7dd02d5909532b8eac68a071e70d3b7af81d0f061cd390d02f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c84ec594eb15633ec9af1b19674766fd4f161f3e365da0d494911bb9e7b37bb2 = $this->env->getExtension("native_profiler");
        $__internal_c84ec594eb15633ec9af1b19674766fd4f161f3e365da0d494911bb9e7b37bb2->enter($__internal_c84ec594eb15633ec9af1b19674766fd4f161f3e365da0d494911bb9e7b37bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c84ec594eb15633ec9af1b19674766fd4f161f3e365da0d494911bb9e7b37bb2->leave($__internal_c84ec594eb15633ec9af1b19674766fd4f161f3e365da0d494911bb9e7b37bb2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3110948f141d5f42c236c0c09301a8439853a87467eb09f5292a8f6e5ccb2362 = $this->env->getExtension("native_profiler");
        $__internal_3110948f141d5f42c236c0c09301a8439853a87467eb09f5292a8f6e5ccb2362->enter($__internal_3110948f141d5f42c236c0c09301a8439853a87467eb09f5292a8f6e5ccb2362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_3110948f141d5f42c236c0c09301a8439853a87467eb09f5292a8f6e5ccb2362->leave($__internal_3110948f141d5f42c236c0c09301a8439853a87467eb09f5292a8f6e5ccb2362_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Resetting/reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
