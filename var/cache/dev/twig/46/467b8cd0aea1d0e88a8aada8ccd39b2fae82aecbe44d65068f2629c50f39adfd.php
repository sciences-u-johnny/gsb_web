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
        $__internal_7179aded946050f1b2ef4386a8c40c759ac237909ef07f23958e5a87417ce588 = $this->env->getExtension("native_profiler");
        $__internal_7179aded946050f1b2ef4386a8c40c759ac237909ef07f23958e5a87417ce588->enter($__internal_7179aded946050f1b2ef4386a8c40c759ac237909ef07f23958e5a87417ce588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7179aded946050f1b2ef4386a8c40c759ac237909ef07f23958e5a87417ce588->leave($__internal_7179aded946050f1b2ef4386a8c40c759ac237909ef07f23958e5a87417ce588_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7084509d8aa35f164ad5d6fd5e2c9fa86ec0349d31d2d050f18200d34a0cf9c7 = $this->env->getExtension("native_profiler");
        $__internal_7084509d8aa35f164ad5d6fd5e2c9fa86ec0349d31d2d050f18200d34a0cf9c7->enter($__internal_7084509d8aa35f164ad5d6fd5e2c9fa86ec0349d31d2d050f18200d34a0cf9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7084509d8aa35f164ad5d6fd5e2c9fa86ec0349d31d2d050f18200d34a0cf9c7->leave($__internal_7084509d8aa35f164ad5d6fd5e2c9fa86ec0349d31d2d050f18200d34a0cf9c7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5bb415ffc0ceb5c31d07c32120b4ba3dd715510034cdd7de41fc30d41830242c = $this->env->getExtension("native_profiler");
        $__internal_5bb415ffc0ceb5c31d07c32120b4ba3dd715510034cdd7de41fc30d41830242c->enter($__internal_5bb415ffc0ceb5c31d07c32120b4ba3dd715510034cdd7de41fc30d41830242c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5bb415ffc0ceb5c31d07c32120b4ba3dd715510034cdd7de41fc30d41830242c->leave($__internal_5bb415ffc0ceb5c31d07c32120b4ba3dd715510034cdd7de41fc30d41830242c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ae660ddebe7b2f22d0a30df26f083f27c4a95aceab49454c01e4042138cb3d1 = $this->env->getExtension("native_profiler");
        $__internal_5ae660ddebe7b2f22d0a30df26f083f27c4a95aceab49454c01e4042138cb3d1->enter($__internal_5ae660ddebe7b2f22d0a30df26f083f27c4a95aceab49454c01e4042138cb3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5ae660ddebe7b2f22d0a30df26f083f27c4a95aceab49454c01e4042138cb3d1->leave($__internal_5ae660ddebe7b2f22d0a30df26f083f27c4a95aceab49454c01e4042138cb3d1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d24e8d5b1a68f4a50f0897e296025d5397ecf241d5d234f227ac3993dceb96da = $this->env->getExtension("native_profiler");
        $__internal_d24e8d5b1a68f4a50f0897e296025d5397ecf241d5d234f227ac3993dceb96da->enter($__internal_d24e8d5b1a68f4a50f0897e296025d5397ecf241d5d234f227ac3993dceb96da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d24e8d5b1a68f4a50f0897e296025d5397ecf241d5d234f227ac3993dceb96da->leave($__internal_d24e8d5b1a68f4a50f0897e296025d5397ecf241d5d234f227ac3993dceb96da_prof);

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
