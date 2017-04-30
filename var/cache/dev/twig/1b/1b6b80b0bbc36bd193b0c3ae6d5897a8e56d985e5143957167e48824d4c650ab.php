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
        $__internal_23466adcc6d2af01bf46939ce006ce9b29777144a25accb909b343331f861ca7 = $this->env->getExtension("native_profiler");
        $__internal_23466adcc6d2af01bf46939ce006ce9b29777144a25accb909b343331f861ca7->enter($__internal_23466adcc6d2af01bf46939ce006ce9b29777144a25accb909b343331f861ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_23466adcc6d2af01bf46939ce006ce9b29777144a25accb909b343331f861ca7->leave($__internal_23466adcc6d2af01bf46939ce006ce9b29777144a25accb909b343331f861ca7_prof);

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
