<?php

/* base.html.twig */
class __TwigTemplate_ea75ed10c4c53d687b3ba81846d4c0a5fc6f76f6a700609d267aefbc85c57a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a5c7bc3f314313ec8b486ef029205a924bca9085c70a3d345ec0fc3a711b7ad = $this->env->getExtension("native_profiler");
        $__internal_6a5c7bc3f314313ec8b486ef029205a924bca9085c70a3d345ec0fc3a711b7ad->enter($__internal_6a5c7bc3f314313ec8b486ef029205a924bca9085c70a3d345ec0fc3a711b7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6a5c7bc3f314313ec8b486ef029205a924bca9085c70a3d345ec0fc3a711b7ad->leave($__internal_6a5c7bc3f314313ec8b486ef029205a924bca9085c70a3d345ec0fc3a711b7ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_55c74b32fa35eed67424902925313b66aa15d739a85f4d2474c1c2698483be3c = $this->env->getExtension("native_profiler");
        $__internal_55c74b32fa35eed67424902925313b66aa15d739a85f4d2474c1c2698483be3c->enter($__internal_55c74b32fa35eed67424902925313b66aa15d739a85f4d2474c1c2698483be3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_55c74b32fa35eed67424902925313b66aa15d739a85f4d2474c1c2698483be3c->leave($__internal_55c74b32fa35eed67424902925313b66aa15d739a85f4d2474c1c2698483be3c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a97087933fa4903fab622e2f0f88b1307cd2a2115f165a0b109e0f7b6746b4ac = $this->env->getExtension("native_profiler");
        $__internal_a97087933fa4903fab622e2f0f88b1307cd2a2115f165a0b109e0f7b6746b4ac->enter($__internal_a97087933fa4903fab622e2f0f88b1307cd2a2115f165a0b109e0f7b6746b4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a97087933fa4903fab622e2f0f88b1307cd2a2115f165a0b109e0f7b6746b4ac->leave($__internal_a97087933fa4903fab622e2f0f88b1307cd2a2115f165a0b109e0f7b6746b4ac_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9134bfabf14a51063749d69ab1e627c0e5e7252b691332b7c4331fa737006de4 = $this->env->getExtension("native_profiler");
        $__internal_9134bfabf14a51063749d69ab1e627c0e5e7252b691332b7c4331fa737006de4->enter($__internal_9134bfabf14a51063749d69ab1e627c0e5e7252b691332b7c4331fa737006de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9134bfabf14a51063749d69ab1e627c0e5e7252b691332b7c4331fa737006de4->leave($__internal_9134bfabf14a51063749d69ab1e627c0e5e7252b691332b7c4331fa737006de4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf436762fa3be5fe2eef969c9546fd3fec16fca6a8327d4c26d0a5e5bdddc6dd = $this->env->getExtension("native_profiler");
        $__internal_bf436762fa3be5fe2eef969c9546fd3fec16fca6a8327d4c26d0a5e5bdddc6dd->enter($__internal_bf436762fa3be5fe2eef969c9546fd3fec16fca6a8327d4c26d0a5e5bdddc6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bf436762fa3be5fe2eef969c9546fd3fec16fca6a8327d4c26d0a5e5bdddc6dd->leave($__internal_bf436762fa3be5fe2eef969c9546fd3fec16fca6a8327d4c26d0a5e5bdddc6dd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
