<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a74d48c4af24e1a7be6cdc8e2b22434dc8853c7b6667a3b5cc71be5d6b9b9cd7 extends Twig_Template
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
        $__internal_4a164949cc5a4b72874cbcba9aa9df8ac4627fd1f3027052879066eb57aa8fc1 = $this->env->getExtension("native_profiler");
        $__internal_4a164949cc5a4b72874cbcba9aa9df8ac4627fd1f3027052879066eb57aa8fc1->enter($__internal_4a164949cc5a4b72874cbcba9aa9df8ac4627fd1f3027052879066eb57aa8fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4a164949cc5a4b72874cbcba9aa9df8ac4627fd1f3027052879066eb57aa8fc1->leave($__internal_4a164949cc5a4b72874cbcba9aa9df8ac4627fd1f3027052879066eb57aa8fc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
