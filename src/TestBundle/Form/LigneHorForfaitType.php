<?php

namespace TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LigneHorForfaitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class,array(
                'format'=>'dd MM yyyy',
                'placeholder' => array(
                    'year'=> 'Année','month'=>'Mois','day'=>'Jour'
                ),
            ))
            ->add('montant',IntegerType::class,array('attr' => array ('placeholder' => "Montant")))
            ->add('libelle',TextType::class,array('attr' => array ('placeholder' => "Description")))
            ->add('valide')
        ;

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TestBundle\Entity\LigneHorForfait'
        ));
    }
}
