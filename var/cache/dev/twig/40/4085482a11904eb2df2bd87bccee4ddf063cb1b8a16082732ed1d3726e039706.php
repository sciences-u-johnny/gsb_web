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
        $__internal_2305b8d0c2698ea448d8186b52207aa7722961c32cb25d154318740dbe28377d = $this->env->getExtension("native_profiler");
        $__internal_2305b8d0c2698ea448d8186b52207aa7722961c32cb25d154318740dbe28377d->enter($__internal_2305b8d0c2698ea448d8186b52207aa7722961c32cb25d154318740dbe28377d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2305b8d0c2698ea448d8186b52207aa7722961c32cb25d154318740dbe28377d->leave($__internal_2305b8d0c2698ea448d8186b52207aa7722961c32cb25d154318740dbe28377d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0bd2153c3f54873c4f98b3c8f7b44bca944d5732945cf9715c8db9d560fd542c = $this->env->getExtension("native_profiler");
        $__internal_0bd2153c3f54873c4f98b3c8f7b44bca944d5732945cf9715c8db9d560fd542c->enter($__internal_0bd2153c3f54873c4f98b3c8f7b44bca944d5732945cf9715c8db9d560fd542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_0bd2153c3f54873c4f98b3c8f7b44bca944d5732945cf9715c8db9d560fd542c->leave($__internal_0bd2153c3f54873c4f98b3c8f7b44bca944d5732945cf9715c8db9d560fd542c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b29ad64148295264ba6782f0fe28e56d17ac8fe4c52d66b07e6e54c22c680651 = $this->env->getExtension("native_profiler");
        $__internal_b29ad64148295264ba6782f0fe28e56d17ac8fe4c52d66b07e6e54c22c680651->enter($__internal_b29ad64148295264ba6782f0fe28e56d17ac8fe4c52d66b07e6e54c22c680651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b29ad64148295264ba6782f0fe28e56d17ac8fe4c52d66b07e6e54c22c680651->leave($__internal_b29ad64148295264ba6782f0fe28e56d17ac8fe4c52d66b07e6e54c22c680651_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6e5c3f037d0d978b4510e6426dc593d6ce095ef7ac6fcda0ff544c5695384742 = $this->env->getExtension("native_profiler");
        $__internal_6e5c3f037d0d978b4510e6426dc593d6ce095ef7ac6fcda0ff544c5695384742->enter($__internal_6e5c3f037d0d978b4510e6426dc593d6ce095ef7ac6fcda0ff544c5695384742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6e5c3f037d0d978b4510e6426dc593d6ce095ef7ac6fcda0ff544c5695384742->leave($__internal_6e5c3f037d0d978b4510e6426dc593d6ce095ef7ac6fcda0ff544c5695384742_prof);

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
