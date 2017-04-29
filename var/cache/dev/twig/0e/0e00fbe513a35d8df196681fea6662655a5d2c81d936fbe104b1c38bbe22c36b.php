<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_67a8f876d48f7fd3e5755bdd05fff011e286320eccfa3c40d80350fc2981cd1a extends Twig_Template
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
        $__internal_ff414a686ba2b046e3087b50b0ed98c918c544baea95da65241063e48c0e3766 = $this->env->getExtension("native_profiler");
        $__internal_ff414a686ba2b046e3087b50b0ed98c918c544baea95da65241063e48c0e3766->enter($__internal_ff414a686ba2b046e3087b50b0ed98c918c544baea95da65241063e48c0e3766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ff414a686ba2b046e3087b50b0ed98c918c544baea95da65241063e48c0e3766->leave($__internal_ff414a686ba2b046e3087b50b0ed98c918c544baea95da65241063e48c0e3766_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
