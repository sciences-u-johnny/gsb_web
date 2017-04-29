<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_eafdb6234d63d60515067aa56db75ad5fe60bce8824112584cf240e486f8c237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_039267e2573f389d687b460123c28ef3cf51f080b91a2ef0a9668d8e1efe090e = $this->env->getExtension("native_profiler");
        $__internal_039267e2573f389d687b460123c28ef3cf51f080b91a2ef0a9668d8e1efe090e->enter($__internal_039267e2573f389d687b460123c28ef3cf51f080b91a2ef0a9668d8e1efe090e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_039267e2573f389d687b460123c28ef3cf51f080b91a2ef0a9668d8e1efe090e->leave($__internal_039267e2573f389d687b460123c28ef3cf51f080b91a2ef0a9668d8e1efe090e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fde1c2d2c67e0d0a9ae6d7fdf3e6275d89668115e4a494ca7e0fdd0f32863ee9 = $this->env->getExtension("native_profiler");
        $__internal_fde1c2d2c67e0d0a9ae6d7fdf3e6275d89668115e4a494ca7e0fdd0f32863ee9->enter($__internal_fde1c2d2c67e0d0a9ae6d7fdf3e6275d89668115e4a494ca7e0fdd0f32863ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_fde1c2d2c67e0d0a9ae6d7fdf3e6275d89668115e4a494ca7e0fdd0f32863ee9->leave($__internal_fde1c2d2c67e0d0a9ae6d7fdf3e6275d89668115e4a494ca7e0fdd0f32863ee9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "@FOSUser/Group/list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
