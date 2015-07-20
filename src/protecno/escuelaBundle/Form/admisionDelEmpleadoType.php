<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class admisionDelEmpleadoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nuemeroDelEmpleado')
            ->add('diaDeIngreso')
            ->add('nombre')
            ->add('segundoNombre')
            ->add('apellidoPaterno')
            ->add('eMail')
            ->add('genero')
            ->add('fechaDeNacimiento')
            ->add('anadirDepartamentoEmpleo')
            ->add('anadirEmpleadoCategoria')
            ->add('anadirEmpleadoPosicion')
            ->add('anadirEmpleadoGrado')
            ->add('tituloProfesional')
            ->add('calificacion')
            ->add('experienciaInfo')
            ->add('experienciaTotal')
            ->add('estadoCivil')
            ->add('nombreDelPadre')
            ->add('nombreDeLaMadre')
            ->add('celular')
            ->add('telefonoDeCasa')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\escuelaBundle\Entity\admisionDelEmpleado'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_escuelabundle_admisiondelempleado';
    }
}
