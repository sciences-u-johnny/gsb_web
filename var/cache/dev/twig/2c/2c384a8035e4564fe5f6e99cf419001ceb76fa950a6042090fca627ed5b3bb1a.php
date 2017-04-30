<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_2947555b0947e8b2a668d4f44c14727a3515c2b4a88a00eef5fa92464e41c6a1 extends Twig_Template
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
        $__internal_b08f231074de5aa0fffcddedb24cbaf67c6c2956d640b9495b9da71bf51f9de4 = $this->env->getExtension("native_profiler");
        $__internal_b08f231074de5aa0fffcddedb24cbaf67c6c2956d640b9495b9da71bf51f9de4->enter($__internal_b08f231074de5aa0fffcddedb24cbaf67c6c2956d640b9495b9da71bf51f9de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_b08f231074de5aa0fffcddedb24cbaf67c6c2956d640b9495b9da71bf51f9de4->leave($__internal_b08f231074de5aa0fffcddedb24cbaf67c6c2956d640b9495b9da71bf51f9de4_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_511d5e4a266ecdd23a99dd2ae42b0866eede2df4e598d8ab08eb96c3dc684230 = $this->env->getExtension("native_profiler");
        $__internal_511d5e4a266ecdd23a99dd2ae42b0866eede2df4e598d8ab08eb96c3dc684230->enter($__internal_511d5e4a266ecdd23a99dd2ae42b0866eede2df4e598d8ab08eb96c3dc684230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "    ";
        
        $__internal_511d5e4a266ecdd23a99dd2ae42b0866eede2df4e598d8ab08eb96c3dc684230->leave($__internal_511d5e4a266ecdd23a99dd2ae42b0866eede2df4e598d8ab08eb96c3dc684230_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
