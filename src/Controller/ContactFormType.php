<?php

namespace App\Controller;

use App\Entity\Yhteystieto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('name', TextType::class, ['label' => 'First and Last name']) 
            ->add('email', EmailType::class, ['label' => 'Email'])
            ->add('comments', TextType::class, ['label' => 'Comments'])
            ->add('save', SubmitType::class, [
                'label' => 'Save',
                'attr'  => ['class' => 'btn btn-info']
                ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults([
            'data-class' => Contact::class,
        ]);
    }

}
?>