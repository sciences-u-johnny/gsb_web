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
        $__internal_acf992dfa02cd068d0b8a9206b7aa456027d4ce0a3ff7135366c7d3bf72aa1e4 = $this->env->getExtension("native_profiler");
        $__internal_acf992dfa02cd068d0b8a9206b7aa456027d4ce0a3ff7135366c7d3bf72aa1e4->enter($__internal_acf992dfa02cd068d0b8a9206b7aa456027d4ce0a3ff7135366c7d3bf72aa1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_acf992dfa02cd068d0b8a9206b7aa456027d4ce0a3ff7135366c7d3bf72aa1e4->leave($__internal_acf992dfa02cd068d0b8a9206b7aa456027d4ce0a3ff7135366c7d3bf72aa1e4_prof);

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
