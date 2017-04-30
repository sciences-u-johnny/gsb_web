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
        $__internal_febc12b74bf4bf0a4294411b31c37c040220c0586710a480bf46cbccc249e7c2 = $this->env->getExtension("native_profiler");
        $__internal_febc12b74bf4bf0a4294411b31c37c040220c0586710a480bf46cbccc249e7c2->enter($__internal_febc12b74bf4bf0a4294411b31c37c040220c0586710a480bf46cbccc249e7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_febc12b74bf4bf0a4294411b31c37c040220c0586710a480bf46cbccc249e7c2->leave($__internal_febc12b74bf4bf0a4294411b31c37c040220c0586710a480bf46cbccc249e7c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2a5ce7440f55077bbf2cac35695a2faa50685f9448241377d16a594aa63f08b = $this->env->getExtension("native_profiler");
        $__internal_a2a5ce7440f55077bbf2cac35695a2faa50685f9448241377d16a594aa63f08b->enter($__internal_a2a5ce7440f55077bbf2cac35695a2faa50685f9448241377d16a594aa63f08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a2a5ce7440f55077bbf2cac35695a2faa50685f9448241377d16a594aa63f08b->leave($__internal_a2a5ce7440f55077bbf2cac35695a2faa50685f9448241377d16a594aa63f08b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2666bf135c37382b3ae92b6070ea8d1359bf6d161dd51067a95ed8c366c2cc9 = $this->env->getExtension("native_profiler");
        $__internal_b2666bf135c37382b3ae92b6070ea8d1359bf6d161dd51067a95ed8c366c2cc9->enter($__internal_b2666bf135c37382b3ae92b6070ea8d1359bf6d161dd51067a95ed8c366c2cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b2666bf135c37382b3ae92b6070ea8d1359bf6d161dd51067a95ed8c366c2cc9->leave($__internal_b2666bf135c37382b3ae92b6070ea8d1359bf6d161dd51067a95ed8c366c2cc9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b6080131931b9f22debf779450c3bc85a5929b5f24cb28d6a459cb4c1ac8cae = $this->env->getExtension("native_profiler");
        $__internal_6b6080131931b9f22debf779450c3bc85a5929b5f24cb28d6a459cb4c1ac8cae->enter($__internal_6b6080131931b9f22debf779450c3bc85a5929b5f24cb28d6a459cb4c1ac8cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6b6080131931b9f22debf779450c3bc85a5929b5f24cb28d6a459cb4c1ac8cae->leave($__internal_6b6080131931b9f22debf779450c3bc85a5929b5f24cb28d6a459cb4c1ac8cae_prof);

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
