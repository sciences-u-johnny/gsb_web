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
        $__internal_55017ed6623a257372bd88fd8268cc5f6f4beb9bb0f92d01beeae49393427ba7 = $this->env->getExtension("native_profiler");
        $__internal_55017ed6623a257372bd88fd8268cc5f6f4beb9bb0f92d01beeae49393427ba7->enter($__internal_55017ed6623a257372bd88fd8268cc5f6f4beb9bb0f92d01beeae49393427ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_55017ed6623a257372bd88fd8268cc5f6f4beb9bb0f92d01beeae49393427ba7->leave($__internal_55017ed6623a257372bd88fd8268cc5f6f4beb9bb0f92d01beeae49393427ba7_prof);

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
