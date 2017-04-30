<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b166d8470f6d5010a424c75791e5682ee778b793d4b81f7ed6bd08467cf7e988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd07ad10a090449aabd5a95346c6744c7205c0bd77a947661355e1fc9f18c350 = $this->env->getExtension("native_profiler");
        $__internal_dd07ad10a090449aabd5a95346c6744c7205c0bd77a947661355e1fc9f18c350->enter($__internal_dd07ad10a090449aabd5a95346c6744c7205c0bd77a947661355e1fc9f18c350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd07ad10a090449aabd5a95346c6744c7205c0bd77a947661355e1fc9f18c350->leave($__internal_dd07ad10a090449aabd5a95346c6744c7205c0bd77a947661355e1fc9f18c350_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c6b7455f5fce05bd77f18ced4dbe0c2703d84bc54196b054ec5ede5df5706c9 = $this->env->getExtension("native_profiler");
        $__internal_8c6b7455f5fce05bd77f18ced4dbe0c2703d84bc54196b054ec5ede5df5706c9->enter($__internal_8c6b7455f5fce05bd77f18ced4dbe0c2703d84bc54196b054ec5ede5df5706c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c6b7455f5fce05bd77f18ced4dbe0c2703d84bc54196b054ec5ede5df5706c9->leave($__internal_8c6b7455f5fce05bd77f18ced4dbe0c2703d84bc54196b054ec5ede5df5706c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c940702d22e3f6d7fe639f3fa4be985390b49d4a260f2afde50e7b24f734a25b = $this->env->getExtension("native_profiler");
        $__internal_c940702d22e3f6d7fe639f3fa4be985390b49d4a260f2afde50e7b24f734a25b->enter($__internal_c940702d22e3f6d7fe639f3fa4be985390b49d4a260f2afde50e7b24f734a25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c940702d22e3f6d7fe639f3fa4be985390b49d4a260f2afde50e7b24f734a25b->leave($__internal_c940702d22e3f6d7fe639f3fa4be985390b49d4a260f2afde50e7b24f734a25b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1714d6ec40b23e91d9fb11f1299ba7a897684bfee5f39942e3edbe4ca89ae6bd = $this->env->getExtension("native_profiler");
        $__internal_1714d6ec40b23e91d9fb11f1299ba7a897684bfee5f39942e3edbe4ca89ae6bd->enter($__internal_1714d6ec40b23e91d9fb11f1299ba7a897684bfee5f39942e3edbe4ca89ae6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1714d6ec40b23e91d9fb11f1299ba7a897684bfee5f39942e3edbe4ca89ae6bd->leave($__internal_1714d6ec40b23e91d9fb11f1299ba7a897684bfee5f39942e3edbe4ca89ae6bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
