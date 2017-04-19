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
        $__internal_ee8fe4dd02e9a53287c5e7991b7b8193338d17a304911b69d6a2d9fdfa2045b8 = $this->env->getExtension("native_profiler");
        $__internal_ee8fe4dd02e9a53287c5e7991b7b8193338d17a304911b69d6a2d9fdfa2045b8->enter($__internal_ee8fe4dd02e9a53287c5e7991b7b8193338d17a304911b69d6a2d9fdfa2045b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee8fe4dd02e9a53287c5e7991b7b8193338d17a304911b69d6a2d9fdfa2045b8->leave($__internal_ee8fe4dd02e9a53287c5e7991b7b8193338d17a304911b69d6a2d9fdfa2045b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c8fc1e2cdceddd5b6e835aa971f78d3062e4d6ab5f15c46f16274aa859379d2 = $this->env->getExtension("native_profiler");
        $__internal_8c8fc1e2cdceddd5b6e835aa971f78d3062e4d6ab5f15c46f16274aa859379d2->enter($__internal_8c8fc1e2cdceddd5b6e835aa971f78d3062e4d6ab5f15c46f16274aa859379d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8c8fc1e2cdceddd5b6e835aa971f78d3062e4d6ab5f15c46f16274aa859379d2->leave($__internal_8c8fc1e2cdceddd5b6e835aa971f78d3062e4d6ab5f15c46f16274aa859379d2_prof);

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
