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
        $__internal_98045430d4aedd62a5fe00844259cc5a4c3f580f332eef307a6a82d164985035 = $this->env->getExtension("native_profiler");
        $__internal_98045430d4aedd62a5fe00844259cc5a4c3f580f332eef307a6a82d164985035->enter($__internal_98045430d4aedd62a5fe00844259cc5a4c3f580f332eef307a6a82d164985035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_98045430d4aedd62a5fe00844259cc5a4c3f580f332eef307a6a82d164985035->leave($__internal_98045430d4aedd62a5fe00844259cc5a4c3f580f332eef307a6a82d164985035_prof);

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
