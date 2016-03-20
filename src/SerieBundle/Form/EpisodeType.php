<?php

namespace SerieBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EpisodeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('synopsis')
            ->add('runtime', 'time')
            ->add('number')
            ->add('airedDate')
            ->add('season', EntityType::class, [
                'class' => 'SerieBundle:Season',
                'choice_label' => function($season) {
                    $name = $season->getSerie()->getName();
                    $num = $season->getNumber();
                    $string = $name . ' (Saison ' . $num . ')';
                    return $string;
                }
            ])
            ->add('guests', EntityType::class, [
                'class' => 'SerieBundle:Person',
                'choice_label' => 'lastAndFirstName',
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
            'data_class' => 'SerieBundle\Entity\Episode'
        ));
    }
}
