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
        $__internal_4541f4744b97ab7b4bd959b5b4470d7144c6ca9a22b71ca7f4ea312dd885c515 = $this->env->getExtension("native_profiler");
        $__internal_4541f4744b97ab7b4bd959b5b4470d7144c6ca9a22b71ca7f4ea312dd885c515->enter($__internal_4541f4744b97ab7b4bd959b5b4470d7144c6ca9a22b71ca7f4ea312dd885c515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4541f4744b97ab7b4bd959b5b4470d7144c6ca9a22b71ca7f4ea312dd885c515->leave($__internal_4541f4744b97ab7b4bd959b5b4470d7144c6ca9a22b71ca7f4ea312dd885c515_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1fa04bdb0fc5c509302a78def8945678a8bf843ae90228f5a8bb8bd7577b0f16 = $this->env->getExtension("native_profiler");
        $__internal_1fa04bdb0fc5c509302a78def8945678a8bf843ae90228f5a8bb8bd7577b0f16->enter($__internal_1fa04bdb0fc5c509302a78def8945678a8bf843ae90228f5a8bb8bd7577b0f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_1fa04bdb0fc5c509302a78def8945678a8bf843ae90228f5a8bb8bd7577b0f16->leave($__internal_1fa04bdb0fc5c509302a78def8945678a8bf843ae90228f5a8bb8bd7577b0f16_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1286fc31ec95956d64550b5db52cc7dcdb897158e7372ba01bf699e1a811513c = $this->env->getExtension("native_profiler");
        $__internal_1286fc31ec95956d64550b5db52cc7dcdb897158e7372ba01bf699e1a811513c->enter($__internal_1286fc31ec95956d64550b5db52cc7dcdb897158e7372ba01bf699e1a811513c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1286fc31ec95956d64550b5db52cc7dcdb897158e7372ba01bf699e1a811513c->leave($__internal_1286fc31ec95956d64550b5db52cc7dcdb897158e7372ba01bf699e1a811513c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4960d135f2e6557acbeab066bf7ce2df9d15c4eb6aad5e37e24913334de06150 = $this->env->getExtension("native_profiler");
        $__internal_4960d135f2e6557acbeab066bf7ce2df9d15c4eb6aad5e37e24913334de06150->enter($__internal_4960d135f2e6557acbeab066bf7ce2df9d15c4eb6aad5e37e24913334de06150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4960d135f2e6557acbeab066bf7ce2df9d15c4eb6aad5e37e24913334de06150->leave($__internal_4960d135f2e6557acbeab066bf7ce2df9d15c4eb6aad5e37e24913334de06150_prof);

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
