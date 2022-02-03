<?php

namespace App\Form;

use App\Entity\SearchFilter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'required' => false,
            ])
            ->add('job', TextType::class, [
                'required' => false,
            ])
            ->add('city', TextType::class, [
                'required' => false,
            ])
            ->add('perimeter', NumberType::class, [
                'required' => false,
            ])
            ->add('typeOfContract', TextType::class, [
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SearchFilter::class,
        ]);
    }
}
