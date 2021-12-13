<?php

namespace App\Form;

use App\Entity\SalleDeMariage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ResevationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class,[

            'label'=>'nom'
        ])
        ->add('email', TextType::class,[

            'label'=>'email'
        ])
        ->add('date', DateType::class,[

            'label'=>'date'
        ])
        ->add('time', TimeType::class,[

            'label'=>'time'
        ])
    ->add('budget', TextType::class,[

        'label'=>'budget'
    ])
    
    ->add('salle_de_mariage', EntityType::class,['class'=>SalleDeMariage::class,
         'choice_label'=>'nom',
        'label'=>'salle de mariage'
    ])

    

    ->add('submit', SubmitType::class,[
        'label'=> "payer",
        'attr' => [

            'class'=>'btn w-100 text-white btn-lg bg-dark',
        ]
    ])
    ->getForm();
;
}




    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
