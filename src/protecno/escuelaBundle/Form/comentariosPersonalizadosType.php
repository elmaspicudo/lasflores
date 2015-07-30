<?php

namespace protecno\escuelaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class comentariosPersonalizadosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tema')
            ->add('obserbacionPor')
            ->add('curso')
            ->add('lotes')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\escuelaBundle\Entity\comentariosPersonalizados'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_escuelabundle_comentariospersonalizados';
    }
}
