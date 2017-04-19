<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_7cf1d7b5ab142e75f24c92e3e9e8fadc6d85c3799fbca8231a01e3813c52265f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_a4890a8e43b7354bdd1d69fce0dfcfff49b4e17bac30a127be1dfb1c1b6c09d0 = $this->env->getExtension("native_profiler");
        $__internal_a4890a8e43b7354bdd1d69fce0dfcfff49b4e17bac30a127be1dfb1c1b6c09d0->enter($__internal_a4890a8e43b7354bdd1d69fce0dfcfff49b4e17bac30a127be1dfb1c1b6c09d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4890a8e43b7354bdd1d69fce0dfcfff49b4e17bac30a127be1dfb1c1b6c09d0->leave($__internal_a4890a8e43b7354bdd1d69fce0dfcfff49b4e17bac30a127be1dfb1c1b6c09d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_977a88c3e81feadd0cd7bdbbf957cd5a3d9b1f08b65973f1da15fad90ba0fb00 = $this->env->getExtension("native_profiler");
        $__internal_977a88c3e81feadd0cd7bdbbf957cd5a3d9b1f08b65973f1da15fad90ba0fb00->enter($__internal_977a88c3e81feadd0cd7bdbbf957cd5a3d9b1f08b65973f1da15fad90ba0fb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_977a88c3e81feadd0cd7bdbbf957cd5a3d9b1f08b65973f1da15fad90ba0fb00->leave($__internal_977a88c3e81feadd0cd7bdbbf957cd5a3d9b1f08b65973f1da15fad90ba0fb00_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
/* {% include "@FOSUser/ChangePassword/change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
