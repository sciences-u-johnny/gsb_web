<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_577ba106fa317535c0d9c6ebaa1dfc86cb3b56650e4963dd6a08db5fc174df86 extends Twig_Template
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
        $__internal_87e3ad50b38dd2a5ae27115cd077c15ffa5a97c5a8bcf49b94f288c20d351795 = $this->env->getExtension("native_profiler");
        $__internal_87e3ad50b38dd2a5ae27115cd077c15ffa5a97c5a8bcf49b94f288c20d351795->enter($__internal_87e3ad50b38dd2a5ae27115cd077c15ffa5a97c5a8bcf49b94f288c20d351795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_87e3ad50b38dd2a5ae27115cd077c15ffa5a97c5a8bcf49b94f288c20d351795->leave($__internal_87e3ad50b38dd2a5ae27115cd077c15ffa5a97c5a8bcf49b94f288c20d351795_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
