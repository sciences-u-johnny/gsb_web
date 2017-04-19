<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f79b649d65e1574effa4391719fa3873e994b34b5439d19578917984422fe584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_8aace63b063494198d2f8a1abdf8cbef1466639d64d60d8f60a82c70a39be95b = $this->env->getExtension("native_profiler");
        $__internal_8aace63b063494198d2f8a1abdf8cbef1466639d64d60d8f60a82c70a39be95b->enter($__internal_8aace63b063494198d2f8a1abdf8cbef1466639d64d60d8f60a82c70a39be95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aace63b063494198d2f8a1abdf8cbef1466639d64d60d8f60a82c70a39be95b->leave($__internal_8aace63b063494198d2f8a1abdf8cbef1466639d64d60d8f60a82c70a39be95b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd2b72497e02739b36b18fc43ff693c6e5c10afe4037a70df82b977642c2e762 = $this->env->getExtension("native_profiler");
        $__internal_fd2b72497e02739b36b18fc43ff693c6e5c10afe4037a70df82b977642c2e762->enter($__internal_fd2b72497e02739b36b18fc43ff693c6e5c10afe4037a70df82b977642c2e762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_fd2b72497e02739b36b18fc43ff693c6e5c10afe4037a70df82b977642c2e762->leave($__internal_fd2b72497e02739b36b18fc43ff693c6e5c10afe4037a70df82b977642c2e762_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
