<?php

    namespace App\Controller;

    use App\Entity\Linkki;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    use Symfony\Component\Form\Extension\Core\Type\DateType;


    class MotionsFormType extends AbstractType{

        public function buildForm(FormBuilderInterface $builder, array $options){
            $builder
                ->add('title', TextType::class, ['label' => 'Title'])
                ->add('descrpt', TextType::class, ['label' => 'Description'])
                ->add('date', DateType::class, ['label' => 'Creation Date'])
                ->add('name', TextType::class, ['label' => 'Author'])
                ->add('email', TextType::class, ['label' => 'Email'])
                ->add('save', SubmitType::class, [
                    'label' => 'Save',
                    'attr' => ['class' => "btn btn-success"]
                ]);
        }

        public function configureOptions(OptionsResolver $resolver){
            $resolver->setDefaults([
                'data-class' => Motions::class,
            ]);
        }
    }



?>