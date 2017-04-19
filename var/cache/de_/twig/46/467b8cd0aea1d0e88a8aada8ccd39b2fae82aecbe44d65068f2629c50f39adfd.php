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
        $__internal_6075e1ffcdd215f5c757299bac1bf7041263cfc0ab874472cd331fc7a6dd9846 = $this->env->getExtension("native_profiler");
        $__internal_6075e1ffcdd215f5c757299bac1bf7041263cfc0ab874472cd331fc7a6dd9846->enter($__internal_6075e1ffcdd215f5c757299bac1bf7041263cfc0ab874472cd331fc7a6dd9846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6075e1ffcdd215f5c757299bac1bf7041263cfc0ab874472cd331fc7a6dd9846->leave($__internal_6075e1ffcdd215f5c757299bac1bf7041263cfc0ab874472cd331fc7a6dd9846_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_66b79ac39513ed1c49d1ffda91dce54a210175659ad02a9579027ff5f7d48118 = $this->env->getExtension("native_profiler");
        $__internal_66b79ac39513ed1c49d1ffda91dce54a210175659ad02a9579027ff5f7d48118->enter($__internal_66b79ac39513ed1c49d1ffda91dce54a210175659ad02a9579027ff5f7d48118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_66b79ac39513ed1c49d1ffda91dce54a210175659ad02a9579027ff5f7d48118->leave($__internal_66b79ac39513ed1c49d1ffda91dce54a210175659ad02a9579027ff5f7d48118_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e452a5a211c2434cfad7086eda454c3309b87cc8b6ff7f522118178f3134e87 = $this->env->getExtension("native_profiler");
        $__internal_7e452a5a211c2434cfad7086eda454c3309b87cc8b6ff7f522118178f3134e87->enter($__internal_7e452a5a211c2434cfad7086eda454c3309b87cc8b6ff7f522118178f3134e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7e452a5a211c2434cfad7086eda454c3309b87cc8b6ff7f522118178f3134e87->leave($__internal_7e452a5a211c2434cfad7086eda454c3309b87cc8b6ff7f522118178f3134e87_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bbae330ec0ef316c7fcee3fe96ba1c31fe7d4bed080ff0101bc3e8b6d89ddb5 = $this->env->getExtension("native_profiler");
        $__internal_9bbae330ec0ef316c7fcee3fe96ba1c31fe7d4bed080ff0101bc3e8b6d89ddb5->enter($__internal_9bbae330ec0ef316c7fcee3fe96ba1c31fe7d4bed080ff0101bc3e8b6d89ddb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9bbae330ec0ef316c7fcee3fe96ba1c31fe7d4bed080ff0101bc3e8b6d89ddb5->leave($__internal_9bbae330ec0ef316c7fcee3fe96ba1c31fe7d4bed080ff0101bc3e8b6d89ddb5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc4cc34505c72c542ffa0de77ffebe668f9e9be5503c71427f669ce89a5dd54c = $this->env->getExtension("native_profiler");
        $__internal_dc4cc34505c72c542ffa0de77ffebe668f9e9be5503c71427f669ce89a5dd54c->enter($__internal_dc4cc34505c72c542ffa0de77ffebe668f9e9be5503c71427f669ce89a5dd54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dc4cc34505c72c542ffa0de77ffebe668f9e9be5503c71427f669ce89a5dd54c->leave($__internal_dc4cc34505c72c542ffa0de77ffebe668f9e9be5503c71427f669ce89a5dd54c_prof);

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
