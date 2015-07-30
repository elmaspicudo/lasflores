<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class nuevoGrupoPinType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('validaDesde')
            ->add('validoHasta')
            ->add('nombre')
            ->add('numeroDePines')
            ->add('estaActivo')
            ->add('curso')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\escuelaBundle\Entity\nuevoGrupoPin'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_escuelabundle_nuevogrupopin';
    }
}
