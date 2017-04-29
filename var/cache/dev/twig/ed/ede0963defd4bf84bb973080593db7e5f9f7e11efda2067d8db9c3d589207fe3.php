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
        $__internal_34666d9043aeefa6681c4b0aad79ed89fa12f83f1c4edafe2675578ec3220a19 = $this->env->getExtension("native_profiler");
        $__internal_34666d9043aeefa6681c4b0aad79ed89fa12f83f1c4edafe2675578ec3220a19->enter($__internal_34666d9043aeefa6681c4b0aad79ed89fa12f83f1c4edafe2675578ec3220a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34666d9043aeefa6681c4b0aad79ed89fa12f83f1c4edafe2675578ec3220a19->leave($__internal_34666d9043aeefa6681c4b0aad79ed89fa12f83f1c4edafe2675578ec3220a19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da06c1bd4f113169ca65b0cf6d7e1efa4bf866bcc09eef010457303845ec9477 = $this->env->getExtension("native_profiler");
        $__internal_da06c1bd4f113169ca65b0cf6d7e1efa4bf866bcc09eef010457303845ec9477->enter($__internal_da06c1bd4f113169ca65b0cf6d7e1efa4bf866bcc09eef010457303845ec9477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_da06c1bd4f113169ca65b0cf6d7e1efa4bf866bcc09eef010457303845ec9477->leave($__internal_da06c1bd4f113169ca65b0cf6d7e1efa4bf866bcc09eef010457303845ec9477_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e554ddbe92b94a0bd5df37f82c555fb081d3e859a155520be1a0a5d93a8d317 = $this->env->getExtension("native_profiler");
        $__internal_1e554ddbe92b94a0bd5df37f82c555fb081d3e859a155520be1a0a5d93a8d317->enter($__internal_1e554ddbe92b94a0bd5df37f82c555fb081d3e859a155520be1a0a5d93a8d317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1e554ddbe92b94a0bd5df37f82c555fb081d3e859a155520be1a0a5d93a8d317->leave($__internal_1e554ddbe92b94a0bd5df37f82c555fb081d3e859a155520be1a0a5d93a8d317_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e161eb9d64806bd1ee9820a6743e8fd33ddf88b56d35744e886f4ff34226f8b = $this->env->getExtension("native_profiler");
        $__internal_3e161eb9d64806bd1ee9820a6743e8fd33ddf88b56d35744e886f4ff34226f8b->enter($__internal_3e161eb9d64806bd1ee9820a6743e8fd33ddf88b56d35744e886f4ff34226f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3e161eb9d64806bd1ee9820a6743e8fd33ddf88b56d35744e886f4ff34226f8b->leave($__internal_3e161eb9d64806bd1ee9820a6743e8fd33ddf88b56d35744e886f4ff34226f8b_prof);

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
