<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Service;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles', ChoiceType::class ,
            ['required' => true , 'multiple' => false , 'expanded' => false ,
              'choices' => ['Admin'=>'ROLE_ADMIN' , 'Medecin'=>'ROLE_MEDECIN' ,]
            ,] 
            )
            ->add('password' , PasswordType::class)
            ->add('nom')
            ->add('prenom')
            ->add('date_naissance' ,DateType::class,  [
                'widget' => 'choice',
                'format' => 'yyyy-MM-dd',
                'attr' => ['class' => 'js-datepicker'],
                'years' => range(date('Y') - 150, date('Y')),
            ])
            ->add('adresse')
            ->add('photo', FileType::class, [
                'label' => 'Image personnel',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpg',
                            'image/jpeg',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid Image',
                    ])
                ],
            ])
            ->add('telephone')
            ->add('dossier' , FileType::class, [
                'label' => 'Dossier Medical (PDF file)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            ])
            ->add('disponible_debut')
            ->add('disponible_fin')
            ->add('service')
        ;

    $builder->get('roles')->addModelTransformer(new CallbackTransformer(
        function ($rolesArray){
              return count($rolesArray) ? $rolesArray[0] : null;
        },
        function ($rolesString){
            return [$rolesString];
      }
    ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}