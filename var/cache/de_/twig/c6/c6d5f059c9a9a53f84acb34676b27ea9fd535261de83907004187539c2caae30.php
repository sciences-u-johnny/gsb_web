<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b745e78800f309155291caf708c3bde04a0614c21ca93364e194121f11b14c30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a65fc02d5383d5fb4cdf808911d2b94b72b3df62c59cccb62c36280e79308c05 = $this->env->getExtension("native_profiler");
        $__internal_a65fc02d5383d5fb4cdf808911d2b94b72b3df62c59cccb62c36280e79308c05->enter($__internal_a65fc02d5383d5fb4cdf808911d2b94b72b3df62c59cccb62c36280e79308c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a65fc02d5383d5fb4cdf808911d2b94b72b3df62c59cccb62c36280e79308c05->leave($__internal_a65fc02d5383d5fb4cdf808911d2b94b72b3df62c59cccb62c36280e79308c05_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7dae13063763e48f1c9cc0bb99decc0d11afa544b15be436cf25f7b6a629806b = $this->env->getExtension("native_profiler");
        $__internal_7dae13063763e48f1c9cc0bb99decc0d11afa544b15be436cf25f7b6a629806b->enter($__internal_7dae13063763e48f1c9cc0bb99decc0d11afa544b15be436cf25f7b6a629806b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7dae13063763e48f1c9cc0bb99decc0d11afa544b15be436cf25f7b6a629806b->leave($__internal_7dae13063763e48f1c9cc0bb99decc0d11afa544b15be436cf25f7b6a629806b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "@FOSUser/Registration/register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
