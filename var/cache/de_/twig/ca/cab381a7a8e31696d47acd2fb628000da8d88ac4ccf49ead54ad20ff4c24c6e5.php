<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_32fcf893c615e01629349776a02979ed0dc0dd1f9bcff70fe7794212f8d6bc09 extends Twig_Template
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
        $__internal_7132201e6285012fe386c66285c9e486ec6b718be37e41130acfd93e44d2285d = $this->env->getExtension("native_profiler");
        $__internal_7132201e6285012fe386c66285c9e486ec6b718be37e41130acfd93e44d2285d->enter($__internal_7132201e6285012fe386c66285c9e486ec6b718be37e41130acfd93e44d2285d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7132201e6285012fe386c66285c9e486ec6b718be37e41130acfd93e44d2285d->leave($__internal_7132201e6285012fe386c66285c9e486ec6b718be37e41130acfd93e44d2285d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
