<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'name',
            ])
            ->add('username', TextType::class, [
                'label' => 'username',
            ])
            ->add('password', PasswordType::class, [
                'label' => 'password',
            ])
            ->add('register', SubmitType::class, [
                'label' => 'R E G I S T E R',
            ]);
    }
}
