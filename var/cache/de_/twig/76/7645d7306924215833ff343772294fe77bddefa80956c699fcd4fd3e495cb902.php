<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_55dd95f3fdf23a4cc050d6f7ec50139644e559c13697096c220158d17f1700e7 extends Twig_Template
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
        $__internal_ff0d736b03864cbe6a6e0b5e4bd00ee6102327e1be74b94a011be2eb71aa9448 = $this->env->getExtension("native_profiler");
        $__internal_ff0d736b03864cbe6a6e0b5e4bd00ee6102327e1be74b94a011be2eb71aa9448->enter($__internal_ff0d736b03864cbe6a6e0b5e4bd00ee6102327e1be74b94a011be2eb71aa9448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ff0d736b03864cbe6a6e0b5e4bd00ee6102327e1be74b94a011be2eb71aa9448->leave($__internal_ff0d736b03864cbe6a6e0b5e4bd00ee6102327e1be74b94a011be2eb71aa9448_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
