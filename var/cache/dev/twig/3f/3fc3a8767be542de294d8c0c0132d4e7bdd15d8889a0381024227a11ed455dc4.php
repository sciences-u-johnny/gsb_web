<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_fc87178cadcbde4cf35fbe129e64f3537c922eddabcb11cc43663341fd2caea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_895454b2ca2773ac4b031466fd51ceb232b9ba4ec0dd15f563fe1af347793794 = $this->env->getExtension("native_profiler");
        $__internal_895454b2ca2773ac4b031466fd51ceb232b9ba4ec0dd15f563fe1af347793794->enter($__internal_895454b2ca2773ac4b031466fd51ceb232b9ba4ec0dd15f563fe1af347793794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "
<div>
    ";
        // line 3
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
        <a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 9
            echo "
    ";
        }
        // line 11
        echo "</div>

";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 14
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 15
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 16
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 17
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 22
        echo "
<div>
    ";
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "</div>
";
        
        $__internal_895454b2ca2773ac4b031466fd51ceb232b9ba4ec0dd15f563fe1af347793794->leave($__internal_895454b2ca2773ac4b031466fd51ceb232b9ba4ec0dd15f563fe1af347793794_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29439dba00ad0518854aab32b776b7cc7a64c864a871e6e0db358943331600f7 = $this->env->getExtension("native_profiler");
        $__internal_29439dba00ad0518854aab32b776b7cc7a64c864a871e6e0db358943331600f7->enter($__internal_29439dba00ad0518854aab32b776b7cc7a64c864a871e6e0db358943331600f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "    ";
        
        $__internal_29439dba00ad0518854aab32b776b7cc7a64c864a871e6e0db358943331600f7->leave($__internal_29439dba00ad0518854aab32b776b7cc7a64c864a871e6e0db358943331600f7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  99 => 24,  91 => 26,  89 => 24,  85 => 22,  78 => 20,  69 => 17,  64 => 16,  59 => 15,  54 => 14,  52 => 13,  48 => 11,  44 => 9,  38 => 6,  34 => 5,  29 => 4,  27 => 3,  23 => 1,);
    }
}
/* */
/* <div>*/
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*         {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*         <a href="{{ path('fos_user_security_logout') }}">*/
/*             {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*         </a>*/
/*     {% else %}*/
/* */
/*     {% endif %}*/
/* </div>*/
/* */
/* {% if app.request.hasPreviousSession %}*/
/*     {% for type, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="flash-{{ type }}">*/
/*                 {{ message }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* */
