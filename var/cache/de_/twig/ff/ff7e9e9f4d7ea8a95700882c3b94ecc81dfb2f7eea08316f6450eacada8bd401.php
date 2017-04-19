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
        $__internal_2c4e40832a41648ad434328011a0a3f0dd6cd6eaa524cb505f76579ad7251ca2 = $this->env->getExtension("native_profiler");
        $__internal_2c4e40832a41648ad434328011a0a3f0dd6cd6eaa524cb505f76579ad7251ca2->enter($__internal_2c4e40832a41648ad434328011a0a3f0dd6cd6eaa524cb505f76579ad7251ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2c4e40832a41648ad434328011a0a3f0dd6cd6eaa524cb505f76579ad7251ca2->leave($__internal_2c4e40832a41648ad434328011a0a3f0dd6cd6eaa524cb505f76579ad7251ca2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5388cb696c4eebe00a6ade3bbfed4a4382f41af01989172a85b9891cca6e7488 = $this->env->getExtension("native_profiler");
        $__internal_5388cb696c4eebe00a6ade3bbfed4a4382f41af01989172a85b9891cca6e7488->enter($__internal_5388cb696c4eebe00a6ade3bbfed4a4382f41af01989172a85b9891cca6e7488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_5388cb696c4eebe00a6ade3bbfed4a4382f41af01989172a85b9891cca6e7488->leave($__internal_5388cb696c4eebe00a6ade3bbfed4a4382f41af01989172a85b9891cca6e7488_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5e9ca7975fa9f61bb9eaa37d74f28ee358f653c7e1098ebc4bb4a624fef9ef8c = $this->env->getExtension("native_profiler");
        $__internal_5e9ca7975fa9f61bb9eaa37d74f28ee358f653c7e1098ebc4bb4a624fef9ef8c->enter($__internal_5e9ca7975fa9f61bb9eaa37d74f28ee358f653c7e1098ebc4bb4a624fef9ef8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5e9ca7975fa9f61bb9eaa37d74f28ee358f653c7e1098ebc4bb4a624fef9ef8c->leave($__internal_5e9ca7975fa9f61bb9eaa37d74f28ee358f653c7e1098ebc4bb4a624fef9ef8c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_87d8a9f450f0018ecb7d8f42259f607f78fc97280496537f9541353bc78916f8 = $this->env->getExtension("native_profiler");
        $__internal_87d8a9f450f0018ecb7d8f42259f607f78fc97280496537f9541353bc78916f8->enter($__internal_87d8a9f450f0018ecb7d8f42259f607f78fc97280496537f9541353bc78916f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_87d8a9f450f0018ecb7d8f42259f607f78fc97280496537f9541353bc78916f8->leave($__internal_87d8a9f450f0018ecb7d8f42259f607f78fc97280496537f9541353bc78916f8_prof);

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
