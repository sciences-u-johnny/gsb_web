<?php

namespace TestBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class VisiteurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('ville')
            ->add('cP')
            ->add('email', EmailType::class)
            ->add('enabled')
            ->add('username', TextType::class)
            ->add('plainPassword',RepeatedType::class,array(
                'type'=> PasswordType::class,
                'invalid_message'=> 'Mdp incorrects',
                'required'=>true,
                'first_options'=>array('label'=>'Mot de passe'),
                'second_options'=>array('label'=>'Repeter mot de passe'),
            ))
            ->add('roles',ChoiceType::class,array(
                'choices'=>array(
                    'ROLE_ADMIN'=>'ROLE_ADMIN',
                    'ROLE_COMPTABLE'=>'ROLE_COMPTABLE',
                    'ROLE_USER'=>'ROLE_UTILISATEUR',
                ),
                'expanded'=>true,
                'multiple'=>true,
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
            'data_class' => 'TestBundle\Entity\Visiteur'
        ));
    }
}
