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
        $__internal_91752a6bff04b80861690e7b45cb1baeee0f17152d4521fbc9c43179d8c7a844 = $this->env->getExtension("native_profiler");
        $__internal_91752a6bff04b80861690e7b45cb1baeee0f17152d4521fbc9c43179d8c7a844->enter($__internal_91752a6bff04b80861690e7b45cb1baeee0f17152d4521fbc9c43179d8c7a844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91752a6bff04b80861690e7b45cb1baeee0f17152d4521fbc9c43179d8c7a844->leave($__internal_91752a6bff04b80861690e7b45cb1baeee0f17152d4521fbc9c43179d8c7a844_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3128343c7dadcc4c3d9f152cbf62c45a025b4d074b815090f209077cf1837dc = $this->env->getExtension("native_profiler");
        $__internal_a3128343c7dadcc4c3d9f152cbf62c45a025b4d074b815090f209077cf1837dc->enter($__internal_a3128343c7dadcc4c3d9f152cbf62c45a025b4d074b815090f209077cf1837dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a3128343c7dadcc4c3d9f152cbf62c45a025b4d074b815090f209077cf1837dc->leave($__internal_a3128343c7dadcc4c3d9f152cbf62c45a025b4d074b815090f209077cf1837dc_prof);

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
