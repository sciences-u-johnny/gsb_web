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
        $__internal_078bf123b0934d84510766acc3f9516221b217be99a35c37650f9d6a8d97ce63 = $this->env->getExtension("native_profiler");
        $__internal_078bf123b0934d84510766acc3f9516221b217be99a35c37650f9d6a8d97ce63->enter($__internal_078bf123b0934d84510766acc3f9516221b217be99a35c37650f9d6a8d97ce63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_078bf123b0934d84510766acc3f9516221b217be99a35c37650f9d6a8d97ce63->leave($__internal_078bf123b0934d84510766acc3f9516221b217be99a35c37650f9d6a8d97ce63_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e6ae06b174c1f4ae974f575c3043d3fc4819d879cb23b562044acc42a1d31990 = $this->env->getExtension("native_profiler");
        $__internal_e6ae06b174c1f4ae974f575c3043d3fc4819d879cb23b562044acc42a1d31990->enter($__internal_e6ae06b174c1f4ae974f575c3043d3fc4819d879cb23b562044acc42a1d31990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e6ae06b174c1f4ae974f575c3043d3fc4819d879cb23b562044acc42a1d31990->leave($__internal_e6ae06b174c1f4ae974f575c3043d3fc4819d879cb23b562044acc42a1d31990_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c75fee70827de503d5a60fb7d923863ff43fcdfee3f7d1e5c6cb6abd4208b786 = $this->env->getExtension("native_profiler");
        $__internal_c75fee70827de503d5a60fb7d923863ff43fcdfee3f7d1e5c6cb6abd4208b786->enter($__internal_c75fee70827de503d5a60fb7d923863ff43fcdfee3f7d1e5c6cb6abd4208b786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c75fee70827de503d5a60fb7d923863ff43fcdfee3f7d1e5c6cb6abd4208b786->leave($__internal_c75fee70827de503d5a60fb7d923863ff43fcdfee3f7d1e5c6cb6abd4208b786_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3516d8d40efd1c80c71702eff56066bad7e331d75e9b886fd1a3558857ce927d = $this->env->getExtension("native_profiler");
        $__internal_3516d8d40efd1c80c71702eff56066bad7e331d75e9b886fd1a3558857ce927d->enter($__internal_3516d8d40efd1c80c71702eff56066bad7e331d75e9b886fd1a3558857ce927d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3516d8d40efd1c80c71702eff56066bad7e331d75e9b886fd1a3558857ce927d->leave($__internal_3516d8d40efd1c80c71702eff56066bad7e331d75e9b886fd1a3558857ce927d_prof);

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
