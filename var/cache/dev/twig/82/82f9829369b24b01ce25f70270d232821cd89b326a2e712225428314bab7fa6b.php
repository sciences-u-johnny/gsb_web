<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_e5e379539798f96b08c71540031a69e9a70093060043295fd5afdde0097fa2a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_83d28a33f8873b4063c1e9b5f48ec2d3a25c85b654f2b26cd0729aabd2e59200 = $this->env->getExtension("native_profiler");
        $__internal_83d28a33f8873b4063c1e9b5f48ec2d3a25c85b654f2b26cd0729aabd2e59200->enter($__internal_83d28a33f8873b4063c1e9b5f48ec2d3a25c85b654f2b26cd0729aabd2e59200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83d28a33f8873b4063c1e9b5f48ec2d3a25c85b654f2b26cd0729aabd2e59200->leave($__internal_83d28a33f8873b4063c1e9b5f48ec2d3a25c85b654f2b26cd0729aabd2e59200_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_857f1b3d27664eb226e699ae08524d2a717fac905c1f47761e548ccb13a3d695 = $this->env->getExtension("native_profiler");
        $__internal_857f1b3d27664eb226e699ae08524d2a717fac905c1f47761e548ccb13a3d695->enter($__internal_857f1b3d27664eb226e699ae08524d2a717fac905c1f47761e548ccb13a3d695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_857f1b3d27664eb226e699ae08524d2a717fac905c1f47761e548ccb13a3d695->leave($__internal_857f1b3d27664eb226e699ae08524d2a717fac905c1f47761e548ccb13a3d695_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "@FOSUser/Group/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
