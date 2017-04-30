<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4afd4c82078c8662f556d80bdf16997346ed7747f580950d97e8127b49ff2e85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ed7ff4e35a1b233ca136ab7bd32c4a33e19a48cbc2e56566bee50b7e86b3ed8 = $this->env->getExtension("native_profiler");
        $__internal_7ed7ff4e35a1b233ca136ab7bd32c4a33e19a48cbc2e56566bee50b7e86b3ed8->enter($__internal_7ed7ff4e35a1b233ca136ab7bd32c4a33e19a48cbc2e56566bee50b7e86b3ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ed7ff4e35a1b233ca136ab7bd32c4a33e19a48cbc2e56566bee50b7e86b3ed8->leave($__internal_7ed7ff4e35a1b233ca136ab7bd32c4a33e19a48cbc2e56566bee50b7e86b3ed8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d28e713069969f1ef1b319e3aeab64311d87fad824e9feec76f6e07bb5ca4f6 = $this->env->getExtension("native_profiler");
        $__internal_1d28e713069969f1ef1b319e3aeab64311d87fad824e9feec76f6e07bb5ca4f6->enter($__internal_1d28e713069969f1ef1b319e3aeab64311d87fad824e9feec76f6e07bb5ca4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1d28e713069969f1ef1b319e3aeab64311d87fad824e9feec76f6e07bb5ca4f6->leave($__internal_1d28e713069969f1ef1b319e3aeab64311d87fad824e9feec76f6e07bb5ca4f6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1db3b6d79d65019660cbfd341c466d9f91087ea76149b25c4b0dae76af136565 = $this->env->getExtension("native_profiler");
        $__internal_1db3b6d79d65019660cbfd341c466d9f91087ea76149b25c4b0dae76af136565->enter($__internal_1db3b6d79d65019660cbfd341c466d9f91087ea76149b25c4b0dae76af136565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1db3b6d79d65019660cbfd341c466d9f91087ea76149b25c4b0dae76af136565->leave($__internal_1db3b6d79d65019660cbfd341c466d9f91087ea76149b25c4b0dae76af136565_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
