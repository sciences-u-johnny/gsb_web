<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_7fbd83a5eef86d71cabe9e907c279aa4e0a497c053750cd5e34e53052e9e59a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_173244a4805529a59d75dbd193ac0d663b664224c32429fa4c6a4a2c13ba0364 = $this->env->getExtension("native_profiler");
        $__internal_173244a4805529a59d75dbd193ac0d663b664224c32429fa4c6a4a2c13ba0364->enter($__internal_173244a4805529a59d75dbd193ac0d663b664224c32429fa4c6a4a2c13ba0364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_173244a4805529a59d75dbd193ac0d663b664224c32429fa4c6a4a2c13ba0364->leave($__internal_173244a4805529a59d75dbd193ac0d663b664224c32429fa4c6a4a2c13ba0364_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ac7479297fbc9f2ada259176d23d5475b004db4f9bc8eaa2038e4db8414f54c = $this->env->getExtension("native_profiler");
        $__internal_1ac7479297fbc9f2ada259176d23d5475b004db4f9bc8eaa2038e4db8414f54c->enter($__internal_1ac7479297fbc9f2ada259176d23d5475b004db4f9bc8eaa2038e4db8414f54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_1ac7479297fbc9f2ada259176d23d5475b004db4f9bc8eaa2038e4db8414f54c->leave($__internal_1ac7479297fbc9f2ada259176d23d5475b004db4f9bc8eaa2038e4db8414f54c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
