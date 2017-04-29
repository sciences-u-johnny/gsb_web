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
        $__internal_b9e6ad0a2c5fbeb33f0ad46b2924c7c6831d81b6f1d1dec72db47021deac8125 = $this->env->getExtension("native_profiler");
        $__internal_b9e6ad0a2c5fbeb33f0ad46b2924c7c6831d81b6f1d1dec72db47021deac8125->enter($__internal_b9e6ad0a2c5fbeb33f0ad46b2924c7c6831d81b6f1d1dec72db47021deac8125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b9e6ad0a2c5fbeb33f0ad46b2924c7c6831d81b6f1d1dec72db47021deac8125->leave($__internal_b9e6ad0a2c5fbeb33f0ad46b2924c7c6831d81b6f1d1dec72db47021deac8125_prof);

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
