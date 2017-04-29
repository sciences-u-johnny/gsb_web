<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b745e78800f309155291caf708c3bde04a0614c21ca93364e194121f11b14c30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a88ff6ad4a1b75d49d1a9794eb2d0229520a88ef01ea14be83da79a8b6af9215 = $this->env->getExtension("native_profiler");
        $__internal_a88ff6ad4a1b75d49d1a9794eb2d0229520a88ef01ea14be83da79a8b6af9215->enter($__internal_a88ff6ad4a1b75d49d1a9794eb2d0229520a88ef01ea14be83da79a8b6af9215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a88ff6ad4a1b75d49d1a9794eb2d0229520a88ef01ea14be83da79a8b6af9215->leave($__internal_a88ff6ad4a1b75d49d1a9794eb2d0229520a88ef01ea14be83da79a8b6af9215_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bf17a706adbd5ef6ccea6cf987b1cef7e46cfb46a30536094d83de33a84670d = $this->env->getExtension("native_profiler");
        $__internal_9bf17a706adbd5ef6ccea6cf987b1cef7e46cfb46a30536094d83de33a84670d->enter($__internal_9bf17a706adbd5ef6ccea6cf987b1cef7e46cfb46a30536094d83de33a84670d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9bf17a706adbd5ef6ccea6cf987b1cef7e46cfb46a30536094d83de33a84670d->leave($__internal_9bf17a706adbd5ef6ccea6cf987b1cef7e46cfb46a30536094d83de33a84670d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "@FOSUser/Registration/register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
