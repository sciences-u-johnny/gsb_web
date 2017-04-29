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
        $__internal_a2ba8124b248f891801caf82cb84de0a21713f9f31952c494407b4050acaa4b8 = $this->env->getExtension("native_profiler");
        $__internal_a2ba8124b248f891801caf82cb84de0a21713f9f31952c494407b4050acaa4b8->enter($__internal_a2ba8124b248f891801caf82cb84de0a21713f9f31952c494407b4050acaa4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a2ba8124b248f891801caf82cb84de0a21713f9f31952c494407b4050acaa4b8->leave($__internal_a2ba8124b248f891801caf82cb84de0a21713f9f31952c494407b4050acaa4b8_prof);

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
