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
        $__internal_69f3e371f79cf14e9ba42e05ba3eaf29498f3ae808c812074e1d1afae16c6377 = $this->env->getExtension("native_profiler");
        $__internal_69f3e371f79cf14e9ba42e05ba3eaf29498f3ae808c812074e1d1afae16c6377->enter($__internal_69f3e371f79cf14e9ba42e05ba3eaf29498f3ae808c812074e1d1afae16c6377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69f3e371f79cf14e9ba42e05ba3eaf29498f3ae808c812074e1d1afae16c6377->leave($__internal_69f3e371f79cf14e9ba42e05ba3eaf29498f3ae808c812074e1d1afae16c6377_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e5096d0262b2d761161f1f3956aed7014fc90808f59cf13735dd231e849ce18 = $this->env->getExtension("native_profiler");
        $__internal_7e5096d0262b2d761161f1f3956aed7014fc90808f59cf13735dd231e849ce18->enter($__internal_7e5096d0262b2d761161f1f3956aed7014fc90808f59cf13735dd231e849ce18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7e5096d0262b2d761161f1f3956aed7014fc90808f59cf13735dd231e849ce18->leave($__internal_7e5096d0262b2d761161f1f3956aed7014fc90808f59cf13735dd231e849ce18_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfe5e8721895afc4435a76cc37fa0aab3629496bd00fff9ee98fa6f3e9d11dde = $this->env->getExtension("native_profiler");
        $__internal_dfe5e8721895afc4435a76cc37fa0aab3629496bd00fff9ee98fa6f3e9d11dde->enter($__internal_dfe5e8721895afc4435a76cc37fa0aab3629496bd00fff9ee98fa6f3e9d11dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dfe5e8721895afc4435a76cc37fa0aab3629496bd00fff9ee98fa6f3e9d11dde->leave($__internal_dfe5e8721895afc4435a76cc37fa0aab3629496bd00fff9ee98fa6f3e9d11dde_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7728a80d05ef5e9eace6734bc8cef4c45f9a94441fc15a2c1215ea7095935093 = $this->env->getExtension("native_profiler");
        $__internal_7728a80d05ef5e9eace6734bc8cef4c45f9a94441fc15a2c1215ea7095935093->enter($__internal_7728a80d05ef5e9eace6734bc8cef4c45f9a94441fc15a2c1215ea7095935093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7728a80d05ef5e9eace6734bc8cef4c45f9a94441fc15a2c1215ea7095935093->leave($__internal_7728a80d05ef5e9eace6734bc8cef4c45f9a94441fc15a2c1215ea7095935093_prof);

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
