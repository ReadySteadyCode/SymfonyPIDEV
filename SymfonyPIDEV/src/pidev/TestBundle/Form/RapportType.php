<?php

namespace pidev\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RapportType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateajout')
            ->add('titre')
            ->add('contenu')
            ->add('datedebut')
            ->add('datefin')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'pidev\TestBundle\Entity\Rapport'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_testbundle_rapport';
    }
}
