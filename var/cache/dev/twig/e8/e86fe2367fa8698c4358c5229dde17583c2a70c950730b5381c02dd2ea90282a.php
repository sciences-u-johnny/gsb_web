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
        $__internal_837c7a6307ac7f4aba74ffcfb01bc98c0137ce221ffb95cd2f182aab4f55a37c = $this->env->getExtension("native_profiler");
        $__internal_837c7a6307ac7f4aba74ffcfb01bc98c0137ce221ffb95cd2f182aab4f55a37c->enter($__internal_837c7a6307ac7f4aba74ffcfb01bc98c0137ce221ffb95cd2f182aab4f55a37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_837c7a6307ac7f4aba74ffcfb01bc98c0137ce221ffb95cd2f182aab4f55a37c->leave($__internal_837c7a6307ac7f4aba74ffcfb01bc98c0137ce221ffb95cd2f182aab4f55a37c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ab81878caf0271150849670eaf3ae4572c543b0cbf926185a6ca90df366b7a9 = $this->env->getExtension("native_profiler");
        $__internal_8ab81878caf0271150849670eaf3ae4572c543b0cbf926185a6ca90df366b7a9->enter($__internal_8ab81878caf0271150849670eaf3ae4572c543b0cbf926185a6ca90df366b7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8ab81878caf0271150849670eaf3ae4572c543b0cbf926185a6ca90df366b7a9->leave($__internal_8ab81878caf0271150849670eaf3ae4572c543b0cbf926185a6ca90df366b7a9_prof);

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
