<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6a3a1292b789a464df6d22ed97bc9d9fc67c187473c3c1cb7c6759635f3bb47a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_86aa27471fc8c4989b63b20ed5346ffa6947ec22b21c3ee1ebd2832eeef93e29 = $this->env->getExtension("native_profiler");
        $__internal_86aa27471fc8c4989b63b20ed5346ffa6947ec22b21c3ee1ebd2832eeef93e29->enter($__internal_86aa27471fc8c4989b63b20ed5346ffa6947ec22b21c3ee1ebd2832eeef93e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86aa27471fc8c4989b63b20ed5346ffa6947ec22b21c3ee1ebd2832eeef93e29->leave($__internal_86aa27471fc8c4989b63b20ed5346ffa6947ec22b21c3ee1ebd2832eeef93e29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8a91973f2cd2a570a2a812cac99c2c499459e6d294c3a146ad4384e5f8fb019 = $this->env->getExtension("native_profiler");
        $__internal_b8a91973f2cd2a570a2a812cac99c2c499459e6d294c3a146ad4384e5f8fb019->enter($__internal_b8a91973f2cd2a570a2a812cac99c2c499459e6d294c3a146ad4384e5f8fb019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b8a91973f2cd2a570a2a812cac99c2c499459e6d294c3a146ad4384e5f8fb019->leave($__internal_b8a91973f2cd2a570a2a812cac99c2c499459e6d294c3a146ad4384e5f8fb019_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c057d08ab17a7dee3358ee20601ed8c0495929a2637cb30c279a90d3e77b6879 = $this->env->getExtension("native_profiler");
        $__internal_c057d08ab17a7dee3358ee20601ed8c0495929a2637cb30c279a90d3e77b6879->enter($__internal_c057d08ab17a7dee3358ee20601ed8c0495929a2637cb30c279a90d3e77b6879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c057d08ab17a7dee3358ee20601ed8c0495929a2637cb30c279a90d3e77b6879->leave($__internal_c057d08ab17a7dee3358ee20601ed8c0495929a2637cb30c279a90d3e77b6879_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
