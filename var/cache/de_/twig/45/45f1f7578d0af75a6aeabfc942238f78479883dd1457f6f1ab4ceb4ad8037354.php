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
        $__internal_232edfcdc86341e86bfbf62330932f59eb2ecc7f203c693163aff8aadacce893 = $this->env->getExtension("native_profiler");
        $__internal_232edfcdc86341e86bfbf62330932f59eb2ecc7f203c693163aff8aadacce893->enter($__internal_232edfcdc86341e86bfbf62330932f59eb2ecc7f203c693163aff8aadacce893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_232edfcdc86341e86bfbf62330932f59eb2ecc7f203c693163aff8aadacce893->leave($__internal_232edfcdc86341e86bfbf62330932f59eb2ecc7f203c693163aff8aadacce893_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed9c8181412135a7ad14727c5c23d34b772aae3cd0d6f722d993c1a0333a7d21 = $this->env->getExtension("native_profiler");
        $__internal_ed9c8181412135a7ad14727c5c23d34b772aae3cd0d6f722d993c1a0333a7d21->enter($__internal_ed9c8181412135a7ad14727c5c23d34b772aae3cd0d6f722d993c1a0333a7d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ed9c8181412135a7ad14727c5c23d34b772aae3cd0d6f722d993c1a0333a7d21->leave($__internal_ed9c8181412135a7ad14727c5c23d34b772aae3cd0d6f722d993c1a0333a7d21_prof);

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
