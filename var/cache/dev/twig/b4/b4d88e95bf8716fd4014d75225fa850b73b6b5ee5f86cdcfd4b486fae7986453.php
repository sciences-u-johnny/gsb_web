<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_8727efb21ff0727c82ef1aad400576abaa564fa099e2156b4855ceaae21550b5 extends Twig_Template
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
        $__internal_8356f868c4ee911d4ff7c529f868072892420aa4f7afac5710265ff3dc32298f = $this->env->getExtension("native_profiler");
        $__internal_8356f868c4ee911d4ff7c529f868072892420aa4f7afac5710265ff3dc32298f->enter($__internal_8356f868c4ee911d4ff7c529f868072892420aa4f7afac5710265ff3dc32298f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8356f868c4ee911d4ff7c529f868072892420aa4f7afac5710265ff3dc32298f->leave($__internal_8356f868c4ee911d4ff7c529f868072892420aa4f7afac5710265ff3dc32298f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
