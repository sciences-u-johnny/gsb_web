<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7331031b8f5b7054c31b8b44e3ed2f4d9f60cdec2a1e2b30054a35516396493f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_2af0c1e738d9889fbc1d549b5c79cafd81965acc012063ba7f75b0a507f228ef = $this->env->getExtension("native_profiler");
        $__internal_2af0c1e738d9889fbc1d549b5c79cafd81965acc012063ba7f75b0a507f228ef->enter($__internal_2af0c1e738d9889fbc1d549b5c79cafd81965acc012063ba7f75b0a507f228ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2af0c1e738d9889fbc1d549b5c79cafd81965acc012063ba7f75b0a507f228ef->leave($__internal_2af0c1e738d9889fbc1d549b5c79cafd81965acc012063ba7f75b0a507f228ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb4fe0946eb097c13d85771bbbc597b00f24fcbb7731f0334d5b9c487ace5ee8 = $this->env->getExtension("native_profiler");
        $__internal_cb4fe0946eb097c13d85771bbbc597b00f24fcbb7731f0334d5b9c487ace5ee8->enter($__internal_cb4fe0946eb097c13d85771bbbc597b00f24fcbb7731f0334d5b9c487ace5ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_cb4fe0946eb097c13d85771bbbc597b00f24fcbb7731f0334d5b9c487ace5ee8->leave($__internal_cb4fe0946eb097c13d85771bbbc597b00f24fcbb7731f0334d5b9c487ace5ee8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "@FOSUser/Profile/show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
