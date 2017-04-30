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
        $__internal_19bcd59301679759af3d547a1023b29d75532a3590908928c0a62c67a7cb4f5e = $this->env->getExtension("native_profiler");
        $__internal_19bcd59301679759af3d547a1023b29d75532a3590908928c0a62c67a7cb4f5e->enter($__internal_19bcd59301679759af3d547a1023b29d75532a3590908928c0a62c67a7cb4f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19bcd59301679759af3d547a1023b29d75532a3590908928c0a62c67a7cb4f5e->leave($__internal_19bcd59301679759af3d547a1023b29d75532a3590908928c0a62c67a7cb4f5e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ea3b07a19cee8e65220f3ba273ffb9f5d148a7a7f692d749b75c26d36ca0a37 = $this->env->getExtension("native_profiler");
        $__internal_4ea3b07a19cee8e65220f3ba273ffb9f5d148a7a7f692d749b75c26d36ca0a37->enter($__internal_4ea3b07a19cee8e65220f3ba273ffb9f5d148a7a7f692d749b75c26d36ca0a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4ea3b07a19cee8e65220f3ba273ffb9f5d148a7a7f692d749b75c26d36ca0a37->leave($__internal_4ea3b07a19cee8e65220f3ba273ffb9f5d148a7a7f692d749b75c26d36ca0a37_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4e3de7a64dabc0df4b8d93c349e35e5e086b7136523430c043b8e9a0a452188 = $this->env->getExtension("native_profiler");
        $__internal_c4e3de7a64dabc0df4b8d93c349e35e5e086b7136523430c043b8e9a0a452188->enter($__internal_c4e3de7a64dabc0df4b8d93c349e35e5e086b7136523430c043b8e9a0a452188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4e3de7a64dabc0df4b8d93c349e35e5e086b7136523430c043b8e9a0a452188->leave($__internal_c4e3de7a64dabc0df4b8d93c349e35e5e086b7136523430c043b8e9a0a452188_prof);

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
