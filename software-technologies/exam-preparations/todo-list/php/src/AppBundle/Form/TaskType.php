<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('title', TextType::class,array('required'=>true))
        ->add('comments', TextType::class, array('required'=>true));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver ->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Task',
        ));
    }
}
