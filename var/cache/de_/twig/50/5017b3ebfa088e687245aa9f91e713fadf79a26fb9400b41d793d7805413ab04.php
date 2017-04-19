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
        $__internal_b02a69340eda86f836f813165dc82b6453380a7452852cb2eba4bc85dc8f9347 = $this->env->getExtension("native_profiler");
        $__internal_b02a69340eda86f836f813165dc82b6453380a7452852cb2eba4bc85dc8f9347->enter($__internal_b02a69340eda86f836f813165dc82b6453380a7452852cb2eba4bc85dc8f9347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b02a69340eda86f836f813165dc82b6453380a7452852cb2eba4bc85dc8f9347->leave($__internal_b02a69340eda86f836f813165dc82b6453380a7452852cb2eba4bc85dc8f9347_prof);

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
