<?php

/* ::base.html.twig */
class __TwigTemplate_ff3ea6a78dd47a2b8a2e0a4aeea534bbb2283d207149f32912dafff51d038872 extends Twig_Template
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
        $__internal_c598e7d9fdfb7f1825d1aba73eae10148aa5f97dc75b99db67f4ae98941eea7a = $this->env->getExtension("native_profiler");
        $__internal_c598e7d9fdfb7f1825d1aba73eae10148aa5f97dc75b99db67f4ae98941eea7a->enter($__internal_c598e7d9fdfb7f1825d1aba73eae10148aa5f97dc75b99db67f4ae98941eea7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c598e7d9fdfb7f1825d1aba73eae10148aa5f97dc75b99db67f4ae98941eea7a->leave($__internal_c598e7d9fdfb7f1825d1aba73eae10148aa5f97dc75b99db67f4ae98941eea7a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e240fa02b9d4c490c5cd82b9b2f32866cfb38a35faeb19b46d8dbd1eced300b5 = $this->env->getExtension("native_profiler");
        $__internal_e240fa02b9d4c490c5cd82b9b2f32866cfb38a35faeb19b46d8dbd1eced300b5->enter($__internal_e240fa02b9d4c490c5cd82b9b2f32866cfb38a35faeb19b46d8dbd1eced300b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e240fa02b9d4c490c5cd82b9b2f32866cfb38a35faeb19b46d8dbd1eced300b5->leave($__internal_e240fa02b9d4c490c5cd82b9b2f32866cfb38a35faeb19b46d8dbd1eced300b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b3e5b0ae416a478d9860800d0ff4febd97e025e1599d940590b0e0bf19f2f55 = $this->env->getExtension("native_profiler");
        $__internal_8b3e5b0ae416a478d9860800d0ff4febd97e025e1599d940590b0e0bf19f2f55->enter($__internal_8b3e5b0ae416a478d9860800d0ff4febd97e025e1599d940590b0e0bf19f2f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8b3e5b0ae416a478d9860800d0ff4febd97e025e1599d940590b0e0bf19f2f55->leave($__internal_8b3e5b0ae416a478d9860800d0ff4febd97e025e1599d940590b0e0bf19f2f55_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4c044ffc75ae8852c6cf25bf8d8e1bf427965c98ad93783a32d6fe5f592c70e = $this->env->getExtension("native_profiler");
        $__internal_b4c044ffc75ae8852c6cf25bf8d8e1bf427965c98ad93783a32d6fe5f592c70e->enter($__internal_b4c044ffc75ae8852c6cf25bf8d8e1bf427965c98ad93783a32d6fe5f592c70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b4c044ffc75ae8852c6cf25bf8d8e1bf427965c98ad93783a32d6fe5f592c70e->leave($__internal_b4c044ffc75ae8852c6cf25bf8d8e1bf427965c98ad93783a32d6fe5f592c70e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35c8d02a812b873b9b2982224d0899916c1ed5b313c9d05d348ed42619b8bb54 = $this->env->getExtension("native_profiler");
        $__internal_35c8d02a812b873b9b2982224d0899916c1ed5b313c9d05d348ed42619b8bb54->enter($__internal_35c8d02a812b873b9b2982224d0899916c1ed5b313c9d05d348ed42619b8bb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_35c8d02a812b873b9b2982224d0899916c1ed5b313c9d05d348ed42619b8bb54->leave($__internal_35c8d02a812b873b9b2982224d0899916c1ed5b313c9d05d348ed42619b8bb54_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
