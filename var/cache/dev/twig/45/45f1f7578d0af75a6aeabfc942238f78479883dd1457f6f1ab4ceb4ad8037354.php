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
        $__internal_606e2f9e4da19611649026669a77ad10e5bcf8f23f06902c6154923180b0df5e = $this->env->getExtension("native_profiler");
        $__internal_606e2f9e4da19611649026669a77ad10e5bcf8f23f06902c6154923180b0df5e->enter($__internal_606e2f9e4da19611649026669a77ad10e5bcf8f23f06902c6154923180b0df5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_606e2f9e4da19611649026669a77ad10e5bcf8f23f06902c6154923180b0df5e->leave($__internal_606e2f9e4da19611649026669a77ad10e5bcf8f23f06902c6154923180b0df5e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36dc1729ff8064f02f3d9ece3950961fce4b94cfbe51c1fd10a3b505aea9c2ee = $this->env->getExtension("native_profiler");
        $__internal_36dc1729ff8064f02f3d9ece3950961fce4b94cfbe51c1fd10a3b505aea9c2ee->enter($__internal_36dc1729ff8064f02f3d9ece3950961fce4b94cfbe51c1fd10a3b505aea9c2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_36dc1729ff8064f02f3d9ece3950961fce4b94cfbe51c1fd10a3b505aea9c2ee->leave($__internal_36dc1729ff8064f02f3d9ece3950961fce4b94cfbe51c1fd10a3b505aea9c2ee_prof);

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
