<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6b081d9ff7acab3fe3560279a9c364ebff5ff59418f3a5fc608a1f5c94985b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_804ece790faa01faefe56cb647d9c526e6e512a784f1b84f34fd33dbf03c9781 = $this->env->getExtension("native_profiler");
        $__internal_804ece790faa01faefe56cb647d9c526e6e512a784f1b84f34fd33dbf03c9781->enter($__internal_804ece790faa01faefe56cb647d9c526e6e512a784f1b84f34fd33dbf03c9781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_804ece790faa01faefe56cb647d9c526e6e512a784f1b84f34fd33dbf03c9781->leave($__internal_804ece790faa01faefe56cb647d9c526e6e512a784f1b84f34fd33dbf03c9781_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8383f2b14b19f9618dde58ee312a56eafdbdc41a9c44a1bab2754e8c441b3202 = $this->env->getExtension("native_profiler");
        $__internal_8383f2b14b19f9618dde58ee312a56eafdbdc41a9c44a1bab2754e8c441b3202->enter($__internal_8383f2b14b19f9618dde58ee312a56eafdbdc41a9c44a1bab2754e8c441b3202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8383f2b14b19f9618dde58ee312a56eafdbdc41a9c44a1bab2754e8c441b3202->leave($__internal_8383f2b14b19f9618dde58ee312a56eafdbdc41a9c44a1bab2754e8c441b3202_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "@FOSUser/Resetting/reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
