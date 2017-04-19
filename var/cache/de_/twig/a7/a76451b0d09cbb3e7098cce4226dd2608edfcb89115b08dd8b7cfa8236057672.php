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
        $__internal_1acd2b1df33ea9164c062426ea3b7aec426c13a4a95fe8f24edad263c2982890 = $this->env->getExtension("native_profiler");
        $__internal_1acd2b1df33ea9164c062426ea3b7aec426c13a4a95fe8f24edad263c2982890->enter($__internal_1acd2b1df33ea9164c062426ea3b7aec426c13a4a95fe8f24edad263c2982890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1acd2b1df33ea9164c062426ea3b7aec426c13a4a95fe8f24edad263c2982890->leave($__internal_1acd2b1df33ea9164c062426ea3b7aec426c13a4a95fe8f24edad263c2982890_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dca24868bbc3ae324231ec01a67fd33a6e705111985f508b064518e91a6514cd = $this->env->getExtension("native_profiler");
        $__internal_dca24868bbc3ae324231ec01a67fd33a6e705111985f508b064518e91a6514cd->enter($__internal_dca24868bbc3ae324231ec01a67fd33a6e705111985f508b064518e91a6514cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dca24868bbc3ae324231ec01a67fd33a6e705111985f508b064518e91a6514cd->leave($__internal_dca24868bbc3ae324231ec01a67fd33a6e705111985f508b064518e91a6514cd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a96e6cee645c158403b1ea3e6f6cf57bbe3195218df683f816075195a67acedd = $this->env->getExtension("native_profiler");
        $__internal_a96e6cee645c158403b1ea3e6f6cf57bbe3195218df683f816075195a67acedd->enter($__internal_a96e6cee645c158403b1ea3e6f6cf57bbe3195218df683f816075195a67acedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a96e6cee645c158403b1ea3e6f6cf57bbe3195218df683f816075195a67acedd->leave($__internal_a96e6cee645c158403b1ea3e6f6cf57bbe3195218df683f816075195a67acedd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_37af0d438b0f1cac4f296233080cb405843dc2f3d37c6718a992e682d37172c7 = $this->env->getExtension("native_profiler");
        $__internal_37af0d438b0f1cac4f296233080cb405843dc2f3d37c6718a992e682d37172c7->enter($__internal_37af0d438b0f1cac4f296233080cb405843dc2f3d37c6718a992e682d37172c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37af0d438b0f1cac4f296233080cb405843dc2f3d37c6718a992e682d37172c7->leave($__internal_37af0d438b0f1cac4f296233080cb405843dc2f3d37c6718a992e682d37172c7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7df37f24c095d598e02370e4b32be5947e41185e18df50ea6aa8922e894acedc = $this->env->getExtension("native_profiler");
        $__internal_7df37f24c095d598e02370e4b32be5947e41185e18df50ea6aa8922e894acedc->enter($__internal_7df37f24c095d598e02370e4b32be5947e41185e18df50ea6aa8922e894acedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7df37f24c095d598e02370e4b32be5947e41185e18df50ea6aa8922e894acedc->leave($__internal_7df37f24c095d598e02370e4b32be5947e41185e18df50ea6aa8922e894acedc_prof);

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
