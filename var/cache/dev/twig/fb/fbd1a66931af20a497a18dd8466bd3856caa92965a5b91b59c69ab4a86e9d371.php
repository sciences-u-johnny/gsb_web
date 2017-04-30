<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_eafdb6234d63d60515067aa56db75ad5fe60bce8824112584cf240e486f8c237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_ce6cbcf6dde978608adc3183bc7868f0fc54f934cb9a9811605648bfcdb7dc30 = $this->env->getExtension("native_profiler");
        $__internal_ce6cbcf6dde978608adc3183bc7868f0fc54f934cb9a9811605648bfcdb7dc30->enter($__internal_ce6cbcf6dde978608adc3183bc7868f0fc54f934cb9a9811605648bfcdb7dc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce6cbcf6dde978608adc3183bc7868f0fc54f934cb9a9811605648bfcdb7dc30->leave($__internal_ce6cbcf6dde978608adc3183bc7868f0fc54f934cb9a9811605648bfcdb7dc30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_515db4a106c29e3abe7975d055856ff3287a71b6a79a1491ef3714aca1ed61af = $this->env->getExtension("native_profiler");
        $__internal_515db4a106c29e3abe7975d055856ff3287a71b6a79a1491ef3714aca1ed61af->enter($__internal_515db4a106c29e3abe7975d055856ff3287a71b6a79a1491ef3714aca1ed61af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_515db4a106c29e3abe7975d055856ff3287a71b6a79a1491ef3714aca1ed61af->leave($__internal_515db4a106c29e3abe7975d055856ff3287a71b6a79a1491ef3714aca1ed61af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
