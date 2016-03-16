<?php

namespace SerieBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastName')
            ->add('firstName')
            ->add('seriesIn', EntityType::class, [
                'class' => 'SerieBundle:Serie',
                'choice_label' => 'name',
                'multiple' => true,
                'required' => false
            ])
            ->add('seriesDirected', EntityType::class, [
                'class' => 'SerieBundle:Serie',
                'choice_label' => 'name',
                'multiple' => true,
                'required' => false
            ])
            ->add('appearances', EntityType::class, [
                'class' => 'SerieBundle:Episode',
                'choice_label' => 'name',
                'multiple' => true,
                'required' => false
            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SerieBundle\Entity\Person'
        ));
    }
}
