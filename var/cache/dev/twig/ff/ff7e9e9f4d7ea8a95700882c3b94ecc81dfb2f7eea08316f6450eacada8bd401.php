<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1746d1b404ee51ab93c2bcf6b1d06e56aa0471b19b4ea5fd97cfddfad3c03972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2697a7a16f0cd9c5a78fe54a193ca625583c11dd4386db31b2f91cd7271ad47b = $this->env->getExtension("native_profiler");
        $__internal_2697a7a16f0cd9c5a78fe54a193ca625583c11dd4386db31b2f91cd7271ad47b->enter($__internal_2697a7a16f0cd9c5a78fe54a193ca625583c11dd4386db31b2f91cd7271ad47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2697a7a16f0cd9c5a78fe54a193ca625583c11dd4386db31b2f91cd7271ad47b->leave($__internal_2697a7a16f0cd9c5a78fe54a193ca625583c11dd4386db31b2f91cd7271ad47b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e047ddc60bb58906ff70f9aeac6806704ac045fa6c5301d769d8c3c2ec3521ad = $this->env->getExtension("native_profiler");
        $__internal_e047ddc60bb58906ff70f9aeac6806704ac045fa6c5301d769d8c3c2ec3521ad->enter($__internal_e047ddc60bb58906ff70f9aeac6806704ac045fa6c5301d769d8c3c2ec3521ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_e047ddc60bb58906ff70f9aeac6806704ac045fa6c5301d769d8c3c2ec3521ad->leave($__internal_e047ddc60bb58906ff70f9aeac6806704ac045fa6c5301d769d8c3c2ec3521ad_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ce146f3205a768b5407a20229d6f0b40457516c86cac5545d9c78c553e44715c = $this->env->getExtension("native_profiler");
        $__internal_ce146f3205a768b5407a20229d6f0b40457516c86cac5545d9c78c553e44715c->enter($__internal_ce146f3205a768b5407a20229d6f0b40457516c86cac5545d9c78c553e44715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ce146f3205a768b5407a20229d6f0b40457516c86cac5545d9c78c553e44715c->leave($__internal_ce146f3205a768b5407a20229d6f0b40457516c86cac5545d9c78c553e44715c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_45e8875d50b2fdba698440a3275f9c4f60b0d1d00541b5368cd56fb562dd37e7 = $this->env->getExtension("native_profiler");
        $__internal_45e8875d50b2fdba698440a3275f9c4f60b0d1d00541b5368cd56fb562dd37e7->enter($__internal_45e8875d50b2fdba698440a3275f9c4f60b0d1d00541b5368cd56fb562dd37e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_45e8875d50b2fdba698440a3275f9c4f60b0d1d00541b5368cd56fb562dd37e7->leave($__internal_45e8875d50b2fdba698440a3275f9c4f60b0d1d00541b5368cd56fb562dd37e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
