<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ordenesDeCompraType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ordenDeCompraNo')
            ->add('tienda')
            ->add('tiposDeProveedor')
            ->add('proveedores')
            ->add('fecha')
            ->add('referencia')
            ->add('articuloTienda')
            ->add('precioUnitario')
            ->add('cantidad')
            ->add('descuento')
            ->add('impuestos')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\escuelaBundle\Entity\ordenesDeCompra'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_escuelabundle_ordenesdecompra';
    }
}
