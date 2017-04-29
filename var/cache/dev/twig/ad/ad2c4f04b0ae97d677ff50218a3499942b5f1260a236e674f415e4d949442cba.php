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
        $__internal_f912ef801febb247b30a75874c817de1883c68250be639af09772e8e4050438d = $this->env->getExtension("native_profiler");
        $__internal_f912ef801febb247b30a75874c817de1883c68250be639af09772e8e4050438d->enter($__internal_f912ef801febb247b30a75874c817de1883c68250be639af09772e8e4050438d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f912ef801febb247b30a75874c817de1883c68250be639af09772e8e4050438d->leave($__internal_f912ef801febb247b30a75874c817de1883c68250be639af09772e8e4050438d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b3b07b1365b2449be7863fcb41c55cc11c8f939c20b4b681739970dc33794d8 = $this->env->getExtension("native_profiler");
        $__internal_3b3b07b1365b2449be7863fcb41c55cc11c8f939c20b4b681739970dc33794d8->enter($__internal_3b3b07b1365b2449be7863fcb41c55cc11c8f939c20b4b681739970dc33794d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3b3b07b1365b2449be7863fcb41c55cc11c8f939c20b4b681739970dc33794d8->leave($__internal_3b3b07b1365b2449be7863fcb41c55cc11c8f939c20b4b681739970dc33794d8_prof);

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
