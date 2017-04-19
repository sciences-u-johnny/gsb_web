<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_6f29d7c494af2e0c1cb2ab4ba32a3c24e6b5b44bfbf5dc18d3b31f475c135fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_20c029d572b440f69816af2a862d366f078e159f8fcf616f8cc19736a2565513 = $this->env->getExtension("native_profiler");
        $__internal_20c029d572b440f69816af2a862d366f078e159f8fcf616f8cc19736a2565513->enter($__internal_20c029d572b440f69816af2a862d366f078e159f8fcf616f8cc19736a2565513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20c029d572b440f69816af2a862d366f078e159f8fcf616f8cc19736a2565513->leave($__internal_20c029d572b440f69816af2a862d366f078e159f8fcf616f8cc19736a2565513_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c2e2091f890b5c4007eee2d457a7ba1c7f6230f025d7e7aa59144d61bad1e0f = $this->env->getExtension("native_profiler");
        $__internal_2c2e2091f890b5c4007eee2d457a7ba1c7f6230f025d7e7aa59144d61bad1e0f->enter($__internal_2c2e2091f890b5c4007eee2d457a7ba1c7f6230f025d7e7aa59144d61bad1e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_2c2e2091f890b5c4007eee2d457a7ba1c7f6230f025d7e7aa59144d61bad1e0f->leave($__internal_2c2e2091f890b5c4007eee2d457a7ba1c7f6230f025d7e7aa59144d61bad1e0f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
