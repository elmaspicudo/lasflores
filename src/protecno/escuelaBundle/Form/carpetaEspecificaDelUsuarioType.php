<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class carpetaEspecificaDelUsuarioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreDeLaCarpeta')
            ->add('estudiante')
            ->add('empleado')
            ->add('activo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\escuelaBundle\Entity\carpetaEspecificaDelUsuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_escuelabundle_carpetaespecificadelusuario';
    }
}
