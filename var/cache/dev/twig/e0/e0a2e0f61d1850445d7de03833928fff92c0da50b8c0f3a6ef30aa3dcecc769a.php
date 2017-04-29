<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7e6e9ba333e8727325127d2449bcd9b4d0a79fbee6e34971de0a2a7e91185d84 extends Twig_Template
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
        $__internal_59a6079c4fc8d90052776045bdbf409bc57f6a6cd6e4335523730c35cf62f41c = $this->env->getExtension("native_profiler");
        $__internal_59a6079c4fc8d90052776045bdbf409bc57f6a6cd6e4335523730c35cf62f41c->enter($__internal_59a6079c4fc8d90052776045bdbf409bc57f6a6cd6e4335523730c35cf62f41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_59a6079c4fc8d90052776045bdbf409bc57f6a6cd6e4335523730c35cf62f41c->leave($__internal_59a6079c4fc8d90052776045bdbf409bc57f6a6cd6e4335523730c35cf62f41c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
