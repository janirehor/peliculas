<?php

namespace uni\peliculas\peliculasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class actoresType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('foto')
            ->add('biografia')
            ->add('pelicula')
            ->add('premios')
            ->add('peliculass')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uni\peliculas\peliculasBundle\Entity\actores'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_peliculas_peliculasbundle_actores';
    }
}
