<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9afd848ceeb8a52c43f24b3ff38038a2e07493860e67ea6e0afcc41b14703d63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_60c3de78ed6ab47ee399e46e63fac949a82e6a15cb88d851b661454bd51343db = $this->env->getExtension("native_profiler");
        $__internal_60c3de78ed6ab47ee399e46e63fac949a82e6a15cb88d851b661454bd51343db->enter($__internal_60c3de78ed6ab47ee399e46e63fac949a82e6a15cb88d851b661454bd51343db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60c3de78ed6ab47ee399e46e63fac949a82e6a15cb88d851b661454bd51343db->leave($__internal_60c3de78ed6ab47ee399e46e63fac949a82e6a15cb88d851b661454bd51343db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f33cdd53c71ae9a981277d138165c516b363c3973cf0e052d5e09532ce4515c = $this->env->getExtension("native_profiler");
        $__internal_1f33cdd53c71ae9a981277d138165c516b363c3973cf0e052d5e09532ce4515c->enter($__internal_1f33cdd53c71ae9a981277d138165c516b363c3973cf0e052d5e09532ce4515c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1f33cdd53c71ae9a981277d138165c516b363c3973cf0e052d5e09532ce4515c->leave($__internal_1f33cdd53c71ae9a981277d138165c516b363c3973cf0e052d5e09532ce4515c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "@FOSUser/Profile/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
