<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle',TextType::class,
            ['label'=> 'libelle', 'attr' => ['placeholder' =>'libelle produit']])
            ->add('prix',IntegerType::class,
            ['label'=> 'prix', 'attr' => ['placeholder' =>'prix produit']])
            ->add('quantite',IntegerType::class,
            ['label'=> 'quantite', 'attr' => ['placeholder' =>'quantite produit']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
