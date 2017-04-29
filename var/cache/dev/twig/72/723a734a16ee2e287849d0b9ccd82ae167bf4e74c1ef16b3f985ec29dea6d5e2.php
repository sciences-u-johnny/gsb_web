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
        $__internal_02948b9e3d7f49d762ba7c3fd6762640eca0f704dcf34dda38bd21ba085238af = $this->env->getExtension("native_profiler");
        $__internal_02948b9e3d7f49d762ba7c3fd6762640eca0f704dcf34dda38bd21ba085238af->enter($__internal_02948b9e3d7f49d762ba7c3fd6762640eca0f704dcf34dda38bd21ba085238af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02948b9e3d7f49d762ba7c3fd6762640eca0f704dcf34dda38bd21ba085238af->leave($__internal_02948b9e3d7f49d762ba7c3fd6762640eca0f704dcf34dda38bd21ba085238af_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c36d750f834ef3d493f35f9e58218cb50619e7d8d417174eb51956e25d660cd3 = $this->env->getExtension("native_profiler");
        $__internal_c36d750f834ef3d493f35f9e58218cb50619e7d8d417174eb51956e25d660cd3->enter($__internal_c36d750f834ef3d493f35f9e58218cb50619e7d8d417174eb51956e25d660cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c36d750f834ef3d493f35f9e58218cb50619e7d8d417174eb51956e25d660cd3->leave($__internal_c36d750f834ef3d493f35f9e58218cb50619e7d8d417174eb51956e25d660cd3_prof);

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
