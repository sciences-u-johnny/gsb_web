<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_26476d54f77fdf03010e60dc28fe11a43e78a9c1c7c5deab2d771d36ee591f89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_c3c6201d5a54d214ad1cacebefbb54e8a3acdfee99c8e268862459be73cc7c5b = $this->env->getExtension("native_profiler");
        $__internal_c3c6201d5a54d214ad1cacebefbb54e8a3acdfee99c8e268862459be73cc7c5b->enter($__internal_c3c6201d5a54d214ad1cacebefbb54e8a3acdfee99c8e268862459be73cc7c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3c6201d5a54d214ad1cacebefbb54e8a3acdfee99c8e268862459be73cc7c5b->leave($__internal_c3c6201d5a54d214ad1cacebefbb54e8a3acdfee99c8e268862459be73cc7c5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e7668b919396a797e4144afbb9c2b54c1450da8dfacac090fbba2281f8bc0e6 = $this->env->getExtension("native_profiler");
        $__internal_0e7668b919396a797e4144afbb9c2b54c1450da8dfacac090fbba2281f8bc0e6->enter($__internal_0e7668b919396a797e4144afbb9c2b54c1450da8dfacac090fbba2281f8bc0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0e7668b919396a797e4144afbb9c2b54c1450da8dfacac090fbba2281f8bc0e6->leave($__internal_0e7668b919396a797e4144afbb9c2b54c1450da8dfacac090fbba2281f8bc0e6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25dd15a6bb1065a2eff7cfc7386edbc570181c3f316afd9b9accad5157505781 = $this->env->getExtension("native_profiler");
        $__internal_25dd15a6bb1065a2eff7cfc7386edbc570181c3f316afd9b9accad5157505781->enter($__internal_25dd15a6bb1065a2eff7cfc7386edbc570181c3f316afd9b9accad5157505781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_25dd15a6bb1065a2eff7cfc7386edbc570181c3f316afd9b9accad5157505781->leave($__internal_25dd15a6bb1065a2eff7cfc7386edbc570181c3f316afd9b9accad5157505781_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa9aa60e8c988404ce5992dcb133baa511e49e73ce58c85eb9b48c0469143cd1 = $this->env->getExtension("native_profiler");
        $__internal_fa9aa60e8c988404ce5992dcb133baa511e49e73ce58c85eb9b48c0469143cd1->enter($__internal_fa9aa60e8c988404ce5992dcb133baa511e49e73ce58c85eb9b48c0469143cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fa9aa60e8c988404ce5992dcb133baa511e49e73ce58c85eb9b48c0469143cd1->leave($__internal_fa9aa60e8c988404ce5992dcb133baa511e49e73ce58c85eb9b48c0469143cd1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
