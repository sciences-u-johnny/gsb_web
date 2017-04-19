<?php

/* TestBundle:Default:RenseignerFicheFrais.html.twig */
class __TwigTemplate_e523bb8362471d8c8720ab32ffaeae6386d2de29f12ea3b0abad3f3c1fcbb25c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBundle::layout.html.twig", "TestBundle:Default:RenseignerFicheFrais.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89ced2d8c321ee4042eacedcd0768f975772ba6266fd423676e710072d8e382e = $this->env->getExtension("native_profiler");
        $__internal_89ced2d8c321ee4042eacedcd0768f975772ba6266fd423676e710072d8e382e->enter($__internal_89ced2d8c321ee4042eacedcd0768f975772ba6266fd423676e710072d8e382e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:RenseignerFicheFrais.html.twig"));

        // line 2
        $context["i"] = 1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89ced2d8c321ee4042eacedcd0768f975772ba6266fd423676e710072d8e382e->leave($__internal_89ced2d8c321ee4042eacedcd0768f975772ba6266fd423676e710072d8e382e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24d4b29058c10148da085f7789b579d4bf6391c09b5411fa4117eb71aa6e839c = $this->env->getExtension("native_profiler");
        $__internal_24d4b29058c10148da085f7789b579d4bf6391c09b5411fa4117eb71aa6e839c->enter($__internal_24d4b29058c10148da085f7789b579d4bf6391c09b5411fa4117eb71aa6e839c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "


    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/css/custom-theme/jquery-ui-1.10.0.custom.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/StyleRenseigner.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/jquery-1.9.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/theme/assets/js/google-code-prettify/prettify.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>





    <!-- \$Montant->addLigneHorForfait(new LigneHorForfait());
        \$Montant->addLigneForfai(new LigneForfais());
         -->
    <script>

        jQuery(document).ready(function()  {





            var LigneFCount = '";
        // line 37
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "LigneForFais", array())), "html", null, true);
        echo "';
            var LigneJCount = '";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "justificatif", array())), "html", null, true);
        echo "';
            var LigneHCount = '";
        // line 39
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "LigneHorForFait", array())), "html", null, true);
        echo "';
            var LigneHTab = [];
            var LigneJTab = [];
            var LigneFTab = [];
            for (i = 0;i<LigneJCount;i++ ){
                LigneJTab.push(i);
            }
            for (i = 0;i<LigneFCount;i++ ){
                LigneFTab.push(i);
            }
            for (i = 0;i<LigneHCount;i++ ){
                LigneHTab.push(i);
            }


            var val;

            \$('#fiche_frais_Sauvegarder').click(function (event) {

                \$('.erreur').remove();
                var Datej = ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["Datej"]) ? $context["Datej"] : $this->getContext($context, "Datej")), "html", null, true);
        echo ";
                var Datem = ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["Datem"]) ? $context["Datem"] : $this->getContext($context, "Datem")), "html", null, true);
        echo ";
                var Datey = ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["Datey"]) ? $context["Datey"] : $this->getContext($context, "Datey")), "html", null, true);
        echo ";

                var bon = true;
                var bondate = true;
                var bondate2 = true;
                var bon2 = true;



                for (var i=0;i<LigneHCount;i++){

                    \$nb = LigneHTab[i];

                    var libelle = \$('#fiche_frais_LigneHorForFait_'+\$nb+'_libelle').val();
                    var montant = \$('#fiche_frais_LigneHorForFait_'+\$nb+'_montant');
                    var jour = \$('#fiche_frais_LigneHorForFait_'+\$nb+'_date_day').val();
                    var mois = \$('#fiche_frais_LigneHorForFait_'+\$nb+'_date_month').val();
                    var annee = \$('#fiche_frais_LigneHorForFait_'+\$nb+'_date_year').val();



                    \$('#fiche_frais_LigneHorForFait_'+\$nb+'_date_day').css(\"borderColor\",\"#9d9d9d\");
                    \$('#fiche_frais_LigneHorForFait_'+\$nb+'_date_month').css(\"borderColor\",\"#9d9d9d\");
                    \$('#fiche_frais_LigneHorForFait_'+\$nb+'_date_year').css(\"borderColor\",\"#9d9d9d\");
                    \$('#TitreH'+i).css(\"color\",\"#9d9d9d\");
                    \$('#fiche_frais_LigneHorForFait_'+\$nb+'_libelle').css(\"borderColor\",\"#9d9d9d\");
                    \$('#fiche_frais_LigneHorForFait_'+\$nb+'_montant').css(\"borderColor\",\"#9d9d9d\");

                    VeriNombre(montant);

                    var test = true;
                    if (libelle.trim() == \"\"){
                        \$('#fiche_frais_LigneHorForFait_'+\$nb+'_libelle').css(\"borderColor\",\"red\");
                        \$('#TitreH'+\$nb).css(\"color\",\"red\");
                        bon = false
                    }
                    //Verif date hor forfait
                    if (annee != Datey){
                        if (annee > Datey){
                            bondate2 = false;
                            test = false;
                        }else{
                            if (annee < Datey){
                                if (annee < Datey-1){
                                    bondate2 = false;
                                    test = false;
                                }else{
                                    if (mois < Datem){
                                        bondate2 = false;
                                        test = false;
                                    }
                                }
                            }
                        }
                    }else{
                        if (mois > Datem){
                            bondate2 = false;
                            test = false;
                        }else{
                            if (mois == Datem && jour > Datej){
                                bondate2 = false;
                                test = false;
                            }
                        }
                    }


                    if (test == false){
                        \$('#fiche_frais_LigneHorForFait_'+\$nb+'_date_day').css(\"borderColor\",\"red\");
                        \$('#fiche_frais_LigneHorForFait_'+\$nb+'_date_month').css(\"borderColor\",\"red\");
                        \$('#fiche_frais_LigneHorForFait_'+\$nb+'_date_year').css(\"borderColor\",\"red\");
                        \$('#TitreH'+\$nb).css(\"color\",\"9d9d9d\");
                    }
                }
                for (var i=0;i<LigneFCount;i++){
                    \$nb = LigneFTab[i];

                    var jour = \$('#fiche_frais_LigneForFais_'+\$nb+'_date_day').val();
                    var mois = \$('#fiche_frais_LigneForFais_'+\$nb+'_date_month').val();
                    var annee = \$('#fiche_frais_LigneForFais_'+\$nb+'_date_year').val();
                    var quantite = \$('#fiche_frais_LigneForFais_'+\$nb+'_quantite');



                    \$('#fiche_frais_LigneForFais_'+\$nb+'_quantite').css(\"borderColor\",\"#9d9d9d\");

                    \$('#fiche_frais_LigneForFais_'+\$nb+'_date_day').css(\"borderColor\",\"#9d9d9d\");
                    \$('#fiche_frais_LigneForFais_'+\$nb+'_date_month').css(\"borderColor\",\"#9d9d9d\");
                    \$('#fiche_frais_LigneForFais_'+\$nb+'_date_year').css(\"borderColor\",\"#9d9d9d\");
                    \$('#TitreF'+\$nb).css(\"color\",\"#9d9d9d\");

                    VeriNombre(quantite);

                    var test = true;


                    //Verif date hor forfait
                    if (annee != Datey){
                        if (annee > Datey){
                            bondate2 = false;
                            test = false;
                        }else{
                            if (annee < Datey){
                                if (annee < Datey-1){
                                    bondate2 = false;
                                    test = false;
                                }else{
                                    if (mois < Datem){
                                        bondate2 = false;
                                        test = false;
                                    }
                                }
                            }
                        }
                    }else{
                        if (mois > Datem){
                            bondate2 = false;
                            test = false;
                        }else{
                            if (mois == Datem && jour > Datej){
                                bondate2 = false;
                                test = false;
                            }
                        }
                    }

                    if (test == false){
                        \$('#fiche_frais_LigneForFais_'+\$nb+'_date_day').css(\"borderColor\",\"red\");
                        \$('#fiche_frais_LigneForFais_'+\$nb+'_date_month').css(\"borderColor\",\"red\");
                        \$('#fiche_frais_LigneForFais_'+\$nb+'_date_year').css(\"borderColor\",\"red\");
                        \$('#TitreF'+\$nb).css(\"color\",\"red\");
                    }

                }



                if (bon == false || bondate == false || bondate2 == false || bon2 == false){

                    event.preventDefault();

                    if (bon == false){
                        \$('#InfoH').append('<p class=\"erreur\" style=\"text-align : left;color: red\">Champ non remplie</p>');
                    }
                    if (bondate == false){
                        \$('#InfoH').append('<p class=\"erreur\" style=\"text-align : left;color: red\">Date Incorect</p>')
                    }
                    if (bondate2 == false){
                        \$('#InfoF').append('<p class=\"erreur\" style=\"text-align : left;color: red\">Date Incorect</p>')
                    }
                }


            });

            function VeriNombre(source)
            {
                var value = source.val(); //ici, sa valeur

                if (isNaN(parseFloat(value))) //cas où la valeur n'est pas du tout un nombre
                // Dans ce cas, parseFloat(value) est égal à NaN
                {
                    source.val(\"\"); // la valeur devient nulle

                }
                else if (value != parseInt(value) + \".\") // Cas ou ce n'est pas un nombre avec juste un point derrière (pour la virgule)
                {
                    if (parseFloat(value) > 0) {
                        source.val(parseFloat(value));

                        return;
                    }
                }

                source.css(\"borderColor\",\"red\");
                bon2 = false;
            }


            \$('#dialog-confirm').dialog({
                autoOpen: false,
                width: 600,
                buttons: {
                    \"oui\": function () {
                        \$(this).dialog(\"close\");
                        \$('#F'+val).remove();

                        LigneFTab.splice(LigneFTab.indexOf(parseInt(val)-1),1);
                        LigneFCount --;
                        return true;
                    },
                    \"non\": function () {
                        \$(this).dialog(\"close\");
                        return false;
                    }
                }
            });

            \$('#dialog-confirm2').dialog({
                autoOpen: false,
                width: 600,
                buttons: {
                    \"oui\": function () {
                        \$(this).dialog(\"close\");
                        \$('#H'+val).remove();
                        LigneHTab.splice(LigneHTab.indexOf(parseInt(val)-1),1);
                        LigneHCount --;
                        return true;

                    },
                    \"non\": function () {
                        \$(this).dialog(\"close\");
                        return false;
                    }
                }
            });

            \$('#dialog-confirm3').dialog({
                autoOpen: false,
                width: 600,
                buttons: {
                    \"oui\": function () {
                        \$(this).dialog(\"close\");
                        \$('#J'+val).remove();

                        LigneJTab.splice(LigneJTab.indexOf(parseInt(val)-1),1);
                        LigneJCount --;
                        return true;
                    },
                    \"non\": function () {
                        \$(this).dialog(\"close\");
                        return false;
                    }
                }
            });

            \$('#addLF').click(function(event){
                event.preventDefault(); // évite qu'un # apparaisse dans l'URL
                addCategory();
                return false;
            });
            \$('#addLH').click(function(event){
                event.preventDefault(); // évite qu'un # apparaisse dans l'URL
                addCategory2();
                return false;
            });

            \$('.supF').click(function(event){
                event.preventDefault(); // évite qu'un # apparaisse dans l'URL
                val = \$(this).attr(\"name\");
                \$('#dialog-confirm').dialog('open');
                return false;;
            });
            \$('.supH').click(function(event){
                event.preventDefault(); // évite qu'un # apparaisse dans l'URL
                val = \$(this).attr(\"name\");
                \$('#dialog-confirm2').dialog('open');
                return false;;
            });
            \$('.supJ').click(function(event){
                event.preventDefault(); // évite qu'un # apparaisse dans l'URL
                val = \$(this).attr(\"name\");
                \$('#dialog-confirm3').dialog('open');
                return false;;
            });
            \$('#addjusti').click(function (event) {
                event.preventDefault();
                addCategory3();
                return false;
            });

            // La fonction qui ajoute un Justificatif
            function addCategory3() {
                var emailList = jQuery('#toutJ');
                LigneJCount ++;
                if (LigneJTab.length == 0){
                    \$nb = 1;
                }else{
                    \$nb = LigneJTab[LigneJTab.length - 1] + 2;
                }
                LigneJTab.push((\$nb-1));
                var newWidget = jQuery('<div class=\"form-group\" id=\"J'+\$nb+'\" style=\"margin-bottom: 5px;\"></div>')
                var newrow = jQuery('<div class=\"row\" id=\"O'+\$nb+'\" style=\"margin: auto\"> <div class=\"col-md-1\"> <h1 style=\"margin-top: 0px\" id=\"TitreJ'+(\$nb-1)+'\">'+\$nb+'- </h1> </div>')

                var newURL = jQuery('<div class=\"col-md-9\"></div>').html(\$('#toutJ').attr('URL-prototype').replace(/__name__/g,\$nb-1));

                newrow.append(newURL);
                newWidget.append(newrow);

                emailList.append(newWidget);



                var test = jQuery('#O'+\$nb);
                addDeleteLink3(test,\$nb);
            }

            // La fonction qui ajoute Une Ligne Hor Forfait
            function addCategory2() {
                var emailList = jQuery('#toutH');
                LigneHCount ++;
                if (LigneHTab.length == 0){
                    \$nb = 1;
                }else{
                    \$nb = LigneHTab[LigneHTab.length - 1] + 2;
                }
                LigneHTab.push((\$nb-1));
                var newWidget = jQuery('<div class=\"form-group\" id=\"H'+\$nb+'\" style=\"margin-bottom: 5px;\"></div>')
                var newrow = jQuery('<div class=\"row\" id=\"G'+\$nb+'\" style=\"margin: auto\"> <div class=\"col-md-1\"> <h1 style=\"margin-top: 0px\" id=\"TitreH'+(\$nb-1)+'\">'+\$nb+'- </h1> </div>')

                var newMontant = jQuery('<div class=\"col-md-2\"></div>').html(\$('#toutH').attr('montant-proto').replace(/__name__/g,\$nb-1));
                var newDate = jQuery('<div class=\"col-md-4\"></div>').html(\$('#toutH').attr('date-proto').replace(/__name__/g,\$nb-1));
                var newlibelle = jQuery('<div class=\"col-md-3\"></div>').html(\$('#toutH').attr('libelle-proto').replace(/__name__/g,\$nb-1));

                newrow.append(newMontant);
                newrow.append(newlibelle);
                newrow.append(newDate);
                newWidget.append(newrow);

                emailList.append(newWidget);



                var test = jQuery('#G'+\$nb);
                addDeleteLink2(test,\$nb);
            }

            // La fonction qui ajoute une Ligne Forfait
            function addCategory() {
                var emailList = jQuery('#tout');
                LigneFCount ++;
                if (LigneFTab.length == 0){
                    \$nb = 1;
                }else{
                    \$nb = LigneFTab[LigneFTab.length - 1] + 2;
                }

                LigneFTab.push((\$nb-1));
                var newWidget = jQuery('<div class=\"form-group\" id=\"F'+\$nb+'\" style=\"margin-bottom: 5px;\"></div>');
                var newrow = jQuery('<div class=\"row\" id=\"D'+\$nb+'\" style=\"margin: auto\"> <div class=\"col-md-1\"> <h1 style=\"margin-top: 0px\" id=\"TitreF'+(\$nb-1)+'\">'+\$nb+'- </h1> </div> </div>')

                var newDate = jQuery('<div class=\"col-md-4\"></div>').html(\$('#tout').attr('date-prototype').replace(/__name__/g,\$nb-1));
                var newQuantite = jQuery('<div class=\"col-md-3\"></div>').html(\$('#tout').attr('quantite-prototype').replace(/__name__/g,\$nb-1));
                var newFraiforfait = jQuery('<div class=\"col-md-2\"></div>').html(\$('#tout').attr('Fraisforfait-prototype').replace(/__name__/g,\$nb-1));

                newrow.append(newFraiforfait);
                newrow.append(newQuantite);
                newrow.append(newDate);
                newWidget.append(newrow);

                emailList.append(newWidget);


                var test = jQuery('#D'+\$nb);
                addDeleteLink(test,\$nb);
            }

            // La fonction qui ajoute un lien de suppression d'un Justificatif
            function addDeleteLink3(\$prototype,\$nombre) {
                // Création du lien
                \$deleteLink = \$('<div class=\"col-md-2\" value=\"'+(\$nombre)+'\" ><a href=\"#\" class=\"btn btn-danger\">Supprimer</a></div>');

                // Ajout du lien
                \$prototype.append(\$deleteLink);

                // Ajout du listener sur le clic du lien
                \$deleteLink.click(function(e) {
                    \$nombre = \$(this).attr(\"value\");
                    \$('#J'+\$nombre).remove();
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    LigneJTab.splice(LigneJTab.indexOf(parseInt(\$nombre)-1),1);
                    LigneJCount --;
                    return false;
                });
            }

            // La fonction qui ajoute un lien de suppression d'une catégorie
            function addDeleteLink2(\$prototype,\$nombre) {
                // Création du lien
                \$deleteLink = \$('<div class=\"col-md-2\" value=\"'+(\$nombre)+'\" ><a href=\"#\" class=\"btn btn-danger\">Supprimer</a></div>');

                // Ajout du lien
                \$prototype.append(\$deleteLink);

                // Ajout du listener sur le clic du lien
                \$deleteLink.click(function(e) {
                    \$nombre = \$(this).attr(\"value\");
                    \$('#H'+\$nombre).remove();
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    LigneHTab.splice(LigneHTab.indexOf(parseInt(\$nombre)-1),1);
                    LigneHCount --;
                    return false;
                });
            }
            // La fonction qui ajoute un lien de suppression d'une catégorie
            function addDeleteLink(\$prototype,\$nombre) {
                // Création du lien
                \$deleteLink2 = \$('<div class=\"col-md-2\" value=\"'+(\$nombre)+'\" ><a href=\"#\" class=\"btn btn-danger\">Supprimer</a></div>');

                // Ajout du lien
                \$prototype.append(\$deleteLink2);

                // Ajout du listener sur le clic du lien
                \$deleteLink2.click(function(e) {
                    \$nombre = \$(this).attr(\"value\");
                    \$('#F'+\$nombre).remove();

                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    LigneFTab.splice(LigneFTab.indexOf(parseInt(\$nombre)-1),1);
                    LigneFCount --;
                    return false;
                });
            }



        });
    </script>
";
        
        $__internal_24d4b29058c10148da085f7789b579d4bf6391c09b5411fa4117eb71aa6e839c->leave($__internal_24d4b29058c10148da085f7789b579d4bf6391c09b5411fa4117eb71aa6e839c_prof);

    }

    // line 480
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8b99584a8bd3c30c68bc467a2c3d4cd4d54ef3ba34ea64f3092454bfc7794bf = $this->env->getExtension("native_profiler");
        $__internal_b8b99584a8bd3c30c68bc467a2c3d4cd4d54ef3ba34ea64f3092454bfc7794bf->enter($__internal_b8b99584a8bd3c30c68bc467a2c3d4cd4d54ef3ba34ea64f3092454bfc7794bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout Fiche Frais";
        
        $__internal_b8b99584a8bd3c30c68bc467a2c3d4cd4d54ef3ba34ea64f3092454bfc7794bf->leave($__internal_b8b99584a8bd3c30c68bc467a2c3d4cd4d54ef3ba34ea64f3092454bfc7794bf_prof);

    }

    // line 481
    public function block_body($context, array $blocks = array())
    {
        $__internal_215d37ec8414cd76bac0c4006750653a7bd7f8f7fc0540c495a5c325a8eac4a8 = $this->env->getExtension("native_profiler");
        $__internal_215d37ec8414cd76bac0c4006750653a7bd7f8f7fc0540c495a5c325a8eac4a8->enter($__internal_215d37ec8414cd76bac0c4006750653a7bd7f8f7fc0540c495a5c325a8eac4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 482
        echo "
    <!--Jquery Fenetre Dialog -->
    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer cet élément ?
        </p>
    </div>

    <!--Jquery Fenetre Dialog -->
    <div id=\"dialog-confirm2\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer cet élément ?
        </p>
    </div>
    <!--Jquery Fenetre Dialog -->
    <div id=\"dialog-confirm3\" title=\"Confirmation de la suppression\" style=\"display:none;\">
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
            Etes-vous sûr de vouloir supprimer ce Justificatif ?
        </p>
    </div>
    ";
        // line 505
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 506
        echo "
    <div class=\"row \" style=\"margin-left: 0px;margin-right: 0px;\">
        <div class=\"col-md-offset-3 col-md-8\" style=\"padding-top: 20px\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h1 style=\"margin-top: 5px;margin-bottom: 0px\">Fiche Frais de ";
        // line 511
        echo twig_escape_filter($this->env, (isset($context["DateMois"]) ? $context["DateMois"] : $this->getContext($context, "DateMois")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["DateAnne"]) ? $context["DateAnne"] : $this->getContext($context, "DateAnne")), "html", null, true);
        echo "</h1>
                    <p style=\"margin-top: 0px;text-align: left;margin-bottom: 5px\">Montant Valide : ";
        // line 512
        echo twig_escape_filter($this->env, (isset($context["MontantValide"]) ? $context["MontantValide"] : $this->getContext($context, "MontantValide")), "html", null, true);
        echo " €</p>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 515
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_start');
        echo "

                    <div class=\"panel panel-default\" style=\"color: #9d9d9d;background-color: #3c3c3c\">
                        <div class=\"panel-heading\" style=\"color: #9d9d9d;background-color: #3c3c3c\">
                            <h2 style=\"font-size: 20px; padding: 0px;margin: 0px;\" id=\"InfoF\">Frais Forfait : </h2>

                        </div>

                        <div class=\"panel-body\" style=\"max-height: 230px;min-height: 230px; overflow-y:scroll;\">
                            <div id=\"tout\" date-prototype=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "LigneForFais", array()), "vars", array()), "prototype", array()), "date", array()), 'widget'), "html_attr");
        echo "\" quantite-prototype=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "LigneForFais", array()), "vars", array()), "prototype", array()), "quantite", array()), 'widget'), "html_attr");
        echo "\" Fraisforfait-prototype=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "LigneForFais", array()), "vars", array()), "prototype", array()), "FraisForfais", array()), 'widget'), "html_attr");
        echo "\">
                                ";
        // line 525
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "LigneForFais", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["UneLigne"]) {
            // line 526
            echo "                                    <div class=\"form-group\" id=\"F";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" style=\"margin-bottom: 5px;\">
                                        <div class=\"row\" style=\"margin: auto\">
                                            <div class=\"col-md-1\">
                                                <h1 style=\"margin-top: 0px\" id=\"TitreF";
            // line 529
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "- </h1>
                                            </div>
                                            <div class=\"col-md-2\">
                                                ";
            // line 532
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["UneLigne"], "FraisForfais", array()), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-md-3\">
                                                ";
            // line 535
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["UneLigne"], "quantite", array()), 'widget', array("attr" => array("style" => "text-align: left")));
            echo "
                                            </div>
                                            <div class=\"col-md-4\">
                                                ";
            // line 538
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["UneLigne"], "date", array()), 'widget');
            echo "
                                                <div id=\"DeBug\" class=\"hidden\">
                                                ";
            // line 540
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["UneLigne"], "valide", array()), 'widget', array("attr" => array("class" => "hidden")));
            echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button  name=\"";
            // line 544
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" class=\"supF btn btn-danger\" >Supprimer</button>
                                            </div>
                                        </div>

                                    </div>
                                    ";
            // line 549
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 550
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UneLigne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 551
        echo "                            </div>
                        </div>
                        <div class=\"panel-footer\">
                            <button href=\"#\" class=\"btn btn-success\" id=\"addLF\" style=\"margin-bottom: 0px;margin-left: 5px\">Ajout Frais Forfait</button>
                        </div>
                    </div>


                    <div class=\"panel panel-default\" style=\"color: #9d9d9d;background-color: #3c3c3c\">
                        <div class=\"panel-heading\" style=\"color: #9d9d9d; background-color: #3c3c3c\">
                            <h2 style=\"font-size: 20px; padding: 0px;margin: 0px;\" id=\"InfoH\">Frais Hors Forfait : </h2>
                        </div>
                        <div class=\"panel-body\" style=\"max-height: 230px;min-height: 230px; overflow-y:scroll;\">
                            ";
        // line 564
        $context["i"] = 1;
        // line 565
        echo "                            <div id=\"toutH\" libelle-proto=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "LigneHorForFait", array()), "vars", array()), "prototype", array()), "libelle", array()), 'widget'), "html_attr");
        echo "\" date-proto=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "LigneHorForFait", array()), "vars", array()), "prototype", array()), "date", array()), 'widget'), "html_attr");
        echo "\" montant-proto=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "LigneHorForFait", array()), "vars", array()), "prototype", array()), "montant", array()), 'widget'), "html_attr");
        echo "\">
                                ";
        // line 566
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "LigneHorForFait", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["UneLigne"]) {
            // line 567
            echo "                                    <div class=\"form-group\" id=\"H";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" style=\"margin-bottom: 5px;\">
                                        <div class=\"row\" style=\"margin: auto\">
                                            <div class=\"col-md-1\">
                                                <h1 style=\"margin-top: 0px\" id=\"TitreH";
            // line 570
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "- </h1>
                                            </div>
                                            <div class=\"col-md-2\">
                                                ";
            // line 573
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["UneLigne"], "montant", array()), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-md-3\">
                                                ";
            // line 576
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["UneLigne"], "libelle", array()), 'errors');
            echo "
                                                ";
            // line 577
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["UneLigne"], "libelle", array()), 'widget', array("attr" => array("style" => "text-align: left")));
            echo "
                                            </div>
                                            <div class=\"col-md-4\">
                                                ";
            // line 580
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["UneLigne"], "date", array()), 'widget');
            echo "
                                                <div id=\"DeBug\" class=\"hidden\">
                                                ";
            // line 582
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["UneLigne"], "valide", array()), 'widget', array("attr" => array("class" => "hidden")));
            echo "
                                                    </div>
                                            </div>
                                            <div class=\"col-md-2\">
                                                <button  name=\"";
            // line 586
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" class=\"supH btn btn-danger\" >Supprimer</button>
                                            </div>
                                        </div>
                                    </div>
                                    ";
            // line 590
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 591
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UneLigne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 592
        echo "                            </div>
                        </div>
                        <div class=\"panel-footer\">
                            <button href=\"#\" class=\"btn btn-success\" id=\"addLH\" style=\"margin-bottom: 0px;margin-left: 5px\">Ajout Frais Hor Forfait</button>
                        </div>

                    </div>

                    <div class=\"panel panel-default\" style=\"color: #9d9d9d;background-color: #3c3c3c\">
                        <div class=\"panel-heading\" style=\"color: #9d9d9d;background-color: #3c3c3c\">
                            <h2 style=\"font-size: 20px; padding: 0px;margin: 0px;\" id=\"InfoF\">Justificatif : </h2>

                        </div>
                        ";
        // line 605
        $context["i"] = 1;
        // line 606
        echo "                        <div class=\"panel-body\" style=\"max-height: 230px;min-height: 230px; overflow-y:scroll;\">
                            <div id=\"toutJ\" URL-prototype=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "justificatif", array()), "vars", array()), "prototype", array()), "File", array()), 'widget'), "html_attr");
        echo "\">
                                ";
        // line 608
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LesJustificatif"]) ? $context["LesJustificatif"] : $this->getContext($context, "LesJustificatif")));
        foreach ($context['_seq'] as $context["_key"] => $context["UneLigne"]) {
            // line 609
            echo "                                    <div class=\"form-group\" id=\"J";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" style=\"margin-bottom: 5px;\">
                                        <div class=\"row\" style=\"margin: auto\">
                                            <div class=\"col-md-1\">
                                                <h1 style=\"margin-top: 0px\" id=\"TitreJ";
            // line 612
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "- </h1>
                                            </div>
                                            <div class=\"col-md-9\" style=\"text-align: center;margin-top: 7px\">
                                                ";
            // line 615
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "justificatif", array()), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), array(), "array"), "File", array()), 'widget', array("attr" => array("class" => "hidden")));
            echo "
                                                <a  href=\"";
            // line 616
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("Uplaod/Jusificatif/" . $this->getAttribute($context["UneLigne"], "getId", array(), "method")) . "/") . $this->getAttribute($context["UneLigne"], "getURL", array(), "method"))), "html", null, true);
            echo "\" target=\"_blank\">Voir Justificatif ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</a>
                                            </div>

                                            <div class=\"col-md-2\">
                                                <button  name=\"";
            // line 620
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" class=\"supJ btn btn-danger\" >Supprimer</button>
                                            </div>
                                        </div>

                                    </div>
                                    ";
            // line 625
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 626
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UneLigne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 627
        echo "                            </div>
                        </div>
                        <div class=\"panel-footer\">
                            <button href=\"#\" class=\"btn btn-success\" id=\"addjusti\" style=\"margin-bottom: 0px;margin-left: 5px\">Ajouter Justificatif</button>
                        </div>
                    </div>


                </div>
                <div class=\"panel-footer\">
                    <div class=\"form-group\" style=\"margin: 0px;padding: 0px\">
                        ";
        // line 638
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "Sauvegarder", array()), 'widget');
        echo "
                        <div id=\"DeBug\" class=\"hidden\">
                            ";
        // line 640
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_end');
        echo "
                            </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

