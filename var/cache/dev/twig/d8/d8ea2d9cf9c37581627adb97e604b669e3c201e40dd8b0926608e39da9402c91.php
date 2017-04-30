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
        $__internal_a1d0675b4d9a1385d0bb664f02b0a03325c338e095b2edcbaae63473c6ec1397 = $this->env->getExtension("native_profiler");
        $__internal_a1d0675b4d9a1385d0bb664f02b0a03325c338e095b2edcbaae63473c6ec1397->enter($__internal_a1d0675b4d9a1385d0bb664f02b0a03325c338e095b2edcbaae63473c6ec1397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1d0675b4d9a1385d0bb664f02b0a03325c338e095b2edcbaae63473c6ec1397->leave($__internal_a1d0675b4d9a1385d0bb664f02b0a03325c338e095b2edcbaae63473c6ec1397_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34f2e6f1e5a01f5576a4e725b815b24f4057d7e73ce2efad1b694e1c3409ead4 = $this->env->getExtension("native_profiler");
        $__internal_34f2e6f1e5a01f5576a4e725b815b24f4057d7e73ce2efad1b694e1c3409ead4->enter($__internal_34f2e6f1e5a01f5576a4e725b815b24f4057d7e73ce2efad1b694e1c3409ead4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_34f2e6f1e5a01f5576a4e725b815b24f4057d7e73ce2efad1b694e1c3409ead4->leave($__internal_34f2e6f1e5a01f5576a4e725b815b24f4057d7e73ce2efad1b694e1c3409ead4_prof);

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
