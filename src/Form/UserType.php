<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,  ['label' => 'Votre Email', 'attr' =>['placeholder' => 'Remplissez votre Email ici']])
            ->add('lastname', TextType::class, ['label' => 'Votre nom', 'attr' =>['placeholder' => 'Remplissez votre nom ici']])
            ->add('firstname', TextType::class, ['label' => 'Votre prénom', 'attr' =>['placeholder' => 'Remplissez votre prénom ici']])
            ->add('password', PasswordType::class)
            ->add('Valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
