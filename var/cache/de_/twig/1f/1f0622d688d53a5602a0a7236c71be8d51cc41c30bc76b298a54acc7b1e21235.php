<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fe36646a50e13d2c76f1ac6cd9a5c06daa1f908caa02845255320565ea67a129 extends Twig_Template
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
        $__internal_453011c2c7e506a523aad3b8ff685c077872eda86db611e58127822ba890e104 = $this->env->getExtension("native_profiler");
        $__internal_453011c2c7e506a523aad3b8ff685c077872eda86db611e58127822ba890e104->enter($__internal_453011c2c7e506a523aad3b8ff685c077872eda86db611e58127822ba890e104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_453011c2c7e506a523aad3b8ff685c077872eda86db611e58127822ba890e104->leave($__internal_453011c2c7e506a523aad3b8ff685c077872eda86db611e58127822ba890e104_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
