<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_66362220796d93330a0fe3dab65742e091776ffa878b24c37934eff5594b5c94 extends Twig_Template
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
        $__internal_ed53d81b7878a903d60878109484e270a73429adc35dbbfb3ddb712ce2145e56 = $this->env->getExtension("native_profiler");
        $__internal_ed53d81b7878a903d60878109484e270a73429adc35dbbfb3ddb712ce2145e56->enter($__internal_ed53d81b7878a903d60878109484e270a73429adc35dbbfb3ddb712ce2145e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ed53d81b7878a903d60878109484e270a73429adc35dbbfb3ddb712ce2145e56->leave($__internal_ed53d81b7878a903d60878109484e270a73429adc35dbbfb3ddb712ce2145e56_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ca39ef0be463d22ca6c3c5c34ca9bdefbbf0846389983b4f9026d57a46539082 = $this->env->getExtension("native_profiler");
        $__internal_ca39ef0be463d22ca6c3c5c34ca9bdefbbf0846389983b4f9026d57a46539082->enter($__internal_ca39ef0be463d22ca6c3c5c34ca9bdefbbf0846389983b4f9026d57a46539082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ca39ef0be463d22ca6c3c5c34ca9bdefbbf0846389983b4f9026d57a46539082->leave($__internal_ca39ef0be463d22ca6c3c5c34ca9bdefbbf0846389983b4f9026d57a46539082_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2d7b808399f5df0ec0ad1e9f7e17f7f80431a370d506ab22f458afe4862248d4 = $this->env->getExtension("native_profiler");
        $__internal_2d7b808399f5df0ec0ad1e9f7e17f7f80431a370d506ab22f458afe4862248d4->enter($__internal_2d7b808399f5df0ec0ad1e9f7e17f7f80431a370d506ab22f458afe4862248d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2d7b808399f5df0ec0ad1e9f7e17f7f80431a370d506ab22f458afe4862248d4->leave($__internal_2d7b808399f5df0ec0ad1e9f7e17f7f80431a370d506ab22f458afe4862248d4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1e0455f3ff6dfb4955cea5c7fa13ecd97830ddb6a2bce76ca6500d7f8bf16025 = $this->env->getExtension("native_profiler");
        $__internal_1e0455f3ff6dfb4955cea5c7fa13ecd97830ddb6a2bce76ca6500d7f8bf16025->enter($__internal_1e0455f3ff6dfb4955cea5c7fa13ecd97830ddb6a2bce76ca6500d7f8bf16025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1e0455f3ff6dfb4955cea5c7fa13ecd97830ddb6a2bce76ca6500d7f8bf16025->leave($__internal_1e0455f3ff6dfb4955cea5c7fa13ecd97830ddb6a2bce76ca6500d7f8bf16025_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
