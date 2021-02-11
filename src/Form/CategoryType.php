<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CategoryType extends AbstractType
{
    // public function buildForm(FormBuilderInterface $builder, array $options)
    // {
    //     $builder->add('title', ChoiceType::class, [
    //         'choices' => [
    //             'Entrée' => 1,
    //             'Plat' => 2,
    //             'Dessert' => 3,
    //             'Vin' => 4,
    //         ],
    //     ]);
    // }

    // public function configureOptions(OptionsResolver $resolver)
    // {
    //     $resolver->setDefaults([
    //         'data_class' => Category::class,
    //     ]);
    // }
}
