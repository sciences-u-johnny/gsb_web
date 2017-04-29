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
        $__internal_255425acdc23ce6341d26718fa7053d6997859d27f0bf0624d3bee90e3f8cae9 = $this->env->getExtension("native_profiler");
        $__internal_255425acdc23ce6341d26718fa7053d6997859d27f0bf0624d3bee90e3f8cae9->enter($__internal_255425acdc23ce6341d26718fa7053d6997859d27f0bf0624d3bee90e3f8cae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_255425acdc23ce6341d26718fa7053d6997859d27f0bf0624d3bee90e3f8cae9->leave($__internal_255425acdc23ce6341d26718fa7053d6997859d27f0bf0624d3bee90e3f8cae9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_645ec28c3583efa372e9a6c660b71c3f924e0f7369dca903ea7e9522e0bd4991 = $this->env->getExtension("native_profiler");
        $__internal_645ec28c3583efa372e9a6c660b71c3f924e0f7369dca903ea7e9522e0bd4991->enter($__internal_645ec28c3583efa372e9a6c660b71c3f924e0f7369dca903ea7e9522e0bd4991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_645ec28c3583efa372e9a6c660b71c3f924e0f7369dca903ea7e9522e0bd4991->leave($__internal_645ec28c3583efa372e9a6c660b71c3f924e0f7369dca903ea7e9522e0bd4991_prof);

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
