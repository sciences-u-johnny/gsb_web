<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_b1589dbcd21053ec8586da8a1d557f8fa61b46c37573dc91d02ccf1045cae970 extends Twig_Template
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
        $__internal_5ba19663e19e4d47b4d8a836da701d8790faf28b5106cc6a670708cbcef43ab9 = $this->env->getExtension("native_profiler");
        $__internal_5ba19663e19e4d47b4d8a836da701d8790faf28b5106cc6a670708cbcef43ab9->enter($__internal_5ba19663e19e4d47b4d8a836da701d8790faf28b5106cc6a670708cbcef43ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5ba19663e19e4d47b4d8a836da701d8790faf28b5106cc6a670708cbcef43ab9->leave($__internal_5ba19663e19e4d47b4d8a836da701d8790faf28b5106cc6a670708cbcef43ab9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f05a3bb04f456a3324efbcd4319af02028b81d80fcaa5c7f2aa3f8b499b70d39 = $this->env->getExtension("native_profiler");
        $__internal_f05a3bb04f456a3324efbcd4319af02028b81d80fcaa5c7f2aa3f8b499b70d39->enter($__internal_f05a3bb04f456a3324efbcd4319af02028b81d80fcaa5c7f2aa3f8b499b70d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_f05a3bb04f456a3324efbcd4319af02028b81d80fcaa5c7f2aa3f8b499b70d39->leave($__internal_f05a3bb04f456a3324efbcd4319af02028b81d80fcaa5c7f2aa3f8b499b70d39_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ac6e51caa9e58c899d4301067dded39c375089a2387e6d9ad8750b2220d623ad = $this->env->getExtension("native_profiler");
        $__internal_ac6e51caa9e58c899d4301067dded39c375089a2387e6d9ad8750b2220d623ad->enter($__internal_ac6e51caa9e58c899d4301067dded39c375089a2387e6d9ad8750b2220d623ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ac6e51caa9e58c899d4301067dded39c375089a2387e6d9ad8750b2220d623ad->leave($__internal_ac6e51caa9e58c899d4301067dded39c375089a2387e6d9ad8750b2220d623ad_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_85f96f782772ff2cd3c863e3900d44545aed7e6c9afd1fd8c0fa7c8496cd05ed = $this->env->getExtension("native_profiler");
        $__internal_85f96f782772ff2cd3c863e3900d44545aed7e6c9afd1fd8c0fa7c8496cd05ed->enter($__internal_85f96f782772ff2cd3c863e3900d44545aed7e6c9afd1fd8c0fa7c8496cd05ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_85f96f782772ff2cd3c863e3900d44545aed7e6c9afd1fd8c0fa7c8496cd05ed->leave($__internal_85f96f782772ff2cd3c863e3900d44545aed7e6c9afd1fd8c0fa7c8496cd05ed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
