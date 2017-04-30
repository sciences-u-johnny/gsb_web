<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_42f997be5437c0678489432ff4e7470fab08d6a25c9ad479ae795a58de0478cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_60242d0a5810929239baa2f3245a1f84f6f0b5d8f5732e74ad69b66cf986934c = $this->env->getExtension("native_profiler");
        $__internal_60242d0a5810929239baa2f3245a1f84f6f0b5d8f5732e74ad69b66cf986934c->enter($__internal_60242d0a5810929239baa2f3245a1f84f6f0b5d8f5732e74ad69b66cf986934c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60242d0a5810929239baa2f3245a1f84f6f0b5d8f5732e74ad69b66cf986934c->leave($__internal_60242d0a5810929239baa2f3245a1f84f6f0b5d8f5732e74ad69b66cf986934c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e752c66fc7ddfbb449a24324212c52e7625760358af3568d1797cca5a5f2d66f = $this->env->getExtension("native_profiler");
        $__internal_e752c66fc7ddfbb449a24324212c52e7625760358af3568d1797cca5a5f2d66f->enter($__internal_e752c66fc7ddfbb449a24324212c52e7625760358af3568d1797cca5a5f2d66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e752c66fc7ddfbb449a24324212c52e7625760358af3568d1797cca5a5f2d66f->leave($__internal_e752c66fc7ddfbb449a24324212c52e7625760358af3568d1797cca5a5f2d66f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
