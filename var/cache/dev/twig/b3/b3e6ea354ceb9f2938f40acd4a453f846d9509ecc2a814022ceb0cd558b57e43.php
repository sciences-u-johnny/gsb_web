<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d690b5e93a85fc5a1c1b664703eb30378c42e1b3f61b77eb76e6bfe8bf119c04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_641c2ed78f1c6d97d8a5aa5e48878940c16562e2e7bdfb7a5cab02a190619f48 = $this->env->getExtension("native_profiler");
        $__internal_641c2ed78f1c6d97d8a5aa5e48878940c16562e2e7bdfb7a5cab02a190619f48->enter($__internal_641c2ed78f1c6d97d8a5aa5e48878940c16562e2e7bdfb7a5cab02a190619f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_641c2ed78f1c6d97d8a5aa5e48878940c16562e2e7bdfb7a5cab02a190619f48->leave($__internal_641c2ed78f1c6d97d8a5aa5e48878940c16562e2e7bdfb7a5cab02a190619f48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2dcde14955843a44dbb55c1ef9355334f5c5bf5fb2bf7be22a19708561173695 = $this->env->getExtension("native_profiler");
        $__internal_2dcde14955843a44dbb55c1ef9355334f5c5bf5fb2bf7be22a19708561173695->enter($__internal_2dcde14955843a44dbb55c1ef9355334f5c5bf5fb2bf7be22a19708561173695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2dcde14955843a44dbb55c1ef9355334f5c5bf5fb2bf7be22a19708561173695->leave($__internal_2dcde14955843a44dbb55c1ef9355334f5c5bf5fb2bf7be22a19708561173695_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_645642984bd8a299d4cd7768c4356ae779289c4b425c3f4a28bd641e92ba2437 = $this->env->getExtension("native_profiler");
        $__internal_645642984bd8a299d4cd7768c4356ae779289c4b425c3f4a28bd641e92ba2437->enter($__internal_645642984bd8a299d4cd7768c4356ae779289c4b425c3f4a28bd641e92ba2437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_645642984bd8a299d4cd7768c4356ae779289c4b425c3f4a28bd641e92ba2437->leave($__internal_645642984bd8a299d4cd7768c4356ae779289c4b425c3f4a28bd641e92ba2437_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec4eb8893c6d4437fe620252430456cb8ed92443b735257324f0d83f6c038e92 = $this->env->getExtension("native_profiler");
        $__internal_ec4eb8893c6d4437fe620252430456cb8ed92443b735257324f0d83f6c038e92->enter($__internal_ec4eb8893c6d4437fe620252430456cb8ed92443b735257324f0d83f6c038e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ec4eb8893c6d4437fe620252430456cb8ed92443b735257324f0d83f6c038e92->leave($__internal_ec4eb8893c6d4437fe620252430456cb8ed92443b735257324f0d83f6c038e92_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
