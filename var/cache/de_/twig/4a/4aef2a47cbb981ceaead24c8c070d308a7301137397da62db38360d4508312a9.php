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
        $__internal_8ba74f4ceb5f28ca2a70fa76343882a90dbf64cb08bc90fc7fbc162df2a1027d = $this->env->getExtension("native_profiler");
        $__internal_8ba74f4ceb5f28ca2a70fa76343882a90dbf64cb08bc90fc7fbc162df2a1027d->enter($__internal_8ba74f4ceb5f28ca2a70fa76343882a90dbf64cb08bc90fc7fbc162df2a1027d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8ba74f4ceb5f28ca2a70fa76343882a90dbf64cb08bc90fc7fbc162df2a1027d->leave($__internal_8ba74f4ceb5f28ca2a70fa76343882a90dbf64cb08bc90fc7fbc162df2a1027d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b8214314a47ff75f80543be31d2e0512aa2adeb9627aa78bbb51940c456a5a73 = $this->env->getExtension("native_profiler");
        $__internal_b8214314a47ff75f80543be31d2e0512aa2adeb9627aa78bbb51940c456a5a73->enter($__internal_b8214314a47ff75f80543be31d2e0512aa2adeb9627aa78bbb51940c456a5a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b8214314a47ff75f80543be31d2e0512aa2adeb9627aa78bbb51940c456a5a73->leave($__internal_b8214314a47ff75f80543be31d2e0512aa2adeb9627aa78bbb51940c456a5a73_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a7f0913b60eebcdccf1aef028bc867ad46a3a06c0ee92c4a76ccd7e05a6f3072 = $this->env->getExtension("native_profiler");
        $__internal_a7f0913b60eebcdccf1aef028bc867ad46a3a06c0ee92c4a76ccd7e05a6f3072->enter($__internal_a7f0913b60eebcdccf1aef028bc867ad46a3a06c0ee92c4a76ccd7e05a6f3072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a7f0913b60eebcdccf1aef028bc867ad46a3a06c0ee92c4a76ccd7e05a6f3072->leave($__internal_a7f0913b60eebcdccf1aef028bc867ad46a3a06c0ee92c4a76ccd7e05a6f3072_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4063b9eedf675e0cb7cd44929b16d561db1b265db2707ba1e4bb3c3339300ead = $this->env->getExtension("native_profiler");
        $__internal_4063b9eedf675e0cb7cd44929b16d561db1b265db2707ba1e4bb3c3339300ead->enter($__internal_4063b9eedf675e0cb7cd44929b16d561db1b265db2707ba1e4bb3c3339300ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4063b9eedf675e0cb7cd44929b16d561db1b265db2707ba1e4bb3c3339300ead->leave($__internal_4063b9eedf675e0cb7cd44929b16d561db1b265db2707ba1e4bb3c3339300ead_prof);

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
