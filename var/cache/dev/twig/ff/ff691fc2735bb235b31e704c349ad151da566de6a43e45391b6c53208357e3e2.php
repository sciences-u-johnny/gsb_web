<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f9ea484f43f6f7a0a1dbf084a0aa94b07743862375996d4e5dbea5c7100b898a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_03897ceb6d99117ed4a92bf07cd968ed010fd72e31edf977283dde8d95d10692 = $this->env->getExtension("native_profiler");
        $__internal_03897ceb6d99117ed4a92bf07cd968ed010fd72e31edf977283dde8d95d10692->enter($__internal_03897ceb6d99117ed4a92bf07cd968ed010fd72e31edf977283dde8d95d10692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03897ceb6d99117ed4a92bf07cd968ed010fd72e31edf977283dde8d95d10692->leave($__internal_03897ceb6d99117ed4a92bf07cd968ed010fd72e31edf977283dde8d95d10692_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a386c8af8957438e521b47eb51d7fcdf97aca76d2d893800200607d0f078d114 = $this->env->getExtension("native_profiler");
        $__internal_a386c8af8957438e521b47eb51d7fcdf97aca76d2d893800200607d0f078d114->enter($__internal_a386c8af8957438e521b47eb51d7fcdf97aca76d2d893800200607d0f078d114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a386c8af8957438e521b47eb51d7fcdf97aca76d2d893800200607d0f078d114->leave($__internal_a386c8af8957438e521b47eb51d7fcdf97aca76d2d893800200607d0f078d114_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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