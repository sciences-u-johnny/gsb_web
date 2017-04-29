<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_6f29d7c494af2e0c1cb2ab4ba32a3c24e6b5b44bfbf5dc18d3b31f475c135fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_f9f3519f7b3d2b72f08c04abeefa99b0752a050cf9cce416048fbfdbbcf107a0 = $this->env->getExtension("native_profiler");
        $__internal_f9f3519f7b3d2b72f08c04abeefa99b0752a050cf9cce416048fbfdbbcf107a0->enter($__internal_f9f3519f7b3d2b72f08c04abeefa99b0752a050cf9cce416048fbfdbbcf107a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9f3519f7b3d2b72f08c04abeefa99b0752a050cf9cce416048fbfdbbcf107a0->leave($__internal_f9f3519f7b3d2b72f08c04abeefa99b0752a050cf9cce416048fbfdbbcf107a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_918981ae1dfcc4a92115436734394b44e2d8836293354a50f3bba59af5230247 = $this->env->getExtension("native_profiler");
        $__internal_918981ae1dfcc4a92115436734394b44e2d8836293354a50f3bba59af5230247->enter($__internal_918981ae1dfcc4a92115436734394b44e2d8836293354a50f3bba59af5230247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_918981ae1dfcc4a92115436734394b44e2d8836293354a50f3bba59af5230247->leave($__internal_918981ae1dfcc4a92115436734394b44e2d8836293354a50f3bba59af5230247_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
