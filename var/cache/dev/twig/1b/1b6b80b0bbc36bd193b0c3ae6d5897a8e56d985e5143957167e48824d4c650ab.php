<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4afe67f58723ddf93f5bf119e12910dd72175b8fba48b80e7d2b240e55ac2efb extends Twig_Template
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
        $__internal_7b88a4d1a68aa815063e44c4f95af7f788630d7a157912c18cf4ebf5c55a92f6 = $this->env->getExtension("native_profiler");
        $__internal_7b88a4d1a68aa815063e44c4f95af7f788630d7a157912c18cf4ebf5c55a92f6->enter($__internal_7b88a4d1a68aa815063e44c4f95af7f788630d7a157912c18cf4ebf5c55a92f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7b88a4d1a68aa815063e44c4f95af7f788630d7a157912c18cf4ebf5c55a92f6->leave($__internal_7b88a4d1a68aa815063e44c4f95af7f788630d7a157912c18cf4ebf5c55a92f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */