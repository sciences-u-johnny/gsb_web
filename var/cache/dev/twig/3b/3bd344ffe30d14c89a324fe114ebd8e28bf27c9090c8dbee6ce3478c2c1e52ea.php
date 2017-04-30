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
        $__internal_420a163983473a2b81a4409a7f859bcd29fcfc40ed5712138559ab8491807798 = $this->env->getExtension("native_profiler");
        $__internal_420a163983473a2b81a4409a7f859bcd29fcfc40ed5712138559ab8491807798->enter($__internal_420a163983473a2b81a4409a7f859bcd29fcfc40ed5712138559ab8491807798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_420a163983473a2b81a4409a7f859bcd29fcfc40ed5712138559ab8491807798->leave($__internal_420a163983473a2b81a4409a7f859bcd29fcfc40ed5712138559ab8491807798_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1b8849a39e2fcf950880891bfc38e8d0de929efe5c4a9bc63e9c8cf21c90e5d5 = $this->env->getExtension("native_profiler");
        $__internal_1b8849a39e2fcf950880891bfc38e8d0de929efe5c4a9bc63e9c8cf21c90e5d5->enter($__internal_1b8849a39e2fcf950880891bfc38e8d0de929efe5c4a9bc63e9c8cf21c90e5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_1b8849a39e2fcf950880891bfc38e8d0de929efe5c4a9bc63e9c8cf21c90e5d5->leave($__internal_1b8849a39e2fcf950880891bfc38e8d0de929efe5c4a9bc63e9c8cf21c90e5d5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c549fb140d3fa3a04269b743b8f04dc0dbd10a775e1ad1d9b7925caa2f777698 = $this->env->getExtension("native_profiler");
        $__internal_c549fb140d3fa3a04269b743b8f04dc0dbd10a775e1ad1d9b7925caa2f777698->enter($__internal_c549fb140d3fa3a04269b743b8f04dc0dbd10a775e1ad1d9b7925caa2f777698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c549fb140d3fa3a04269b743b8f04dc0dbd10a775e1ad1d9b7925caa2f777698->leave($__internal_c549fb140d3fa3a04269b743b8f04dc0dbd10a775e1ad1d9b7925caa2f777698_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9bd3d46c7f02339cac64356ad99224f584eeddc338ec3e1c4790a518c50326c3 = $this->env->getExtension("native_profiler");
        $__internal_9bd3d46c7f02339cac64356ad99224f584eeddc338ec3e1c4790a518c50326c3->enter($__internal_9bd3d46c7f02339cac64356ad99224f584eeddc338ec3e1c4790a518c50326c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9bd3d46c7f02339cac64356ad99224f584eeddc338ec3e1c4790a518c50326c3->leave($__internal_9bd3d46c7f02339cac64356ad99224f584eeddc338ec3e1c4790a518c50326c3_prof);

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
