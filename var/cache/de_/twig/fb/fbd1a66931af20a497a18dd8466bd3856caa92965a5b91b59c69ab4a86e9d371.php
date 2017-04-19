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
        $__internal_c3bf82d33a2f7aa74cc43322d25cf7c9c3a1a53e7a7f6c5c03a740449d2ab63c = $this->env->getExtension("native_profiler");
        $__internal_c3bf82d33a2f7aa74cc43322d25cf7c9c3a1a53e7a7f6c5c03a740449d2ab63c->enter($__internal_c3bf82d33a2f7aa74cc43322d25cf7c9c3a1a53e7a7f6c5c03a740449d2ab63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3bf82d33a2f7aa74cc43322d25cf7c9c3a1a53e7a7f6c5c03a740449d2ab63c->leave($__internal_c3bf82d33a2f7aa74cc43322d25cf7c9c3a1a53e7a7f6c5c03a740449d2ab63c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ba23700df0ee363e060b105c0962b27780373e4c23e611aa9e2d9a3fa5573d4 = $this->env->getExtension("native_profiler");
        $__internal_7ba23700df0ee363e060b105c0962b27780373e4c23e611aa9e2d9a3fa5573d4->enter($__internal_7ba23700df0ee363e060b105c0962b27780373e4c23e611aa9e2d9a3fa5573d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_7ba23700df0ee363e060b105c0962b27780373e4c23e611aa9e2d9a3fa5573d4->leave($__internal_7ba23700df0ee363e060b105c0962b27780373e4c23e611aa9e2d9a3fa5573d4_prof);

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
