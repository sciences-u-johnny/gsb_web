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
        $__internal_f891abef4b664e11744253cc4c2e9c64a459d3a3061d25d58c828783336ad1e9 = $this->env->getExtension("native_profiler");
        $__internal_f891abef4b664e11744253cc4c2e9c64a459d3a3061d25d58c828783336ad1e9->enter($__internal_f891abef4b664e11744253cc4c2e9c64a459d3a3061d25d58c828783336ad1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f891abef4b664e11744253cc4c2e9c64a459d3a3061d25d58c828783336ad1e9->leave($__internal_f891abef4b664e11744253cc4c2e9c64a459d3a3061d25d58c828783336ad1e9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1687bc451c5269d7460087717a3c413aeec046584905f549185b6642f5ae9a1 = $this->env->getExtension("native_profiler");
        $__internal_d1687bc451c5269d7460087717a3c413aeec046584905f549185b6642f5ae9a1->enter($__internal_d1687bc451c5269d7460087717a3c413aeec046584905f549185b6642f5ae9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d1687bc451c5269d7460087717a3c413aeec046584905f549185b6642f5ae9a1->leave($__internal_d1687bc451c5269d7460087717a3c413aeec046584905f549185b6642f5ae9a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17fbd27c831aa3587df2bbb64e3b35af497480c6c54635dae9a69e231c307e8f = $this->env->getExtension("native_profiler");
        $__internal_17fbd27c831aa3587df2bbb64e3b35af497480c6c54635dae9a69e231c307e8f->enter($__internal_17fbd27c831aa3587df2bbb64e3b35af497480c6c54635dae9a69e231c307e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17fbd27c831aa3587df2bbb64e3b35af497480c6c54635dae9a69e231c307e8f->leave($__internal_17fbd27c831aa3587df2bbb64e3b35af497480c6c54635dae9a69e231c307e8f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_737657a392bec0cdfa1708f8705a9d9713c80b5a1f30aa025d5f612d6b94155c = $this->env->getExtension("native_profiler");
        $__internal_737657a392bec0cdfa1708f8705a9d9713c80b5a1f30aa025d5f612d6b94155c->enter($__internal_737657a392bec0cdfa1708f8705a9d9713c80b5a1f30aa025d5f612d6b94155c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_737657a392bec0cdfa1708f8705a9d9713c80b5a1f30aa025d5f612d6b94155c->leave($__internal_737657a392bec0cdfa1708f8705a9d9713c80b5a1f30aa025d5f612d6b94155c_prof);

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
