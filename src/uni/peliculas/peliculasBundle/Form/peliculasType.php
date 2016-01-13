<?php

namespace uni\peliculas\peliculasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class peliculasType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('sipnosis')
            ->add('director')
            ->add('fecha')
            ->add('foto')
            ->add('actoress')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uni\peliculas\peliculasBundle\Entity\peliculas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_peliculas_peliculasbundle_peliculas';
    }
}
