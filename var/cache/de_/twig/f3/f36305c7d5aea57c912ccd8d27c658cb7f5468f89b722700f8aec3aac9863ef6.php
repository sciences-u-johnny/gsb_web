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
        $__internal_8585a62859c4c9be8d0ca194730c7503bb8b70e11160068d48519471c062397e = $this->env->getExtension("native_profiler");
        $__internal_8585a62859c4c9be8d0ca194730c7503bb8b70e11160068d48519471c062397e->enter($__internal_8585a62859c4c9be8d0ca194730c7503bb8b70e11160068d48519471c062397e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8585a62859c4c9be8d0ca194730c7503bb8b70e11160068d48519471c062397e->leave($__internal_8585a62859c4c9be8d0ca194730c7503bb8b70e11160068d48519471c062397e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cfec56fb123e9fc904216e75aa9704eac1382cf4bc0c08dfb5c5592592dc40ce = $this->env->getExtension("native_profiler");
        $__internal_cfec56fb123e9fc904216e75aa9704eac1382cf4bc0c08dfb5c5592592dc40ce->enter($__internal_cfec56fb123e9fc904216e75aa9704eac1382cf4bc0c08dfb5c5592592dc40ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cfec56fb123e9fc904216e75aa9704eac1382cf4bc0c08dfb5c5592592dc40ce->leave($__internal_cfec56fb123e9fc904216e75aa9704eac1382cf4bc0c08dfb5c5592592dc40ce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab1d3e7cf3d1e524ad02e7c7aaeb7d5f0b4e68a53099ad3384ffa6b1ada392a1 = $this->env->getExtension("native_profiler");
        $__internal_ab1d3e7cf3d1e524ad02e7c7aaeb7d5f0b4e68a53099ad3384ffa6b1ada392a1->enter($__internal_ab1d3e7cf3d1e524ad02e7c7aaeb7d5f0b4e68a53099ad3384ffa6b1ada392a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab1d3e7cf3d1e524ad02e7c7aaeb7d5f0b4e68a53099ad3384ffa6b1ada392a1->leave($__internal_ab1d3e7cf3d1e524ad02e7c7aaeb7d5f0b4e68a53099ad3384ffa6b1ada392a1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc3d70d9ede9de11b28fc49cb4d606d66501b3ada8a7c216cc73e93a915ef008 = $this->env->getExtension("native_profiler");
        $__internal_fc3d70d9ede9de11b28fc49cb4d606d66501b3ada8a7c216cc73e93a915ef008->enter($__internal_fc3d70d9ede9de11b28fc49cb4d606d66501b3ada8a7c216cc73e93a915ef008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fc3d70d9ede9de11b28fc49cb4d606d66501b3ada8a7c216cc73e93a915ef008->leave($__internal_fc3d70d9ede9de11b28fc49cb4d606d66501b3ada8a7c216cc73e93a915ef008_prof);

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
