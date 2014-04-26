<?php

namespace pidev\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VendeurType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomcommercial')
            ->add('addresse')
            ->add('typebien')
            ->add('description')
            ->add('note')
            ->add('posx')
            ->add('posy')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'pidev\TestBundle\Entity\Vendeur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_testbundle_vendeur';
    }
}
