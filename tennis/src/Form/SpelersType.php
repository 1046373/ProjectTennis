<?php

namespace App\Form;

use App\Entity\Spelers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpelersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Voornaam')
            ->add('Tussenvoegsels')
            ->add('Achternaam')
            ->add('Schoolnaam')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Spelers::class,
        ]);
    }
}
