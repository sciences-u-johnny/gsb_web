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
        $__internal_262b2d8004e8ac00407f34e9c44c2246d4886b16e6e069ec0b24ab3ff7e78958 = $this->env->getExtension("native_profiler");
        $__internal_262b2d8004e8ac00407f34e9c44c2246d4886b16e6e069ec0b24ab3ff7e78958->enter($__internal_262b2d8004e8ac00407f34e9c44c2246d4886b16e6e069ec0b24ab3ff7e78958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_262b2d8004e8ac00407f34e9c44c2246d4886b16e6e069ec0b24ab3ff7e78958->leave($__internal_262b2d8004e8ac00407f34e9c44c2246d4886b16e6e069ec0b24ab3ff7e78958_prof);

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