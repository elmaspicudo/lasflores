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
            ->add('ejercicioFechaDeInicio')
            ->add('ejercicioFechaDelFinal')
            ->add('numeroDeReciboPartir')
            ->add('tipoDeMoneda')
            ->add('incrementoDeAdmisionEstudiantilNo')
            ->add('incrementoDelEmpleadoNo')
            ->add('noticiasModeracionDeComentarios')
            ->add('habilitarHermano')
            ->add('cambioDeContrasenaInicioDeSesion')
            ->add('activarNumeroDeRolloParaEstudiantes')
            ->add('habilitarOauth')
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
