<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b84f768613c7b52c1c34e1eb93b755ec07303ddfea2f7b54729553eb83f745e7 extends Twig_Template
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
        $__internal_61045167a8db8c2d6d2fe1b76a6b2016fb6ab438818a800cd071f16a0837c793 = $this->env->getExtension("native_profiler");
        $__internal_61045167a8db8c2d6d2fe1b76a6b2016fb6ab438818a800cd071f16a0837c793->enter($__internal_61045167a8db8c2d6d2fe1b76a6b2016fb6ab438818a800cd071f16a0837c793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_61045167a8db8c2d6d2fe1b76a6b2016fb6ab438818a800cd071f16a0837c793->leave($__internal_61045167a8db8c2d6d2fe1b76a6b2016fb6ab438818a800cd071f16a0837c793_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fbe7e3a9f83261799ee67bc90163ce078c6f94f5519c215ff95526b2d9f37cfb = $this->env->getExtension("native_profiler");
        $__internal_fbe7e3a9f83261799ee67bc90163ce078c6f94f5519c215ff95526b2d9f37cfb->enter($__internal_fbe7e3a9f83261799ee67bc90163ce078c6f94f5519c215ff95526b2d9f37cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_fbe7e3a9f83261799ee67bc90163ce078c6f94f5519c215ff95526b2d9f37cfb->leave($__internal_fbe7e3a9f83261799ee67bc90163ce078c6f94f5519c215ff95526b2d9f37cfb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9da38cfe7d0837f0e11912cde303ab9034f6703dc8127243f0e0a123a9af4933 = $this->env->getExtension("native_profiler");
        $__internal_9da38cfe7d0837f0e11912cde303ab9034f6703dc8127243f0e0a123a9af4933->enter($__internal_9da38cfe7d0837f0e11912cde303ab9034f6703dc8127243f0e0a123a9af4933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9da38cfe7d0837f0e11912cde303ab9034f6703dc8127243f0e0a123a9af4933->leave($__internal_9da38cfe7d0837f0e11912cde303ab9034f6703dc8127243f0e0a123a9af4933_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f2fc10f99b72e2d5e136261cd732fa516eeda6451862d19de6fd1b25caf5f0ed = $this->env->getExtension("native_profiler");
        $__internal_f2fc10f99b72e2d5e136261cd732fa516eeda6451862d19de6fd1b25caf5f0ed->enter($__internal_f2fc10f99b72e2d5e136261cd732fa516eeda6451862d19de6fd1b25caf5f0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f2fc10f99b72e2d5e136261cd732fa516eeda6451862d19de6fd1b25caf5f0ed->leave($__internal_f2fc10f99b72e2d5e136261cd732fa516eeda6451862d19de6fd1b25caf5f0ed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
