<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class CreerCompteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login',TextType::class,
            ['label'=> 'login', 'attr' => ['placeholder' =>'login']])
            ->add('motDePasse',PasswordType::class,
            ['label'=> 'mot de passe', 'attr' => ['placeholder' =>'votre mot de passe']])
            ->add('nom',TextType::class,
            ['label'=> 'nom', 'attr' => ['placeholder' =>'votre nom']])
            ->add('prenom',TextType::class,
            ['label'=> 'prenom', 'attr' => ['placeholder' =>'votre prenom']])
            ->add('anniversaire',DateType::class,
            ['label'=> 'date de naissance', 'attr' => ['placeholder' =>'votre date de naissance'],
            'format' => 'dd-MM-yyyy','years' => range(1975,2016)
            ])
           
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
