<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SatisfactionRatingFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('score', ChoiceType::class, [
                'label' => false,
                // 'required' => false,
                'multiple' => false,
                'expanded' => true,
                'choices' => [
                    '5' => 5,
                    '4' => 4,
                    '3' => 3,
                    '2' => 2,
                    '1' => 1,
                ],
                'choice_label' => function ($choice, $key, $value) {
                    return '★';
                }
            ])
            ->add('comment', TextareaType::class, [
                'attr' => [
                    'class' => 'rate-describe',
                    'row' => 2,
                    'placeholder' => 'Décrivez votre expérience',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
