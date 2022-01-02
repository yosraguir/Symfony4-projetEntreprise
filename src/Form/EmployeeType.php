<?php

namespace App\Form;

use App\Entity\Employee;
use App\Entity\Team;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class EmployeeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cin')
            ->add('position')
            ->add('age')
            ->add('salary')
            ->add('name')
            ->add('role')
            ->add('team',EntityType::class,['class' =>Team::class,
            'choice_label' => 'name',
            'label' => 'team'])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employee::class,
        ]);
    }
}

