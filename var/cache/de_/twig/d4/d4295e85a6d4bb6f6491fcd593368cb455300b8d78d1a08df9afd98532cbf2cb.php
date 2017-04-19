<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1aa9a0dd5a710164bb54423165eca54b0d580083060634ab3ad1dbdf94b4cf14 extends Twig_Template
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
        $__internal_8146d925a6f9eaf0f423e2f1a64a453df4fd3e6b0867c8c586ff88a229961c6b = $this->env->getExtension("native_profiler");
        $__internal_8146d925a6f9eaf0f423e2f1a64a453df4fd3e6b0867c8c586ff88a229961c6b->enter($__internal_8146d925a6f9eaf0f423e2f1a64a453df4fd3e6b0867c8c586ff88a229961c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8146d925a6f9eaf0f423e2f1a64a453df4fd3e6b0867c8c586ff88a229961c6b->leave($__internal_8146d925a6f9eaf0f423e2f1a64a453df4fd3e6b0867c8c586ff88a229961c6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
