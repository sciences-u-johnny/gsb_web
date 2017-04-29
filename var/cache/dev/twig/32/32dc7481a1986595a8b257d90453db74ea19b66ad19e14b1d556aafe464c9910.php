<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_ec6e85f61b8a84f01e186e6704d3d57fe5ceb0d80c6170cbeb47bd8b9edd57e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2db5046861180478e9749304d7f9515288b76e7bdc92615b3e2316bb353c2d82 = $this->env->getExtension("native_profiler");
        $__internal_2db5046861180478e9749304d7f9515288b76e7bdc92615b3e2316bb353c2d82->enter($__internal_2db5046861180478e9749304d7f9515288b76e7bdc92615b3e2316bb353c2d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2db5046861180478e9749304d7f9515288b76e7bdc92615b3e2316bb353c2d82->leave($__internal_2db5046861180478e9749304d7f9515288b76e7bdc92615b3e2316bb353c2d82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9bf0d78b60b795b16f699b0027456ab8a86e5eb084fe84fe67a0b7cc447f71c = $this->env->getExtension("native_profiler");
        $__internal_f9bf0d78b60b795b16f699b0027456ab8a86e5eb084fe84fe67a0b7cc447f71c->enter($__internal_f9bf0d78b60b795b16f699b0027456ab8a86e5eb084fe84fe67a0b7cc447f71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f9bf0d78b60b795b16f699b0027456ab8a86e5eb084fe84fe67a0b7cc447f71c->leave($__internal_f9bf0d78b60b795b16f699b0027456ab8a86e5eb084fe84fe67a0b7cc447f71c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "@FOSUser/Resetting/request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
