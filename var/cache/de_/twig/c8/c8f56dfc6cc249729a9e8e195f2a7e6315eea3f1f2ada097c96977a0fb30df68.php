<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_27c3938c7f6cd1b7dea71d1504d6da4e8b9a08c48752664614b30cde716b20d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_24f579583f1823a00bad33e12a287b2afbbc5590a9331f64bdfd81adb704c6b7 = $this->env->getExtension("native_profiler");
        $__internal_24f579583f1823a00bad33e12a287b2afbbc5590a9331f64bdfd81adb704c6b7->enter($__internal_24f579583f1823a00bad33e12a287b2afbbc5590a9331f64bdfd81adb704c6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f579583f1823a00bad33e12a287b2afbbc5590a9331f64bdfd81adb704c6b7->leave($__internal_24f579583f1823a00bad33e12a287b2afbbc5590a9331f64bdfd81adb704c6b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a8d16d09991dd072b16d0f681761e75fcfe24440d3574b32c766cb1b479c8e4 = $this->env->getExtension("native_profiler");
        $__internal_6a8d16d09991dd072b16d0f681761e75fcfe24440d3574b32c766cb1b479c8e4->enter($__internal_6a8d16d09991dd072b16d0f681761e75fcfe24440d3574b32c766cb1b479c8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_6a8d16d09991dd072b16d0f681761e75fcfe24440d3574b32c766cb1b479c8e4->leave($__internal_6a8d16d09991dd072b16d0f681761e75fcfe24440d3574b32c766cb1b479c8e4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "@FOSUser/Profile/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
