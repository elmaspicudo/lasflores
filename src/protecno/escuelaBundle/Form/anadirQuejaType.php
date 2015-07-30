<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class anadirQuejaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quejaNo')
            ->add('titulo')
            ->add('descripcion')
            ->add('juicioFecha')
            ->add('motivoDeLaQueja')
            ->add('demanda')
            ->add('jurado')
            ->add('autoridadesResponsables')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\escuelaBundle\Entity\anadirQueja'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_escuelabundle_anadirqueja';
    }
}
