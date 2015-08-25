<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class configuracionesGeneralesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreDelColegio')
            ->add('direccionDelColegio')
            ->add('telefonoDelColegio')
            ->add('numeroDeReciboPartir')
            ->add('tipoDeMoneda')
            ->add('incrementoDeAdmisionEstudiantilNo')
            ->add('incrementoDelEmpleadoNo')
            ->add('noticiasModeracionDeComentarios')
            ->add('cambioDeContrasenaInicioDeSesion')
            ->add('facebook')
            ->add('twiter')
            ->add('email')
             ->add('archivo', new archivoType(), array(
                'attr' => array('id' => 'well')
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\escuelaBundle\Entity\configuracionesGenerales'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_escuelabundle_configuracionesgenerales';
    }
}
