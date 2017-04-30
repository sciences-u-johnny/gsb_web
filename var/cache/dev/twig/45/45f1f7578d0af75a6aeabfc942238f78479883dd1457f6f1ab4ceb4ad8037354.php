<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_2548645da24a435285e99744d1cc8bfd6ee597722eeaf1747750687aa757c1d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_69cd767531872be952a802976d675fd7995c8bfb44a552c37921cc7cf5c4663c = $this->env->getExtension("native_profiler");
        $__internal_69cd767531872be952a802976d675fd7995c8bfb44a552c37921cc7cf5c4663c->enter($__internal_69cd767531872be952a802976d675fd7995c8bfb44a552c37921cc7cf5c4663c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69cd767531872be952a802976d675fd7995c8bfb44a552c37921cc7cf5c4663c->leave($__internal_69cd767531872be952a802976d675fd7995c8bfb44a552c37921cc7cf5c4663c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7725ce8dc719a40b8e37de99968052454ccd0a4c90d887b7a1cd8b0240db547 = $this->env->getExtension("native_profiler");
        $__internal_a7725ce8dc719a40b8e37de99968052454ccd0a4c90d887b7a1cd8b0240db547->enter($__internal_a7725ce8dc719a40b8e37de99968052454ccd0a4c90d887b7a1cd8b0240db547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a7725ce8dc719a40b8e37de99968052454ccd0a4c90d887b7a1cd8b0240db547->leave($__internal_a7725ce8dc719a40b8e37de99968052454ccd0a4c90d887b7a1cd8b0240db547_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "@FOSUser/Group/new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
