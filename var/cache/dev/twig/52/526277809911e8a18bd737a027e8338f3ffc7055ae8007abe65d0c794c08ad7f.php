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
        $__internal_c94fee696560d1991059404efb6028d39077223324f9fc0d2b2c5befcd304a4f = $this->env->getExtension("native_profiler");
        $__internal_c94fee696560d1991059404efb6028d39077223324f9fc0d2b2c5befcd304a4f->enter($__internal_c94fee696560d1991059404efb6028d39077223324f9fc0d2b2c5befcd304a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c94fee696560d1991059404efb6028d39077223324f9fc0d2b2c5befcd304a4f->leave($__internal_c94fee696560d1991059404efb6028d39077223324f9fc0d2b2c5befcd304a4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d7971041ef3f48bbe0fcd88115d16900318df4c23a3c7e53c79ccd0b1bb1af6 = $this->env->getExtension("native_profiler");
        $__internal_4d7971041ef3f48bbe0fcd88115d16900318df4c23a3c7e53c79ccd0b1bb1af6->enter($__internal_4d7971041ef3f48bbe0fcd88115d16900318df4c23a3c7e53c79ccd0b1bb1af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4d7971041ef3f48bbe0fcd88115d16900318df4c23a3c7e53c79ccd0b1bb1af6->leave($__internal_4d7971041ef3f48bbe0fcd88115d16900318df4c23a3c7e53c79ccd0b1bb1af6_prof);

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
