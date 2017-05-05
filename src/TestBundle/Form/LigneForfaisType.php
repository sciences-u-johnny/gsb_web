<?php

namespace TestBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TestBundle\Entity\FraisForfais;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class LigneForfaisType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
            ->add('FraisForfais',EntityType::class, array(
                'class' => FraisForfais::class,
                'choice_label' => 'id',
            ))
            ->add('quantite',IntegerType::class,array('attr' => array ('placeholder' => "Quantite")))


            ->add('date',DateType::class,array(
                'format'=>'dd MM yyyy',
                'placeholder' => array(
                    'year'=> 'Année','month'=>'Mois','day'=>'Jour'
                ),
            ))
            ->add('valide')



        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TestBundle\Entity\LigneForfais'
        ));
    }

}
