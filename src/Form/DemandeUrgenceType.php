<?php

namespace App\Form;

use App\Entity\DemandeUrgence;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class DemandeUrgenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('adresse_u',TextType::class)
        ->add('cas_urgence',TextareaType::class)
        ->add('date',DateType::class, [
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
        ])
            ->add('hopital')
            ->add('patient')
            ->add('medecin')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DemandeUrgence::class,
        ]);
    }
}
