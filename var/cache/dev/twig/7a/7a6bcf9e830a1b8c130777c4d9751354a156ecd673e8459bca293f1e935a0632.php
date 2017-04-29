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
        $__internal_fc0080a242eef9e1795e784caa9c2353856d87150f00e9a87f34f28531dc6db8 = $this->env->getExtension("native_profiler");
        $__internal_fc0080a242eef9e1795e784caa9c2353856d87150f00e9a87f34f28531dc6db8->enter($__internal_fc0080a242eef9e1795e784caa9c2353856d87150f00e9a87f34f28531dc6db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc0080a242eef9e1795e784caa9c2353856d87150f00e9a87f34f28531dc6db8->leave($__internal_fc0080a242eef9e1795e784caa9c2353856d87150f00e9a87f34f28531dc6db8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_544b477626d169766c5439f5d0c5b9bd0f8c10d8b1844b71c574ebfda8fc6289 = $this->env->getExtension("native_profiler");
        $__internal_544b477626d169766c5439f5d0c5b9bd0f8c10d8b1844b71c574ebfda8fc6289->enter($__internal_544b477626d169766c5439f5d0c5b9bd0f8c10d8b1844b71c574ebfda8fc6289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_544b477626d169766c5439f5d0c5b9bd0f8c10d8b1844b71c574ebfda8fc6289->leave($__internal_544b477626d169766c5439f5d0c5b9bd0f8c10d8b1844b71c574ebfda8fc6289_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6711b7619cd38a5955289d78ad4d9ff2d75bba05cf3873806feef8f75def6b6d = $this->env->getExtension("native_profiler");
        $__internal_6711b7619cd38a5955289d78ad4d9ff2d75bba05cf3873806feef8f75def6b6d->enter($__internal_6711b7619cd38a5955289d78ad4d9ff2d75bba05cf3873806feef8f75def6b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6711b7619cd38a5955289d78ad4d9ff2d75bba05cf3873806feef8f75def6b6d->leave($__internal_6711b7619cd38a5955289d78ad4d9ff2d75bba05cf3873806feef8f75def6b6d_prof);

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
