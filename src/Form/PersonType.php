<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatableMessage;

class PersonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => new TranslatableMessage('person.firstName', [], 'person'),
            ])
            ->add('lastName', TextType::class, [
                'label' => new TranslatableMessage('person.lastName', [], 'person')
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'label' => new TranslatableMessage('person.description', [], 'person')
            ])
            ->add('submit', SubmitType::class, [
                'label' => new TranslatableMessage('person.submit', [], 'person')
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([

        ]);
    }
}
