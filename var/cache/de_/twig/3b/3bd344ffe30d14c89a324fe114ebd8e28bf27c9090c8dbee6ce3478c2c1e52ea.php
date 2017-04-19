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
        $__internal_ec2aa9259f904fc9c890cfc9e569ffbf65f3cbf41ccb802c96e7c1746288512c = $this->env->getExtension("native_profiler");
        $__internal_ec2aa9259f904fc9c890cfc9e569ffbf65f3cbf41ccb802c96e7c1746288512c->enter($__internal_ec2aa9259f904fc9c890cfc9e569ffbf65f3cbf41ccb802c96e7c1746288512c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ec2aa9259f904fc9c890cfc9e569ffbf65f3cbf41ccb802c96e7c1746288512c->leave($__internal_ec2aa9259f904fc9c890cfc9e569ffbf65f3cbf41ccb802c96e7c1746288512c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eb3cd4adce5730954b98345300194459e76b54190aca17c2507b6d43e0331f84 = $this->env->getExtension("native_profiler");
        $__internal_eb3cd4adce5730954b98345300194459e76b54190aca17c2507b6d43e0331f84->enter($__internal_eb3cd4adce5730954b98345300194459e76b54190aca17c2507b6d43e0331f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_eb3cd4adce5730954b98345300194459e76b54190aca17c2507b6d43e0331f84->leave($__internal_eb3cd4adce5730954b98345300194459e76b54190aca17c2507b6d43e0331f84_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_20b7c841f9e14cf93a02a1556b4ddaed357938a1cb2a477c7cc8747005495a8a = $this->env->getExtension("native_profiler");
        $__internal_20b7c841f9e14cf93a02a1556b4ddaed357938a1cb2a477c7cc8747005495a8a->enter($__internal_20b7c841f9e14cf93a02a1556b4ddaed357938a1cb2a477c7cc8747005495a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_20b7c841f9e14cf93a02a1556b4ddaed357938a1cb2a477c7cc8747005495a8a->leave($__internal_20b7c841f9e14cf93a02a1556b4ddaed357938a1cb2a477c7cc8747005495a8a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_677b804c8e0ea7e475195daf97ca01a6416a39d61faa1d2286901f421c38420b = $this->env->getExtension("native_profiler");
        $__internal_677b804c8e0ea7e475195daf97ca01a6416a39d61faa1d2286901f421c38420b->enter($__internal_677b804c8e0ea7e475195daf97ca01a6416a39d61faa1d2286901f421c38420b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_677b804c8e0ea7e475195daf97ca01a6416a39d61faa1d2286901f421c38420b->leave($__internal_677b804c8e0ea7e475195daf97ca01a6416a39d61faa1d2286901f421c38420b_prof);

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
