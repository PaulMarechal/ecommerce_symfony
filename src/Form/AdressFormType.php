<?php

namespace App\Form;

use App\Entity\Adress;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AdressFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('idUser')

            ->add('city', null, array(
                'label' => 'City',
                'attr' => array(
                    'placeholder' => 'City',
                    'class' => 'large')))

            ->add('state', null, array(
                'label' => 'Pays',
                'attr' => array(
                    'placeholder' => 'Pays',
                    'class' => 'large')))
            
            ->add('zip', null, array(
                'label' => 'Code postal',
                'attr' => array(
                    'placeholder' => 'Zip',
                    'class' => 'large')))

            ->add('adress', null, array(
                'label' => 'Adresse',
                'attr' => array(
                    'placeholder' => 'Adresse',
                    'class' => 'large')))

            ->add('adress2', null, array(
                'label' => ' ',
                'attr' => array(
                    'placeholder' => 'Complement',
                    'class' => 'large')))

            ->add('date', null, array(
                'label' => 'Date',
                'attr' => array(
                    'placeholder' => 'date',
                    'class' => 'large')))

            ->add('products')
            ->add('Submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Adress::class,
        ]);
    }
}
