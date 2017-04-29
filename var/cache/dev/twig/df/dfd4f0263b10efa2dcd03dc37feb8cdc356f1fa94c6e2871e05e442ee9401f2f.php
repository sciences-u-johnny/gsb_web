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
        $__internal_919ed13a90b3d8f4c99bc6746574b92f06143a106b0296478da94758799e8607 = $this->env->getExtension("native_profiler");
        $__internal_919ed13a90b3d8f4c99bc6746574b92f06143a106b0296478da94758799e8607->enter($__internal_919ed13a90b3d8f4c99bc6746574b92f06143a106b0296478da94758799e8607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_919ed13a90b3d8f4c99bc6746574b92f06143a106b0296478da94758799e8607->leave($__internal_919ed13a90b3d8f4c99bc6746574b92f06143a106b0296478da94758799e8607_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2723d43ea64b9c6e601976687d0c1e85115dde99071bba88e4fcc064629cfa1e = $this->env->getExtension("native_profiler");
        $__internal_2723d43ea64b9c6e601976687d0c1e85115dde99071bba88e4fcc064629cfa1e->enter($__internal_2723d43ea64b9c6e601976687d0c1e85115dde99071bba88e4fcc064629cfa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2723d43ea64b9c6e601976687d0c1e85115dde99071bba88e4fcc064629cfa1e->leave($__internal_2723d43ea64b9c6e601976687d0c1e85115dde99071bba88e4fcc064629cfa1e_prof);

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
