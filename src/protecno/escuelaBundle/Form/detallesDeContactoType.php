<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class detallesDeContactoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('direccionLinea1')
            ->add('direccionLinea2')
            ->add('ciudad')
            ->add('estado')
            ->add('codigoPIN')
            ->add('telefono')
            ->add('movil')
            ->add('eMail')
            ->add('pais')
            ->add('alumno', new alumnoType(), array(
                'attr' => array('class' => 'well')
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\escuelaBundle\Entity\detallesDeContacto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_escuelabundle_detallesdecontacto';
    }
}
