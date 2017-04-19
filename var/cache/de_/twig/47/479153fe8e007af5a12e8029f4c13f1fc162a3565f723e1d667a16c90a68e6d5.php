<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2125d14e8f73e5c500ad510370fe214b482d79732922f2d87d2f7af9c845f328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_fcb78fbdfc6b850fbb17cce29e79b89c2ac0c68da01b42f1d71c858a01f894ba = $this->env->getExtension("native_profiler");
        $__internal_fcb78fbdfc6b850fbb17cce29e79b89c2ac0c68da01b42f1d71c858a01f894ba->enter($__internal_fcb78fbdfc6b850fbb17cce29e79b89c2ac0c68da01b42f1d71c858a01f894ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb78fbdfc6b850fbb17cce29e79b89c2ac0c68da01b42f1d71c858a01f894ba->leave($__internal_fcb78fbdfc6b850fbb17cce29e79b89c2ac0c68da01b42f1d71c858a01f894ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a1ae321d58294ecc605b84ac2381cde2d3483f623774f13bb98ddb33665e164 = $this->env->getExtension("native_profiler");
        $__internal_7a1ae321d58294ecc605b84ac2381cde2d3483f623774f13bb98ddb33665e164->enter($__internal_7a1ae321d58294ecc605b84ac2381cde2d3483f623774f13bb98ddb33665e164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7a1ae321d58294ecc605b84ac2381cde2d3483f623774f13bb98ddb33665e164->leave($__internal_7a1ae321d58294ecc605b84ac2381cde2d3483f623774f13bb98ddb33665e164_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "@FOSUser/Group/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
