<?php

namespace App\Form;

use App\Entity\Application;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApplicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('company', TextType::class, [
                'label' => 'Entreprise :',
            ])
            ->add('contactName', TextType::class, [
                'label' => 'Nom du contact :',
            ])
            ->add('email', TextType::class, [
                'label' => 'Email de contact :',
                'required' => false,
            ])
            ->add('phone', TextType::class, [
                'label' => 'N° de téléphone :',
                'required' => false,
            ])
            ->add('typeOfCompany', TextType::class, [
                'required' => false,
                'label' => "Type d'entreprise",
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
            ]);
            if ($options['hasResponse']) {
                $builder->add('hasResponse', CheckboxType::class, [
                    'required' => false,
                    'value' => 1,
                    'label' => 'A répondu :'
                ]);
            };
            if ($options['interviewResume']) {
                $builder->add('interviewResume', TextareaType::class, [
                    'required' => false,
                    'label' => 'Résumé de l\'entretien :',
                ]);
            };
            $builder->add('city', TextType::class, [
                'label' => 'Ville :',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Application::class,
            'hasResponse' => false,
            'interviewResume' => false,
        ]);
    }
}
