<?php

namespace SerieBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SerieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('summary')
            ->add('poster')
            ->add('releaseDate', 'date')
            ->add('genres', EntityType::class, [
                'class' => 'SerieBundle:Genre',
                'choice_label' => 'name',
                'multiple' => true
            ])
            ->add('countries', EntityType::class, [
                'class' => 'SerieBundle:Country',
                'choice_label' => 'name',
                'multiple' => true
            ])
            ->add('language', EntityType::class, ['class' => 'SerieBundle:Language', 'choice_label' => 'name'])
            ->add('casting', EntityType::class, [
                'class' => 'SerieBundle:Person',
                'choice_label' => 'lastAndFirstName',
                'multiple' => true
            ])
            ->add('directors', EntityType::class, [
                'class' => 'SerieBundle:Person',
                'choice_label' => 'lastAndFirstName',
                'multiple' => true
            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SerieBundle\Entity\Serie'
        ));
    }
}
