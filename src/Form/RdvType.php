<?php

namespace App\Form;

use App\Entity\Rdv;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class RdvType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('intervele_time' , choiceType::class ,
            ['required' => true , 'multiple' => false ,'expanded' => false,
            'choices' =>['8h-11h'=>'8h-11h','11h-14h'=>'11h-14h', '14h-17h'=>'14h-17h']])
            ->add('date_rdv')
            ->add('message')
           
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Rdv::class,
        ]);
    }
}