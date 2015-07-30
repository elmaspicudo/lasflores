<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class alumnoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('noDeAdmision')
            ->add('nombre')
            ->add('apellidoPaterno') 
            ->add('apellidoMaterno')
            ->add('genero')
            ->add('grupoSanguineo')
            ->add('lugarDeNacimiento')
            ->add('nacionalidad') 
            ->add('fechaDeNacimiento', 'date', array(
                        'widget' => 'single_text'
                    ))
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
            'data_class' => 'protecno\escuelaBundle\Entity\alumno'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_escuelabundle_alumno';
    }
}
