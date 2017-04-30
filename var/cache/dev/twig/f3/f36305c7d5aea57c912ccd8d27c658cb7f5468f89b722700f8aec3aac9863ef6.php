<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b741c863781a524d572b8ec49f659b59f3a06b58059189d8d4d386420b3b7b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_f7fd5e0ef1af5373a9de9892a6b6035771a2e188e51dfa7283c7ef276890ae13 = $this->env->getExtension("native_profiler");
        $__internal_f7fd5e0ef1af5373a9de9892a6b6035771a2e188e51dfa7283c7ef276890ae13->enter($__internal_f7fd5e0ef1af5373a9de9892a6b6035771a2e188e51dfa7283c7ef276890ae13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7fd5e0ef1af5373a9de9892a6b6035771a2e188e51dfa7283c7ef276890ae13->leave($__internal_f7fd5e0ef1af5373a9de9892a6b6035771a2e188e51dfa7283c7ef276890ae13_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07a55ee58efaa7123b2aab5769bf8e6dd749d9986e85e41ba7b0e80146cd7b6a = $this->env->getExtension("native_profiler");
        $__internal_07a55ee58efaa7123b2aab5769bf8e6dd749d9986e85e41ba7b0e80146cd7b6a->enter($__internal_07a55ee58efaa7123b2aab5769bf8e6dd749d9986e85e41ba7b0e80146cd7b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_07a55ee58efaa7123b2aab5769bf8e6dd749d9986e85e41ba7b0e80146cd7b6a->leave($__internal_07a55ee58efaa7123b2aab5769bf8e6dd749d9986e85e41ba7b0e80146cd7b6a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89aeb7e033236e40a18ee8cd03c267016375a83a117064ba0ce4cc4f5958e7d6 = $this->env->getExtension("native_profiler");
        $__internal_89aeb7e033236e40a18ee8cd03c267016375a83a117064ba0ce4cc4f5958e7d6->enter($__internal_89aeb7e033236e40a18ee8cd03c267016375a83a117064ba0ce4cc4f5958e7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_89aeb7e033236e40a18ee8cd03c267016375a83a117064ba0ce4cc4f5958e7d6->leave($__internal_89aeb7e033236e40a18ee8cd03c267016375a83a117064ba0ce4cc4f5958e7d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecc2485a6d1578f6d0f563cd67ae2e19ce5950dc2f054aa4ded65c4ee7e37641 = $this->env->getExtension("native_profiler");
        $__internal_ecc2485a6d1578f6d0f563cd67ae2e19ce5950dc2f054aa4ded65c4ee7e37641->enter($__internal_ecc2485a6d1578f6d0f563cd67ae2e19ce5950dc2f054aa4ded65c4ee7e37641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ecc2485a6d1578f6d0f563cd67ae2e19ce5950dc2f054aa4ded65c4ee7e37641->leave($__internal_ecc2485a6d1578f6d0f563cd67ae2e19ce5950dc2f054aa4ded65c4ee7e37641_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
