<?php

namespace App\Form;

use App\Entity\Portfolio;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PortfolioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'placeholder' => 'Nom du projet',
                    'class' => ''
                ]
            ])

            ->add('imageFile', VichFileType::class, [
                'required'      => false,
                'allow_delete'  => true, 
                'download_uri' => true,])

            ->add('date')

            ->add('link', TextType::class, [
                'attr' => [
                    'placeholder' => 'https://github.com/callejonmelissa/cmdesign',
                    'class' => ''
                ]
            ])

            ->add('description', CKEditorType::class, [
                'attr' => ['data-editor' => true],
                'label' => 'Description',
                'config_name' => 'light',
            ])

            ->add('theme', TextType::class, [
                'attr' => [
                    'placeholder' => 'Création de site web',
                    'class' => ''
                ]
            ])

            ->add('stack', TextType::class, [
                'attr' => [
                    'placeholder' => 'PHP, Symfony, HTML, SCSS, Figma',
                    'class' => ''
                ]
            ])
            
            ->add('category', null, ['choice_label' => 'name'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Portfolio::class,
        ]);
    }
}
