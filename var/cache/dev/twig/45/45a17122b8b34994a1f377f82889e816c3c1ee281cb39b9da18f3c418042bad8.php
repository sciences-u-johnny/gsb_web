<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_0689b0d8cea521928471cc0730b206330410e8e0b4ece7556d5128a75865af49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_1fd2a7e1b1d66a6fa6cc74886abf611c0d0ed33036f685512f36dd30d3413dc5 = $this->env->getExtension("native_profiler");
        $__internal_1fd2a7e1b1d66a6fa6cc74886abf611c0d0ed33036f685512f36dd30d3413dc5->enter($__internal_1fd2a7e1b1d66a6fa6cc74886abf611c0d0ed33036f685512f36dd30d3413dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd2a7e1b1d66a6fa6cc74886abf611c0d0ed33036f685512f36dd30d3413dc5->leave($__internal_1fd2a7e1b1d66a6fa6cc74886abf611c0d0ed33036f685512f36dd30d3413dc5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9599b51f9477eb06ac36a929f4a383b7a89bc293f1e16d8a091f1eef5203bdf6 = $this->env->getExtension("native_profiler");
        $__internal_9599b51f9477eb06ac36a929f4a383b7a89bc293f1e16d8a091f1eef5203bdf6->enter($__internal_9599b51f9477eb06ac36a929f4a383b7a89bc293f1e16d8a091f1eef5203bdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9599b51f9477eb06ac36a929f4a383b7a89bc293f1e16d8a091f1eef5203bdf6->leave($__internal_9599b51f9477eb06ac36a929f4a383b7a89bc293f1e16d8a091f1eef5203bdf6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}*/
/* </p>*/
/* {% endblock %}*/
/* */
