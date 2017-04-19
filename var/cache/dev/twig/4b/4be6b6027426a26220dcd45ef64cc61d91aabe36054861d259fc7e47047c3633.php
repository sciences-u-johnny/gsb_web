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
        $__internal_85e6d41b70fbbf18aafcd4b1b90e24e52617cf1b7f1c0a4ce094b190699706b2 = $this->env->getExtension("native_profiler");
        $__internal_85e6d41b70fbbf18aafcd4b1b90e24e52617cf1b7f1c0a4ce094b190699706b2->enter($__internal_85e6d41b70fbbf18aafcd4b1b90e24e52617cf1b7f1c0a4ce094b190699706b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85e6d41b70fbbf18aafcd4b1b90e24e52617cf1b7f1c0a4ce094b190699706b2->leave($__internal_85e6d41b70fbbf18aafcd4b1b90e24e52617cf1b7f1c0a4ce094b190699706b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f34a14f9a713607633e6f3300f60ea0b7b0efc91f78c9dcf5061a682e4dffad3 = $this->env->getExtension("native_profiler");
        $__internal_f34a14f9a713607633e6f3300f60ea0b7b0efc91f78c9dcf5061a682e4dffad3->enter($__internal_f34a14f9a713607633e6f3300f60ea0b7b0efc91f78c9dcf5061a682e4dffad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f34a14f9a713607633e6f3300f60ea0b7b0efc91f78c9dcf5061a682e4dffad3->leave($__internal_f34a14f9a713607633e6f3300f60ea0b7b0efc91f78c9dcf5061a682e4dffad3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e885eb36b45c68c118866fa78611f531e5601aee43240767795b0ce5d4f5d9bc = $this->env->getExtension("native_profiler");
        $__internal_e885eb36b45c68c118866fa78611f531e5601aee43240767795b0ce5d4f5d9bc->enter($__internal_e885eb36b45c68c118866fa78611f531e5601aee43240767795b0ce5d4f5d9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e885eb36b45c68c118866fa78611f531e5601aee43240767795b0ce5d4f5d9bc->leave($__internal_e885eb36b45c68c118866fa78611f531e5601aee43240767795b0ce5d4f5d9bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_73293811252ed08b94fc7abdba7770a9d5ef8760579b0198b908a851acccee28 = $this->env->getExtension("native_profiler");
        $__internal_73293811252ed08b94fc7abdba7770a9d5ef8760579b0198b908a851acccee28->enter($__internal_73293811252ed08b94fc7abdba7770a9d5ef8760579b0198b908a851acccee28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_73293811252ed08b94fc7abdba7770a9d5ef8760579b0198b908a851acccee28->leave($__internal_73293811252ed08b94fc7abdba7770a9d5ef8760579b0198b908a851acccee28_prof);

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
