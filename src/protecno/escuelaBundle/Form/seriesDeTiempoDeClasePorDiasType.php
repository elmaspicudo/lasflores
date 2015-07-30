<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class seriesDeTiempoDeClasePorDiasType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('curso')
            ->add('lotes')
            ->add('domingo')
            ->add('lunes')
            ->add('martes')
            ->add('miercoles')
            ->add('jueves')
            ->add('viernes')
            ->add('sabado')
            ->add('temporizacionDeClase')
            ->add('aplicableApartirDel')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\escuelaBundle\Entity\seriesDeTiempoDeClasePorDias'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_escuelabundle_seriesdetiempodeclasepordias';
    }
}
