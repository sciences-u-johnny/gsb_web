<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b85b952db2d96226d42592e84a3d86cbcbf563e5446b54d688c3565f9d779fda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3965a8916549b4472c37022fba95cf45059d8158029d4f4929bbd018d798e108 = $this->env->getExtension("native_profiler");
        $__internal_3965a8916549b4472c37022fba95cf45059d8158029d4f4929bbd018d798e108->enter($__internal_3965a8916549b4472c37022fba95cf45059d8158029d4f4929bbd018d798e108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3965a8916549b4472c37022fba95cf45059d8158029d4f4929bbd018d798e108->leave($__internal_3965a8916549b4472c37022fba95cf45059d8158029d4f4929bbd018d798e108_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_038ff2bacb739aa9377ec545952e0a5179276029801bbc7f9f689cc0994a20fe = $this->env->getExtension("native_profiler");
        $__internal_038ff2bacb739aa9377ec545952e0a5179276029801bbc7f9f689cc0994a20fe->enter($__internal_038ff2bacb739aa9377ec545952e0a5179276029801bbc7f9f689cc0994a20fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_038ff2bacb739aa9377ec545952e0a5179276029801bbc7f9f689cc0994a20fe->leave($__internal_038ff2bacb739aa9377ec545952e0a5179276029801bbc7f9f689cc0994a20fe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac8a6b67bbbb0ec1efe1f95b65f228c7654b37100d733f2e89e94d147790cd84 = $this->env->getExtension("native_profiler");
        $__internal_ac8a6b67bbbb0ec1efe1f95b65f228c7654b37100d733f2e89e94d147790cd84->enter($__internal_ac8a6b67bbbb0ec1efe1f95b65f228c7654b37100d733f2e89e94d147790cd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac8a6b67bbbb0ec1efe1f95b65f228c7654b37100d733f2e89e94d147790cd84->leave($__internal_ac8a6b67bbbb0ec1efe1f95b65f228c7654b37100d733f2e89e94d147790cd84_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_937640a9d49a9d6a16f9dd3fda5341a5a226ae615b2031e06347b1d0652b2d29 = $this->env->getExtension("native_profiler");
        $__internal_937640a9d49a9d6a16f9dd3fda5341a5a226ae615b2031e06347b1d0652b2d29->enter($__internal_937640a9d49a9d6a16f9dd3fda5341a5a226ae615b2031e06347b1d0652b2d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_937640a9d49a9d6a16f9dd3fda5341a5a226ae615b2031e06347b1d0652b2d29->leave($__internal_937640a9d49a9d6a16f9dd3fda5341a5a226ae615b2031e06347b1d0652b2d29_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
