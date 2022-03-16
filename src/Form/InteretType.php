<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InteretType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('mail', TextType::class, [
            'disabled' => true])
        ->add('interet', ChoiceType::class, [
            'expanded' => true,
            'multiple' => false,
            'choices'  => [
                "Oui j'en suis certain" => true,
                'Non je ne veux pas' => false,
            ],
        ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
