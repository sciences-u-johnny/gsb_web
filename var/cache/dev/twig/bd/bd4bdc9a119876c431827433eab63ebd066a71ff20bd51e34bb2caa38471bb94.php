<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3ea70674a956c697c026ab86be5fb29a59bb2cc0bf4eaaa5b05a70c76292fb15 extends Twig_Template
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
        $__internal_e79bee9232fbfeded958a4844a64e799d9509671e9b227610f3f457fab7ed7c0 = $this->env->getExtension("native_profiler");
        $__internal_e79bee9232fbfeded958a4844a64e799d9509671e9b227610f3f457fab7ed7c0->enter($__internal_e79bee9232fbfeded958a4844a64e799d9509671e9b227610f3f457fab7ed7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e79bee9232fbfeded958a4844a64e799d9509671e9b227610f3f457fab7ed7c0->leave($__internal_e79bee9232fbfeded958a4844a64e799d9509671e9b227610f3f457fab7ed7c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