";
        
        $__internal_215d37ec8414cd76bac0c4006750653a7bd7f8f7fc0540c495a5c325a8eac4a8->leave($__internal_215d37ec8414cd76bac0c4006750653a7bd7f8f7fc0540c495a5c325a8eac4a8_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:RenseignerFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  893 => 640,  888 => 638,  875 => 627,  869 => 626,  867 => 625,  859 => 620,  850 => 616,  846 => 615,  838 => 612,  831 => 609,  827 => 608,  823 => 607,  820 => 606,  818 => 605,  803 => 592,  797 => 591,  795 => 590,  788 => 586,  781 => 582,  776 => 580,  770 => 577,  766 => 576,  760 => 573,  752 => 570,  745 => 567,  741 => 566,  732 => 565,  730 => 564,  715 => 551,  709 => 550,  707 => 549,  699 => 544,  692 => 540,  687 => 538,  681 => 535,  675 => 532,  667 => 529,  660 => 526,  656 => 525,  648 => 524,  636 => 515,  630 => 512,  624 => 511,  617 => 506,  615 => 505,  590 => 482,  584 => 481,  572 => 480,  146 => 61,  142 => 60,  138 => 59,  115 => 39,  111 => 38,  107 => 37,  87 => 20,  82 => 18,  77 => 16,  73 => 15,  69 => 14,  64 => 12,  59 => 10,  55 => 9,  50 => 7,  45 => 4,  39 => 3,  32 => 1,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'TestBundle::layout.html.twig' %}*/
