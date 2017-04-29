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
        $__internal_47c7573a8e208d9bee406a963fc2a7d1a830721e4b6d0daac063b49537d817c9 = $this->env->getExtension("native_profiler");
        $__internal_47c7573a8e208d9bee406a963fc2a7d1a830721e4b6d0daac063b49537d817c9->enter($__internal_47c7573a8e208d9bee406a963fc2a7d1a830721e4b6d0daac063b49537d817c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_47c7573a8e208d9bee406a963fc2a7d1a830721e4b6d0daac063b49537d817c9->leave($__internal_47c7573a8e208d9bee406a963fc2a7d1a830721e4b6d0daac063b49537d817c9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0f20216c71dd184a5919620869ef163548d2966618e7aeab8eca6308b6b62755 = $this->env->getExtension("native_profiler");
        $__internal_0f20216c71dd184a5919620869ef163548d2966618e7aeab8eca6308b6b62755->enter($__internal_0f20216c71dd184a5919620869ef163548d2966618e7aeab8eca6308b6b62755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0f20216c71dd184a5919620869ef163548d2966618e7aeab8eca6308b6b62755->leave($__internal_0f20216c71dd184a5919620869ef163548d2966618e7aeab8eca6308b6b62755_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7a81a4f8a3091992109f5054a1c896390c30e26a0f25e57091d5483e997015c6 = $this->env->getExtension("native_profiler");
        $__internal_7a81a4f8a3091992109f5054a1c896390c30e26a0f25e57091d5483e997015c6->enter($__internal_7a81a4f8a3091992109f5054a1c896390c30e26a0f25e57091d5483e997015c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7a81a4f8a3091992109f5054a1c896390c30e26a0f25e57091d5483e997015c6->leave($__internal_7a81a4f8a3091992109f5054a1c896390c30e26a0f25e57091d5483e997015c6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a07265c9b0390712b8d465283eac8a5c824dddefa1e8f7bfccb4a0a25fc98f39 = $this->env->getExtension("native_profiler");
        $__internal_a07265c9b0390712b8d465283eac8a5c824dddefa1e8f7bfccb4a0a25fc98f39->enter($__internal_a07265c9b0390712b8d465283eac8a5c824dddefa1e8f7bfccb4a0a25fc98f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a07265c9b0390712b8d465283eac8a5c824dddefa1e8f7bfccb4a0a25fc98f39->leave($__internal_a07265c9b0390712b8d465283eac8a5c824dddefa1e8f7bfccb4a0a25fc98f39_prof);

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
