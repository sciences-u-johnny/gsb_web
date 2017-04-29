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
        $__internal_6790a9d03af635eb48eab8f43731ee173cabbd4ef77dec783283f4e40966eb66 = $this->env->getExtension("native_profiler");
        $__internal_6790a9d03af635eb48eab8f43731ee173cabbd4ef77dec783283f4e40966eb66->enter($__internal_6790a9d03af635eb48eab8f43731ee173cabbd4ef77dec783283f4e40966eb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6790a9d03af635eb48eab8f43731ee173cabbd4ef77dec783283f4e40966eb66->leave($__internal_6790a9d03af635eb48eab8f43731ee173cabbd4ef77dec783283f4e40966eb66_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_741e786b1a68dadd32f5926b0ef174722d49e9c6a04143d9b96aa953c6bfcfce = $this->env->getExtension("native_profiler");
        $__internal_741e786b1a68dadd32f5926b0ef174722d49e9c6a04143d9b96aa953c6bfcfce->enter($__internal_741e786b1a68dadd32f5926b0ef174722d49e9c6a04143d9b96aa953c6bfcfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_741e786b1a68dadd32f5926b0ef174722d49e9c6a04143d9b96aa953c6bfcfce->leave($__internal_741e786b1a68dadd32f5926b0ef174722d49e9c6a04143d9b96aa953c6bfcfce_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_80796e3e72384fe63b1c343144fb50632c4433e45b1ea4663f6d10660b63a45f = $this->env->getExtension("native_profiler");
        $__internal_80796e3e72384fe63b1c343144fb50632c4433e45b1ea4663f6d10660b63a45f->enter($__internal_80796e3e72384fe63b1c343144fb50632c4433e45b1ea4663f6d10660b63a45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_80796e3e72384fe63b1c343144fb50632c4433e45b1ea4663f6d10660b63a45f->leave($__internal_80796e3e72384fe63b1c343144fb50632c4433e45b1ea4663f6d10660b63a45f_prof);

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
