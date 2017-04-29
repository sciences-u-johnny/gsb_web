<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0ae90765bba391d1cbea74cc00bbbe36972af1e93e7c4c344b4c98d5fde09c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_7d32203c938f7a5d252b24774f9fa3f8415780b7594d5c0b976a6809e6123f80 = $this->env->getExtension("native_profiler");
        $__internal_7d32203c938f7a5d252b24774f9fa3f8415780b7594d5c0b976a6809e6123f80->enter($__internal_7d32203c938f7a5d252b24774f9fa3f8415780b7594d5c0b976a6809e6123f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d32203c938f7a5d252b24774f9fa3f8415780b7594d5c0b976a6809e6123f80->leave($__internal_7d32203c938f7a5d252b24774f9fa3f8415780b7594d5c0b976a6809e6123f80_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4893612b974482ba00c510667166410ecb7aba1fac5f2fe50feeb14dc3da1a11 = $this->env->getExtension("native_profiler");
        $__internal_4893612b974482ba00c510667166410ecb7aba1fac5f2fe50feeb14dc3da1a11->enter($__internal_4893612b974482ba00c510667166410ecb7aba1fac5f2fe50feeb14dc3da1a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_4893612b974482ba00c510667166410ecb7aba1fac5f2fe50feeb14dc3da1a11->leave($__internal_4893612b974482ba00c510667166410ecb7aba1fac5f2fe50feeb14dc3da1a11_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
