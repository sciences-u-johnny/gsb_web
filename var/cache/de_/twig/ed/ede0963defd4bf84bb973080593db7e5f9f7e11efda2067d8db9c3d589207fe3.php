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
        $__internal_49624561ab2cf44ec45a22e7f45bd1e0a5bcd802d8cf24c50179874263ca2ef5 = $this->env->getExtension("native_profiler");
        $__internal_49624561ab2cf44ec45a22e7f45bd1e0a5bcd802d8cf24c50179874263ca2ef5->enter($__internal_49624561ab2cf44ec45a22e7f45bd1e0a5bcd802d8cf24c50179874263ca2ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49624561ab2cf44ec45a22e7f45bd1e0a5bcd802d8cf24c50179874263ca2ef5->leave($__internal_49624561ab2cf44ec45a22e7f45bd1e0a5bcd802d8cf24c50179874263ca2ef5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bce80e32c4b4ca326a371189d413cf1fb184dd06b701c7a79522544cea26b7c0 = $this->env->getExtension("native_profiler");
        $__internal_bce80e32c4b4ca326a371189d413cf1fb184dd06b701c7a79522544cea26b7c0->enter($__internal_bce80e32c4b4ca326a371189d413cf1fb184dd06b701c7a79522544cea26b7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bce80e32c4b4ca326a371189d413cf1fb184dd06b701c7a79522544cea26b7c0->leave($__internal_bce80e32c4b4ca326a371189d413cf1fb184dd06b701c7a79522544cea26b7c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6235e3262b5d7d6867efb0744bb548f99f6e88e3c6814c2d6adf64d21a19456 = $this->env->getExtension("native_profiler");
        $__internal_c6235e3262b5d7d6867efb0744bb548f99f6e88e3c6814c2d6adf64d21a19456->enter($__internal_c6235e3262b5d7d6867efb0744bb548f99f6e88e3c6814c2d6adf64d21a19456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c6235e3262b5d7d6867efb0744bb548f99f6e88e3c6814c2d6adf64d21a19456->leave($__internal_c6235e3262b5d7d6867efb0744bb548f99f6e88e3c6814c2d6adf64d21a19456_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6a835044c90d7cb484930565b7ef6df83cb3109a66fa6ba98a2a7a5023546d8 = $this->env->getExtension("native_profiler");
        $__internal_e6a835044c90d7cb484930565b7ef6df83cb3109a66fa6ba98a2a7a5023546d8->enter($__internal_e6a835044c90d7cb484930565b7ef6df83cb3109a66fa6ba98a2a7a5023546d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e6a835044c90d7cb484930565b7ef6df83cb3109a66fa6ba98a2a7a5023546d8->leave($__internal_e6a835044c90d7cb484930565b7ef6df83cb3109a66fa6ba98a2a7a5023546d8_prof);

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