/* {% set i = 1 %}*/
/* {% block stylesheets %}*/
/* */
/* */
/* */
/*     <link rel="stylesheet" href="{{ asset('bundles/framework/bootstrap/css/bootstrap.min.css') }}">*/
/* */
/*     <link rel="stylesheet" href="{{ asset('bundles/framework/theme/css/custom-theme/jquery-ui-1.10.0.custom.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/framework/theme/assets/css/font-awesome.min.css') }}">*/
/* */
/*     <link rel="stylesheet" href="{{asset('bundles/framework/css/StyleRenseigner.css')  }}">*/
/* */
/*     <script src="{{asset('bundles/framework/theme/assets/js/jquery-1.9.0.min.js')  }}"></script>*/
/*     <script src="{{asset('bundles/framework/theme/assets/js/bootstrap.min.js')  }}"></script>*/
/*     <script src="{{asset('bundles/framework/theme/assets/js/jquery-ui-1.10.0.custom.min.js')  }}"></script>*/
/* */
/*     <script src="{{asset('bundles/framework/theme/assets/js/google-code-prettify/prettify.js')  }}"></script>*/
/* */
/*     <script src="{{ asset('bundles/framework/bootstrap/js/jquery.easing.js')}}"></script>*/
/* */
/* */
/* */
/* */
/* */
/*     <!-- $Montant->addLigneHorForfait(new LigneHorForfait());*/
/*         $Montant->addLigneForfai(new LigneForfais());*/
/*          -->*/
/*     <script>*/
/* */
/*         jQuery(document).ready(function()  {*/
/* */
/* */
/* */
/* */
/* */
/*             var LigneFCount = '{{ form1.LigneForFais|length }}';*/
/*             var LigneJCount = '{{ form1.justificatif|length }}';*/
/*             var LigneHCount = '{{ form1.LigneHorForFait|length }}';*/
/*             var LigneHTab = [];*/
/*             var LigneJTab = [];*/
/*             var LigneFTab = [];*/
/*             for (i = 0;i<LigneJCount;i++ ){*/
/*                 LigneJTab.push(i);*/
/*             }*/
/*             for (i = 0;i<LigneFCount;i++ ){*/
/*                 LigneFTab.push(i);*/
/*             }*/
/*             for (i = 0;i<LigneHCount;i++ ){*/
/*                 LigneHTab.push(i);*/
/*             }*/
/* */
/* */
/*             var val;*/
/* */
/*             $('#fiche_frais_Sauvegarder').click(function (event) {*/
/* */
/*                 $('.erreur').remove();*/
/*                 var Datej = {{ Datej }};*/
/*                 var Datem = {{ Datem }};*/
/*                 var Datey = {{ Datey }};*/
/* */
/*                 var bon = true;*/
/*                 var bondate = true;*/
/*                 var bondate2 = true;*/
/*                 var bon2 = true;*/
/* */
/* */
/* */
/*                 for (var i=0;i<LigneHCount;i++){*/
/* */
/*                     $nb = LigneHTab[i];*/
/* */
/*                     var libelle = $('#fiche_frais_LigneHorForFait_'+$nb+'_libelle').val();*/
/*                     var montant = $('#fiche_frais_LigneHorForFait_'+$nb+'_montant');*/
/*                     var jour = $('#fiche_frais_LigneHorForFait_'+$nb+'_date_day').val();*/
/*                     var mois = $('#fiche_frais_LigneHorForFait_'+$nb+'_date_month').val();*/
/*                     var annee = $('#fiche_frais_LigneHorForFait_'+$nb+'_date_year').val();*/
/* */
/* */
/* */
/*                     $('#fiche_frais_LigneHorForFait_'+$nb+'_date_day').css("borderColor","#9d9d9d");*/
/*                     $('#fiche_frais_LigneHorForFait_'+$nb+'_date_month').css("borderColor","#9d9d9d");*/
/*                     $('#fiche_frais_LigneHorForFait_'+$nb+'_date_year').css("borderColor","#9d9d9d");*/
/*                     $('#TitreH'+i).css("color","#9d9d9d");*/
/*                     $('#fiche_frais_LigneHorForFait_'+$nb+'_libelle').css("borderColor","#9d9d9d");*/
/*                     $('#fiche_frais_LigneHorForFait_'+$nb+'_montant').css("borderColor","#9d9d9d");*/
/* */
/*                     VeriNombre(montant);*/
/* */
/*                     var test = true;*/
/*                     if (libelle.trim() == ""){*/
/*                         $('#fiche_frais_LigneHorForFait_'+$nb+'_libelle').css("borderColor","red");*/
/*                         $('#TitreH'+$nb).css("color","red");*/
/*                         bon = false*/
/*                     }*/
/*                     //Verif date hor forfait*/
/*                     if (annee != Datey){*/
/*                         if (annee > Datey){*/
/*                             bondate2 = false;*/
/*                             test = false;*/
/*                         }else{*/
/*                             if (annee < Datey){*/
/*                                 if (annee < Datey-1){*/
/*                                     bondate2 = false;*/
/*                                     test = false;*/
/*                                 }else{*/
/*                                     if (mois < Datem){*/
/*                                         bondate2 = false;*/
/*                                         test = false;*/
/*                                     }*/
/*                                 }*/
/*                             }*/
/*                         }*/
/*                     }else{*/
/*                         if (mois > Datem){*/
/*                             bondate2 = false;*/
/*                             test = false;*/
/*                         }else{*/
/*                             if (mois == Datem && jour > Datej){*/
/*                                 bondate2 = false;*/
/*                                 test = false;*/
/*                             }*/
/*                         }*/
/*                     }*/
/* */
/* */
/*                     if (test == false){*/
/*                         $('#fiche_frais_LigneHorForFait_'+$nb+'_date_day').css("borderColor","red");*/
/*                         $('#fiche_frais_LigneHorForFait_'+$nb+'_date_month').css("borderColor","red");*/
/*                         $('#fiche_frais_LigneHorForFait_'+$nb+'_date_year').css("borderColor","red");*/
/*                         $('#TitreH'+$nb).css("color","9d9d9d");*/
/*                     }*/
/*                 }*/
/*                 for (var i=0;i<LigneFCount;i++){*/
/*                     $nb = LigneFTab[i];*/
/* */
/*                     var jour = $('#fiche_frais_LigneForFais_'+$nb+'_date_day').val();*/
/*                     var mois = $('#fiche_frais_LigneForFais_'+$nb+'_date_month').val();*/
/*                     var annee = $('#fiche_frais_LigneForFais_'+$nb+'_date_year').val();*/
/*                     var quantite = $('#fiche_frais_LigneForFais_'+$nb+'_quantite');*/
/* */
/* */
/* */
/*                     $('#fiche_frais_LigneForFais_'+$nb+'_quantite').css("borderColor","#9d9d9d");*/
/* */
/*                     $('#fiche_frais_LigneForFais_'+$nb+'_date_day').css("borderColor","#9d9d9d");*/
/*                     $('#fiche_frais_LigneForFais_'+$nb+'_date_month').css("borderColor","#9d9d9d");*/
/*                     $('#fiche_frais_LigneForFais_'+$nb+'_date_year').css("borderColor","#9d9d9d");*/
/*                     $('#TitreF'+$nb).css("color","#9d9d9d");*/
/* */
/*                     VeriNombre(quantite);*/
/* */
/*                     var test = true;*/
/* */
/* */
/*                     //Verif date hor forfait*/
/*                     if (annee != Datey){*/
/*                         if (annee > Datey){*/
/*                             bondate2 = false;*/
/*                             test = false;*/
/*                         }else{*/
/*                             if (annee < Datey){*/
/*                                 if (annee < Datey-1){*/
/*                                     bondate2 = false;*/
/*                                     test = false;*/
/*                                 }else{*/
/*                                     if (mois < Datem){*/
/*                                         bondate2 = false;*/
/*                                         test = false;*/
/*                                     }*/
/*                                 }*/
/*                             }*/
/*                         }*/
/*                     }else{*/
/*                         if (mois > Datem){*/
/*                             bondate2 = false;*/
/*                             test = false;*/
/*                         }else{*/
/*                             if (mois == Datem && jour > Datej){*/
/*                                 bondate2 = false;*/
/*                                 test = false;*/
/*                             }*/
/*                         }*/
/*                     }*/
/* */
/*                     if (test == false){*/
/*                         $('#fiche_frais_LigneForFais_'+$nb+'_date_day').css("borderColor","red");*/
/*                         $('#fiche_frais_LigneForFais_'+$nb+'_date_month').css("borderColor","red");*/
/*                         $('#fiche_frais_LigneForFais_'+$nb+'_date_year').css("borderColor","red");*/
/*                         $('#TitreF'+$nb).css("color","red");*/
/*                     }*/
/* */
/*                 }*/
/* */
/* */
/* */
/*                 if (bon == false || bondate == false || bondate2 == false || bon2 == false){*/
/* */
/*                     event.preventDefault();*/
/* */
/*                     if (bon == false){*/
/*                         $('#InfoH').append('<p class="erreur" style="text-align : left;color: red">Champ non remplie</p>');*/
/*                     }*/
/*                     if (bondate == false){*/
/*                         $('#InfoH').append('<p class="erreur" style="text-align : left;color: red">Date Incorect</p>')*/
/*                     }*/
/*                     if (bondate2 == false){*/
/*                         $('#InfoF').append('<p class="erreur" style="text-align : left;color: red">Date Incorect</p>')*/
/*                     }*/
/*                 }*/
/* */
/* */
/*             });*/
/* */
/*             function VeriNombre(source)*/
/*             {*/
/*                 var value = source.val(); //ici, sa valeur*/
/* */
/*                 if (isNaN(parseFloat(value))) //cas où la valeur n'est pas du tout un nombre*/
/*                 // Dans ce cas, parseFloat(value) est égal à NaN*/
/*                 {*/
/*                     source.val(""); // la valeur devient nulle*/
/* */
/*                 }*/
/*                 else if (value != parseInt(value) + ".") // Cas ou ce n'est pas un nombre avec juste un point derrière (pour la virgule)*/
/*                 {*/
/*                     if (parseFloat(value) > 0) {*/
/*                         source.val(parseFloat(value));*/
/* */
/*                         return;*/
/*                     }*/
/*                 }*/
/* */
/*                 source.css("borderColor","red");*/
/*                 bon2 = false;*/
/*             }*/
/* */
/* */
/*             $('#dialog-confirm').dialog({*/
/*                 autoOpen: false,*/
/*                 width: 600,*/
/*                 buttons: {*/
/*                     "oui": function () {*/
/*                         $(this).dialog("close");*/
/*                         $('#F'+val).remove();*/
/* */
/*                         LigneFTab.splice(LigneFTab.indexOf(parseInt(val)-1),1);*/
/*                         LigneFCount --;*/
/*                         return true;*/
/*                     },*/
/*                     "non": function () {*/
/*                         $(this).dialog("close");*/
/*                         return false;*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*             $('#dialog-confirm2').dialog({*/
/*                 autoOpen: false,*/
/*                 width: 600,*/
/*                 buttons: {*/
/*                     "oui": function () {*/
/*                         $(this).dialog("close");*/
/*                         $('#H'+val).remove();*/
/*                         LigneHTab.splice(LigneHTab.indexOf(parseInt(val)-1),1);*/
/*                         LigneHCount --;*/
/*                         return true;*/
/* */
/*                     },*/
/*                     "non": function () {*/
/*                         $(this).dialog("close");*/
/*                         return false;*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*             $('#dialog-confirm3').dialog({*/
/*                 autoOpen: false,*/
/*                 width: 600,*/
/*                 buttons: {*/
/*                     "oui": function () {*/
/*                         $(this).dialog("close");*/
/*                         $('#J'+val).remove();*/
/* */
/*                         LigneJTab.splice(LigneJTab.indexOf(parseInt(val)-1),1);*/
/*                         LigneJCount --;*/
/*                         return true;*/
/*                     },*/
/*                     "non": function () {*/
/*                         $(this).dialog("close");*/
/*                         return false;*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*             $('#addLF').click(function(event){*/
/*                 event.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                 addCategory();*/
/*                 return false;*/
/*             });*/
/*             $('#addLH').click(function(event){*/
/*                 event.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                 addCategory2();*/
/*                 return false;*/
/*             });*/
/* */
/*             $('.supF').click(function(event){*/
/*                 event.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                 val = $(this).attr("name");*/
/*                 $('#dialog-confirm').dialog('open');*/
/*                 return false;;*/
/*             });*/
/*             $('.supH').click(function(event){*/
/*                 event.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                 val = $(this).attr("name");*/
/*                 $('#dialog-confirm2').dialog('open');*/
/*                 return false;;*/
/*             });*/
/*             $('.supJ').click(function(event){*/
/*                 event.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                 val = $(this).attr("name");*/
/*                 $('#dialog-confirm3').dialog('open');*/
/*                 return false;;*/
/*             });*/
/*             $('#addjusti').click(function (event) {*/
/*                 event.preventDefault();*/
/*                 addCategory3();*/
/*                 return false;*/
/*             });*/
/* */
/*             // La fonction qui ajoute un Justificatif*/
/*             function addCategory3() {*/
/*                 var emailList = jQuery('#toutJ');*/
/*                 LigneJCount ++;*/
/*                 if (LigneJTab.length == 0){*/
/*                     $nb = 1;*/
/*                 }else{*/
/*                     $nb = LigneJTab[LigneJTab.length - 1] + 2;*/
/*                 }*/
/*                 LigneJTab.push(($nb-1));*/
/*                 var newWidget = jQuery('<div class="form-group" id="J'+$nb+'" style="margin-bottom: 5px;"></div>')*/
/*                 var newrow = jQuery('<div class="row" id="O'+$nb+'" style="margin: auto"> <div class="col-md-1"> <h1 style="margin-top: 0px" id="TitreJ'+($nb-1)+'">'+$nb+'- </h1> </div>')*/
/* */
/*                 var newURL = jQuery('<div class="col-md-9"></div>').html($('#toutJ').attr('URL-prototype').replace(/__name__/g,$nb-1));*/
/* */
/*                 newrow.append(newURL);*/
/*                 newWidget.append(newrow);*/
/* */
/*                 emailList.append(newWidget);*/
/* */
/* */
/* */
/*                 var test = jQuery('#O'+$nb);*/
/*                 addDeleteLink3(test,$nb);*/
/*             }*/
/* */
/*             // La fonction qui ajoute Une Ligne Hor Forfait*/
/*             function addCategory2() {*/
/*                 var emailList = jQuery('#toutH');*/
/*                 LigneHCount ++;*/
/*                 if (LigneHTab.length == 0){*/
/*                     $nb = 1;*/
/*                 }else{*/
/*                     $nb = LigneHTab[LigneHTab.length - 1] + 2;*/
/*                 }*/
/*                 LigneHTab.push(($nb-1));*/
/*                 var newWidget = jQuery('<div class="form-group" id="H'+$nb+'" style="margin-bottom: 5px;"></div>')*/
/*                 var newrow = jQuery('<div class="row" id="G'+$nb+'" style="margin: auto"> <div class="col-md-1"> <h1 style="margin-top: 0px" id="TitreH'+($nb-1)+'">'+$nb+'- </h1> </div>')*/
/* */
/*                 var newMontant = jQuery('<div class="col-md-2"></div>').html($('#toutH').attr('montant-proto').replace(/__name__/g,$nb-1));*/
/*                 var newDate = jQuery('<div class="col-md-4"></div>').html($('#toutH').attr('date-proto').replace(/__name__/g,$nb-1));*/
/*                 var newlibelle = jQuery('<div class="col-md-3"></div>').html($('#toutH').attr('libelle-proto').replace(/__name__/g,$nb-1));*/
/* */
/*                 newrow.append(newMontant);*/
/*                 newrow.append(newlibelle);*/
/*                 newrow.append(newDate);*/
/*                 newWidget.append(newrow);*/
/* */
/*                 emailList.append(newWidget);*/
/* */
/* */
/* */
/*                 var test = jQuery('#G'+$nb);*/
/*                 addDeleteLink2(test,$nb);*/
/*             }*/
/* */
/*             // La fonction qui ajoute une Ligne Forfait*/
/*             function addCategory() {*/
/*                 var emailList = jQuery('#tout');*/
/*                 LigneFCount ++;*/
/*                 if (LigneFTab.length == 0){*/
/*                     $nb = 1;*/
/*                 }else{*/
/*                     $nb = LigneFTab[LigneFTab.length - 1] + 2;*/
/*                 }*/
/* */
/*                 LigneFTab.push(($nb-1));*/
/*                 var newWidget = jQuery('<div class="form-group" id="F'+$nb+'" style="margin-bottom: 5px;"></div>');*/
/*                 var newrow = jQuery('<div class="row" id="D'+$nb+'" style="margin: auto"> <div class="col-md-1"> <h1 style="margin-top: 0px" id="TitreF'+($nb-1)+'">'+$nb+'- </h1> </div> </div>')*/
/* */
/*                 var newDate = jQuery('<div class="col-md-4"></div>').html($('#tout').attr('date-prototype').replace(/__name__/g,$nb-1));*/
/*                 var newQuantite = jQuery('<div class="col-md-3"></div>').html($('#tout').attr('quantite-prototype').replace(/__name__/g,$nb-1));*/
/*                 var newFraiforfait = jQuery('<div class="col-md-2"></div>').html($('#tout').attr('Fraisforfait-prototype').replace(/__name__/g,$nb-1));*/
/* */
/*                 newrow.append(newFraiforfait);*/
/*                 newrow.append(newQuantite);*/
/*                 newrow.append(newDate);*/
/*                 newWidget.append(newrow);*/
/* */
/*                 emailList.append(newWidget);*/
/* */
/* */
/*                 var test = jQuery('#D'+$nb);*/
/*                 addDeleteLink(test,$nb);*/
/*             }*/
/* */
/*             // La fonction qui ajoute un lien de suppression d'un Justificatif*/
/*             function addDeleteLink3($prototype,$nombre) {*/
/*                 // Création du lien*/
/*                 $deleteLink = $('<div class="col-md-2" value="'+($nombre)+'" ><a href="#" class="btn btn-danger">Supprimer</a></div>');*/
/* */
/*                 // Ajout du lien*/
/*                 $prototype.append($deleteLink);*/
/* */
/*                 // Ajout du listener sur le clic du lien*/
/*                 $deleteLink.click(function(e) {*/
/*                     $nombre = $(this).attr("value");*/
/*                     $('#J'+$nombre).remove();*/
/*                     e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                     LigneJTab.splice(LigneJTab.indexOf(parseInt($nombre)-1),1);*/
/*                     LigneJCount --;*/
/*                     return false;*/
/*                 });*/
/*             }*/
/* */
/*             // La fonction qui ajoute un lien de suppression d'une catégorie*/
/*             function addDeleteLink2($prototype,$nombre) {*/
/*                 // Création du lien*/
/*                 $deleteLink = $('<div class="col-md-2" value="'+($nombre)+'" ><a href="#" class="btn btn-danger">Supprimer</a></div>');*/
/* */
/*                 // Ajout du lien*/
/*                 $prototype.append($deleteLink);*/
/* */
/*                 // Ajout du listener sur le clic du lien*/
/*                 $deleteLink.click(function(e) {*/
/*                     $nombre = $(this).attr("value");*/
/*                     $('#H'+$nombre).remove();*/
/*                     e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                     LigneHTab.splice(LigneHTab.indexOf(parseInt($nombre)-1),1);*/
/*                     LigneHCount --;*/
/*                     return false;*/
/*                 });*/
/*             }*/
/*             // La fonction qui ajoute un lien de suppression d'une catégorie*/
/*             function addDeleteLink($prototype,$nombre) {*/
/*                 // Création du lien*/
/*                 $deleteLink2 = $('<div class="col-md-2" value="'+($nombre)+'" ><a href="#" class="btn btn-danger">Supprimer</a></div>');*/
/* */
/*                 // Ajout du lien*/
/*                 $prototype.append($deleteLink2);*/
/* */
/*                 // Ajout du listener sur le clic du lien*/
/*                 $deleteLink2.click(function(e) {*/
/*                     $nombre = $(this).attr("value");*/
/*                     $('#F'+$nombre).remove();*/
/* */
/*                     e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                     LigneFTab.splice(LigneFTab.indexOf(parseInt($nombre)-1),1);*/
/*                     LigneFCount --;*/
/*                     return false;*/
/*                 });*/
/*             }*/
/* */
/* */
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* {% block title %}Ajout Fiche Frais{% endblock %}*/
/* {% block body %}*/
/* */
/*     <!--Jquery Fenetre Dialog -->*/
/*     <div id="dialog-confirm" title="Confirmation de la suppression" style="display:none;">*/
/*         <p>*/
/*             <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>*/
/*             Etes-vous sûr de vouloir supprimer cet élément ?*/
/*         </p>*/
/*     </div>*/
/* */
/*     <!--Jquery Fenetre Dialog -->*/
/*     <div id="dialog-confirm2" title="Confirmation de la suppression" style="display:none;">*/
/*         <p>*/
/*             <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>*/
/*             Etes-vous sûr de vouloir supprimer cet élément ?*/
/*         </p>*/
/*     </div>*/
/*     <!--Jquery Fenetre Dialog -->*/
/*     <div id="dialog-confirm3" title="Confirmation de la suppression" style="display:none;">*/
/*         <p>*/
/*             <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>*/
/*             Etes-vous sûr de vouloir supprimer ce Justificatif ?*/
/*         </p>*/
/*     </div>*/
/*     {% form_theme form1 'bootstrap_3_layout.html.twig' %}*/
/* */
/*     <div class="row " style="margin-left: 0px;margin-right: 0px;">*/
/*         <div class="col-md-offset-3 col-md-8" style="padding-top: 20px">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h1 style="margin-top: 5px;margin-bottom: 0px">Fiche Frais de {{DateMois}} {{DateAnne}}</h1>*/
/*                     <p style="margin-top: 0px;text-align: left;margin-bottom: 5px">Montant Valide : {{ MontantValide }} €</p>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {{ form_start(form1) }}*/
/* */
/*                     <div class="panel panel-default" style="color: #9d9d9d;background-color: #3c3c3c">*/
/*                         <div class="panel-heading" style="color: #9d9d9d;background-color: #3c3c3c">*/
/*                             <h2 style="font-size: 20px; padding: 0px;margin: 0px;" id="InfoF">Frais Forfait : </h2>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="panel-body" style="max-height: 230px;min-height: 230px; overflow-y:scroll;">*/
/*                             <div id="tout" date-prototype="{{ form_widget(form1.LigneForFais.vars.prototype.date)|e('html_attr')}}" quantite-prototype="{{ form_widget(form1.LigneForFais.vars.prototype.quantite)|e('html_attr') }}" Fraisforfait-prototype="{{ form_widget(form1.LigneForFais.vars.prototype.FraisForfais)|e('html_attr') }}">*/
/*                                 {% for UneLigne in form1.LigneForFais %}*/
/*                                     <div class="form-group" id="F{{ i }}" style="margin-bottom: 5px;">*/
/*                                         <div class="row" style="margin: auto">*/
/*                                             <div class="col-md-1">*/
/*                                                 <h1 style="margin-top: 0px" id="TitreF{{ i-1 }}">{{ i }}- </h1>*/
/*                                             </div>*/
/*                                             <div class="col-md-2">*/
/*                                                 {{ form_widget(UneLigne.FraisForfais) }}*/
/*                                             </div>*/
/*                                             <div class="col-md-3">*/
/*                                                 {{ form_widget(UneLigne.quantite, {'attr': {'style': 'text-align: left'}}) }}*/
/*                                             </div>*/
/*                                             <div class="col-md-4">*/
/*                                                 {{ form_widget(UneLigne.date) }}*/
/*                                                 <div id="DeBug" class="hidden">*/
/*                                                 {{ form_widget(UneLigne.valide,{'attr': {'class': 'hidden'}}) }}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col-md-2">*/
/*                                                 <button  name="{{ i }}" class="supF btn btn-danger" >Supprimer</button>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                                     {% set i = i+1 %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="panel-footer">*/
/*                             <button href="#" class="btn btn-success" id="addLF" style="margin-bottom: 0px;margin-left: 5px">Ajout Frais Forfait</button>*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="panel panel-default" style="color: #9d9d9d;background-color: #3c3c3c">*/
/*                         <div class="panel-heading" style="color: #9d9d9d; background-color: #3c3c3c">*/
/*                             <h2 style="font-size: 20px; padding: 0px;margin: 0px;" id="InfoH">Frais Hors Forfait : </h2>*/
/*                         </div>*/
/*                         <div class="panel-body" style="max-height: 230px;min-height: 230px; overflow-y:scroll;">*/
/*                             {% set i = 1 %}*/
/*                             <div id="toutH" libelle-proto="{{ form_widget(form1.LigneHorForFait.vars.prototype.libelle)|e('html_attr') }}" date-proto="{{ form_widget(form1.LigneHorForFait.vars.prototype.date)|e('html_attr') }}" montant-proto="{{ form_widget(form1.LigneHorForFait.vars.prototype.montant)|e('html_attr') }}">*/
/*                                 {% for UneLigne in form1.LigneHorForFait %}*/
/*                                     <div class="form-group" id="H{{ i }}" style="margin-bottom: 5px;">*/
/*                                         <div class="row" style="margin: auto">*/
/*                                             <div class="col-md-1">*/
/*                                                 <h1 style="margin-top: 0px" id="TitreH{{ i-1 }}">{{ i }}- </h1>*/
/*                                             </div>*/
/*                                             <div class="col-md-2">*/
/*                                                 {{ form_widget(UneLigne.montant) }}*/
/*                                             </div>*/
/*                                             <div class="col-md-3">*/
/*                                                 {{ form_errors(UneLigne.libelle) }}*/
/*                                                 {{ form_widget(UneLigne.libelle, {'attr': {'style': 'text-align: left'}}) }}*/
/*                                             </div>*/
/*                                             <div class="col-md-4">*/
/*                                                 {{ form_widget(UneLigne.date) }}*/
/*                                                 <div id="DeBug" class="hidden">*/
/*                                                 {{ form_widget(UneLigne.valide,{'attr': {'class': 'hidden'}}) }}*/
/*                                                     </div>*/
/*                                             </div>*/
/*                                             <div class="col-md-2">*/
/*                                                 <button  name="{{ i }}" class="supH btn btn-danger" >Supprimer</button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     {% set i = i+1 %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="panel-footer">*/
/*                             <button href="#" class="btn btn-success" id="addLH" style="margin-bottom: 0px;margin-left: 5px">Ajout Frais Hor Forfait</button>*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="panel panel-default" style="color: #9d9d9d;background-color: #3c3c3c">*/
/*                         <div class="panel-heading" style="color: #9d9d9d;background-color: #3c3c3c">*/
/*                             <h2 style="font-size: 20px; padding: 0px;margin: 0px;" id="InfoF">Justificatif : </h2>*/
/* */
/*                         </div>*/
/*                         {% set i = 1 %}*/
/*                         <div class="panel-body" style="max-height: 230px;min-height: 230px; overflow-y:scroll;">*/
/*                             <div id="toutJ" URL-prototype="{{ form_widget(form1.justificatif.vars.prototype.File)|e('html_attr')}}">*/
/*                                 {% for UneLigne in LesJustificatif %}*/
/*                                     <div class="form-group" id="J{{ i }}" style="margin-bottom: 5px;">*/
/*                                         <div class="row" style="margin: auto">*/
/*                                             <div class="col-md-1">*/
/*                                                 <h1 style="margin-top: 0px" id="TitreJ{{ i-1 }}">{{ i }}- </h1>*/
/*                                             </div>*/
/*                                             <div class="col-md-9" style="text-align: center;margin-top: 7px">*/
/*                                                 {{ form_widget(form1.justificatif[i-1].File,{'attr': {'class': 'hidden'}}) }}*/
/*                                                 <a  href="{{ asset('Uplaod/Jusificatif/'~ UneLigne.getId() ~'/' ~ UneLigne.getURL()) }}" target="_blank">Voir Justificatif {{ i }}</a>*/
/*                                             </div>*/
/* */
/*                                             <div class="col-md-2">*/
/*                                                 <button  name="{{ i }}" class="supJ btn btn-danger" >Supprimer</button>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                                     {% set i = i+1 %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="panel-footer">*/
/*                             <button href="#" class="btn btn-success" id="addjusti" style="margin-bottom: 0px;margin-left: 5px">Ajouter Justificatif</button>*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     <div class="form-group" style="margin: 0px;padding: 0px">*/
/*                         {{ form_widget(form1.Sauvegarder) }}*/
/*                         <div id="DeBug" class="hidden">*/
/*                             {{ form_end(form1) }}*/
/*                             </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
