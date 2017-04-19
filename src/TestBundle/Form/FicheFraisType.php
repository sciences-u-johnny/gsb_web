<?php

namespace TestBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TestBundle\Entity\FicheFrais;
use TestBundle\Entity\Justificatif;
use TestBundle\Entity\LigneForfais;

class FicheFraisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
           ->add('LigneHorForFait',CollectionType::class,array(
            'entry_type' => LigneHorForfaitType::class,
            'allow_add' => true,
            'allow_delete' => true,
           ))
            ->add('LigneForFais',CollectionType::class,array(
                'entry_type' => LigneForfaisType::class,
                'prototype' => true,
                'allow_add' => true,
                'allow_delete' => true,
        ))
            ->add('justificatif',CollectionType::class,array(
                'entry_type' => JustificatifType::class,
                'allow_add' => true,
                'allow_delete' => true,
            ))
            ->add("Sauvegarder",SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TestBundle\Entity\FicheFrais'
        ));
    }

    public function add(FicheFrais $test){
        $test->addLigneForfai(new LigneForfais());

    }
}
