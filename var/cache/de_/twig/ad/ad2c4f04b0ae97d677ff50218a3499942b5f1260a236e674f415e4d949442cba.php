<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a863f0c0bf525a86c81eb6cae828174f687eba99415786b60a70e22009e051cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_e784b2fed4d22b55eab90f5c21a89f688abe1c8a6a3e64929b60902416bced6e = $this->env->getExtension("native_profiler");
        $__internal_e784b2fed4d22b55eab90f5c21a89f688abe1c8a6a3e64929b60902416bced6e->enter($__internal_e784b2fed4d22b55eab90f5c21a89f688abe1c8a6a3e64929b60902416bced6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e784b2fed4d22b55eab90f5c21a89f688abe1c8a6a3e64929b60902416bced6e->leave($__internal_e784b2fed4d22b55eab90f5c21a89f688abe1c8a6a3e64929b60902416bced6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e336c2a49a9026f11b749926788193928e72388db86351c286ea7e9ef49473b = $this->env->getExtension("native_profiler");
        $__internal_9e336c2a49a9026f11b749926788193928e72388db86351c286ea7e9ef49473b->enter($__internal_9e336c2a49a9026f11b749926788193928e72388db86351c286ea7e9ef49473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9e336c2a49a9026f11b749926788193928e72388db86351c286ea7e9ef49473b->leave($__internal_9e336c2a49a9026f11b749926788193928e72388db86351c286ea7e9ef49473b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "@FOSUser/Group/show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
