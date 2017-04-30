<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8aa2eb36fa73a7563a8895fdcdbb1b6e4e5fa9c688fc77189a2ca8d592fe4cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_845de5b96aa2cade96ca55a48c0ec71500478046a5d7ef44bdf602802193ca6e = $this->env->getExtension("native_profiler");
        $__internal_845de5b96aa2cade96ca55a48c0ec71500478046a5d7ef44bdf602802193ca6e->enter($__internal_845de5b96aa2cade96ca55a48c0ec71500478046a5d7ef44bdf602802193ca6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_845de5b96aa2cade96ca55a48c0ec71500478046a5d7ef44bdf602802193ca6e->leave($__internal_845de5b96aa2cade96ca55a48c0ec71500478046a5d7ef44bdf602802193ca6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38ad691ca2e7df1260c1263139224caf764a8984b8908a845adb299667c73f6b = $this->env->getExtension("native_profiler");
        $__internal_38ad691ca2e7df1260c1263139224caf764a8984b8908a845adb299667c73f6b->enter($__internal_38ad691ca2e7df1260c1263139224caf764a8984b8908a845adb299667c73f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_38ad691ca2e7df1260c1263139224caf764a8984b8908a845adb299667c73f6b->leave($__internal_38ad691ca2e7df1260c1263139224caf764a8984b8908a845adb299667c73f6b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
/*     {{ include('@FOSUser/Security/login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
