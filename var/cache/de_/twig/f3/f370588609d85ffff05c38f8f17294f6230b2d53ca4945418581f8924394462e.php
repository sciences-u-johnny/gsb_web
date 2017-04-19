<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b7bdcba0c8d7f23abb22686bfa9cad0f048c65fd30bf60e3f13d07325b8fc46c extends Twig_Template
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
        $__internal_124f2673c69324943adfcdec96f7582b1d61fc832287b6865a7f96f137d1eb85 = $this->env->getExtension("native_profiler");
        $__internal_124f2673c69324943adfcdec96f7582b1d61fc832287b6865a7f96f137d1eb85->enter($__internal_124f2673c69324943adfcdec96f7582b1d61fc832287b6865a7f96f137d1eb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_124f2673c69324943adfcdec96f7582b1d61fc832287b6865a7f96f137d1eb85->leave($__internal_124f2673c69324943adfcdec96f7582b1d61fc832287b6865a7f96f137d1eb85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
