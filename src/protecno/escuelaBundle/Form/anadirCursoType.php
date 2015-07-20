<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class anadirCursoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('curso')
            ->add('puntajeMinimo')
            ->add('cantidad')
            ->add('estaActivo')
            ->add('estaActivoEnElSistemaPin')
            ->add('habilitarSistemaDeAprobacion')
            ->add('registrstroBasadoAsunto')
            ->add('incluyaDetalles')
            ->add('transferirArchivosAdjuntosMientrasAsignacion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\escuelaBundle\Entity\anadirCurso'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_escuelabundle_anadircurso';
    }
}
