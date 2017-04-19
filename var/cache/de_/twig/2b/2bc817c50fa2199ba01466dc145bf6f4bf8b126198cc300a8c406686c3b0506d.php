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
        $__internal_9efae9d3e4c168d897212c12de905b6398054003ed2a091c2546773a1555758d = $this->env->getExtension("native_profiler");
        $__internal_9efae9d3e4c168d897212c12de905b6398054003ed2a091c2546773a1555758d->enter($__internal_9efae9d3e4c168d897212c12de905b6398054003ed2a091c2546773a1555758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9efae9d3e4c168d897212c12de905b6398054003ed2a091c2546773a1555758d->leave($__internal_9efae9d3e4c168d897212c12de905b6398054003ed2a091c2546773a1555758d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_368f23d6f8491635691110609c4310a58d2ef4e650900a99221a3669d34d404d = $this->env->getExtension("native_profiler");
        $__internal_368f23d6f8491635691110609c4310a58d2ef4e650900a99221a3669d34d404d->enter($__internal_368f23d6f8491635691110609c4310a58d2ef4e650900a99221a3669d34d404d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_368f23d6f8491635691110609c4310a58d2ef4e650900a99221a3669d34d404d->leave($__internal_368f23d6f8491635691110609c4310a58d2ef4e650900a99221a3669d34d404d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3dc1886201a2f0198d83565774d7e23703cec05f223b809f2d382f7017cd071 = $this->env->getExtension("native_profiler");
        $__internal_c3dc1886201a2f0198d83565774d7e23703cec05f223b809f2d382f7017cd071->enter($__internal_c3dc1886201a2f0198d83565774d7e23703cec05f223b809f2d382f7017cd071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c3dc1886201a2f0198d83565774d7e23703cec05f223b809f2d382f7017cd071->leave($__internal_c3dc1886201a2f0198d83565774d7e23703cec05f223b809f2d382f7017cd071_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bba1a9470e414614ed9f4e58fbed37e493924493aaec3e5002b5dff7a5fbcf0a = $this->env->getExtension("native_profiler");
        $__internal_bba1a9470e414614ed9f4e58fbed37e493924493aaec3e5002b5dff7a5fbcf0a->enter($__internal_bba1a9470e414614ed9f4e58fbed37e493924493aaec3e5002b5dff7a5fbcf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bba1a9470e414614ed9f4e58fbed37e493924493aaec3e5002b5dff7a5fbcf0a->leave($__internal_bba1a9470e414614ed9f4e58fbed37e493924493aaec3e5002b5dff7a5fbcf0a_prof);

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
