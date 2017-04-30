<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f9ea484f43f6f7a0a1dbf084a0aa94b07743862375996d4e5dbea5c7100b898a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_091c9e16a960ac8a2cd7027912c9f49c7586860a533e55c619e5f127d202de7c = $this->env->getExtension("native_profiler");
        $__internal_091c9e16a960ac8a2cd7027912c9f49c7586860a533e55c619e5f127d202de7c->enter($__internal_091c9e16a960ac8a2cd7027912c9f49c7586860a533e55c619e5f127d202de7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_091c9e16a960ac8a2cd7027912c9f49c7586860a533e55c619e5f127d202de7c->leave($__internal_091c9e16a960ac8a2cd7027912c9f49c7586860a533e55c619e5f127d202de7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_193e63ffed145cf9f89aef2aece9e9b6065edc66e6d859e41eac250041496c38 = $this->env->getExtension("native_profiler");
        $__internal_193e63ffed145cf9f89aef2aece9e9b6065edc66e6d859e41eac250041496c38->enter($__internal_193e63ffed145cf9f89aef2aece9e9b6065edc66e6d859e41eac250041496c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_193e63ffed145cf9f89aef2aece9e9b6065edc66e6d859e41eac250041496c38->leave($__internal_193e63ffed145cf9f89aef2aece9e9b6065edc66e6d859e41eac250041496c38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Group/list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
