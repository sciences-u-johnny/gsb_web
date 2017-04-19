<?php
/**
 * Created by PhpStorm.
 * User: alan9
 * Date: 25/03/2017
 * Time: 14:20
 */

namespace TestBundle\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TestBundle\Entity\Etat;

class RechercheUtilisateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
            ->add('nom', TextType::class, array(
                    'required' => false,
                    //'placeholder' => 'Nom',
                )
            )
            ->add('prenom',TextType::class, array(
                    'required' => false,
                    //'placeholder' => 'Prenom',
                )
            )
            ->add('mois',ChoiceType::class,
                array(
                    'choices'=> range('01','12'),
                    'choices_as_values' => true,
                    'choice_label' => function ($choice) {
                        return $choice;
                    },
                    'required'    => false,
                    'placeholder' => '-- Mois --',
                    'empty_data'  => null
                )
            )
            ->add('annee',ChoiceType::class,
                array(
                    'choices'=> range(date('Y')-10, date('Y')),
                    'choices_as_values' => true,
                    'choice_label' => function ($choice) {
                        return $choice;
                    },
                    'required'    => false,
                    'placeholder' => '-- Année --',
                    'empty_data'  => null
                )
            )


            ->add('etat', EntityType::class, array(

                    'class' => Etat::class,
                    'choice_label' => 'id',
                    'placeholder' => '-- Etat --',
                    'empty_data'  => null,
                    'required' => false,
                )
            )

            ->add('rechercher', SubmitType::class)
        ;
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
    }
}