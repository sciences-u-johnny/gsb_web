<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_eb382c3a393f981442461c4e1a8c506324b01cd77fdccb8014dfdb9da838f6ee extends Twig_Template
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
        $__internal_aa54b828d85c2997cf8cf918d0ee22ef60a9c4f8fafa8ef8070ecfcafaef5aed = $this->env->getExtension("native_profiler");
        $__internal_aa54b828d85c2997cf8cf918d0ee22ef60a9c4f8fafa8ef8070ecfcafaef5aed->enter($__internal_aa54b828d85c2997cf8cf918d0ee22ef60a9c4f8fafa8ef8070ecfcafaef5aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_aa54b828d85c2997cf8cf918d0ee22ef60a9c4f8fafa8ef8070ecfcafaef5aed->leave($__internal_aa54b828d85c2997cf8cf918d0ee22ef60a9c4f8fafa8ef8070ecfcafaef5aed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
