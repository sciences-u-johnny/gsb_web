<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_4f111cb5728830f96bfea5becd0dbcfb0a85c4fc6084afabc550848fbac45c93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_128840e1ed5cd6bdd4589640bd0e2e5b9453d0a7826c5cfcfb199f9121662983 = $this->env->getExtension("native_profiler");
        $__internal_128840e1ed5cd6bdd4589640bd0e2e5b9453d0a7826c5cfcfb199f9121662983->enter($__internal_128840e1ed5cd6bdd4589640bd0e2e5b9453d0a7826c5cfcfb199f9121662983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_128840e1ed5cd6bdd4589640bd0e2e5b9453d0a7826c5cfcfb199f9121662983->leave($__internal_128840e1ed5cd6bdd4589640bd0e2e5b9453d0a7826c5cfcfb199f9121662983_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
