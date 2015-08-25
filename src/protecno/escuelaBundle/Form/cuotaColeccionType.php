<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class cuotaColeccionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cuotaNombreDeLaColeccion')
            ->add('fechaDeInicio' ,'date', array(
                        'widget' => 'single_text','required'=>false,
                    ))
            ->add('fechaFinal', 'date', array(
                        'widget' => 'single_text','required'=>false,
                    ))
            ->add('monto')
            ->add('tipo', 'choice', array(
                    'choices'  => array('1' => 'Fija', '2' => 'Recurrente')
                ));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\escuelaBundle\Entity\cuotaColeccion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_escuelabundle_cuotacoleccion';
    }
}
