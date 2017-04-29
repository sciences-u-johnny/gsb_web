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
        $__internal_f0d1237cb99d57776bbb516e2e343f46fbd61a5ca7d59bc77e17ba89b7c91c3e = $this->env->getExtension("native_profiler");
        $__internal_f0d1237cb99d57776bbb516e2e343f46fbd61a5ca7d59bc77e17ba89b7c91c3e->enter($__internal_f0d1237cb99d57776bbb516e2e343f46fbd61a5ca7d59bc77e17ba89b7c91c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f0d1237cb99d57776bbb516e2e343f46fbd61a5ca7d59bc77e17ba89b7c91c3e->leave($__internal_f0d1237cb99d57776bbb516e2e343f46fbd61a5ca7d59bc77e17ba89b7c91c3e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df75290f9d90b0f1199641292b97d7d7cd8ca0a261724e6415c581582df694b2 = $this->env->getExtension("native_profiler");
        $__internal_df75290f9d90b0f1199641292b97d7d7cd8ca0a261724e6415c581582df694b2->enter($__internal_df75290f9d90b0f1199641292b97d7d7cd8ca0a261724e6415c581582df694b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_df75290f9d90b0f1199641292b97d7d7cd8ca0a261724e6415c581582df694b2->leave($__internal_df75290f9d90b0f1199641292b97d7d7cd8ca0a261724e6415c581582df694b2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a42aa85d19caf784560bfef207c4f23b02d378bd4a894c013f82a5ae971f77a = $this->env->getExtension("native_profiler");
        $__internal_1a42aa85d19caf784560bfef207c4f23b02d378bd4a894c013f82a5ae971f77a->enter($__internal_1a42aa85d19caf784560bfef207c4f23b02d378bd4a894c013f82a5ae971f77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1a42aa85d19caf784560bfef207c4f23b02d378bd4a894c013f82a5ae971f77a->leave($__internal_1a42aa85d19caf784560bfef207c4f23b02d378bd4a894c013f82a5ae971f77a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bca0d2ebc7e387b068a87551260b54e60a91ef61cd9cf192d09dd5b89619243d = $this->env->getExtension("native_profiler");
        $__internal_bca0d2ebc7e387b068a87551260b54e60a91ef61cd9cf192d09dd5b89619243d->enter($__internal_bca0d2ebc7e387b068a87551260b54e60a91ef61cd9cf192d09dd5b89619243d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bca0d2ebc7e387b068a87551260b54e60a91ef61cd9cf192d09dd5b89619243d->leave($__internal_bca0d2ebc7e387b068a87551260b54e60a91ef61cd9cf192d09dd5b89619243d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_051251cf5737c18971080b3397d507f9b4d2de5c8a072071bb7962b9d9806ade = $this->env->getExtension("native_profiler");
        $__internal_051251cf5737c18971080b3397d507f9b4d2de5c8a072071bb7962b9d9806ade->enter($__internal_051251cf5737c18971080b3397d507f9b4d2de5c8a072071bb7962b9d9806ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_051251cf5737c18971080b3397d507f9b4d2de5c8a072071bb7962b9d9806ade->leave($__internal_051251cf5737c18971080b3397d507f9b4d2de5c8a072071bb7962b9d9806ade_prof);

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
