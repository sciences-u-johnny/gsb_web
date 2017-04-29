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
        $__internal_b8ff895865f79b934dc10210a52be2d90d876437fa53530c6b77bf7f837e48c7 = $this->env->getExtension("native_profiler");
        $__internal_b8ff895865f79b934dc10210a52be2d90d876437fa53530c6b77bf7f837e48c7->enter($__internal_b8ff895865f79b934dc10210a52be2d90d876437fa53530c6b77bf7f837e48c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8ff895865f79b934dc10210a52be2d90d876437fa53530c6b77bf7f837e48c7->leave($__internal_b8ff895865f79b934dc10210a52be2d90d876437fa53530c6b77bf7f837e48c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea5a4337c327995c346e052932187948751d3258738fde7db1302b907de80765 = $this->env->getExtension("native_profiler");
        $__internal_ea5a4337c327995c346e052932187948751d3258738fde7db1302b907de80765->enter($__internal_ea5a4337c327995c346e052932187948751d3258738fde7db1302b907de80765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ea5a4337c327995c346e052932187948751d3258738fde7db1302b907de80765->leave($__internal_ea5a4337c327995c346e052932187948751d3258738fde7db1302b907de80765_prof);

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
