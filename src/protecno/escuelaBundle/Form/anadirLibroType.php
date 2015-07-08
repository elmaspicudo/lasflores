<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class anadirLibroType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroDeLibro')
            ->add('titulo')
            ->add('autor')
            ->add('etiquetas')
            ->add('etiquetasPersonalizadas')
            ->add('numeroDeCopias')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\escuelaBundle\Entity\anadirLibro'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'escuela_bundle_anadirlibro';
    }
}
