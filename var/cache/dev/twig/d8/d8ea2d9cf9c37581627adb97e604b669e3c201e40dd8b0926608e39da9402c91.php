<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_7cf1d7b5ab142e75f24c92e3e9e8fadc6d85c3799fbca8231a01e3813c52265f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_068d38a88f8e279082c66bd43f1d5f817eac611817d7175bfe3ab0c70560b6fb = $this->env->getExtension("native_profiler");
        $__internal_068d38a88f8e279082c66bd43f1d5f817eac611817d7175bfe3ab0c70560b6fb->enter($__internal_068d38a88f8e279082c66bd43f1d5f817eac611817d7175bfe3ab0c70560b6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_068d38a88f8e279082c66bd43f1d5f817eac611817d7175bfe3ab0c70560b6fb->leave($__internal_068d38a88f8e279082c66bd43f1d5f817eac611817d7175bfe3ab0c70560b6fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d959b68f94c3122780145f8c3a6dbc1b8dfc8267d542155212e7002a5c1ac6b = $this->env->getExtension("native_profiler");
        $__internal_3d959b68f94c3122780145f8c3a6dbc1b8dfc8267d542155212e7002a5c1ac6b->enter($__internal_3d959b68f94c3122780145f8c3a6dbc1b8dfc8267d542155212e7002a5c1ac6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_3d959b68f94c3122780145f8c3a6dbc1b8dfc8267d542155212e7002a5c1ac6b->leave($__internal_3d959b68f94c3122780145f8c3a6dbc1b8dfc8267d542155212e7002a5c1ac6b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
/* {% include "@FOSUser/ChangePassword/change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
