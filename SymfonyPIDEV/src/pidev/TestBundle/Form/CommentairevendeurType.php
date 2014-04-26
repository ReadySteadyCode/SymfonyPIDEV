<?php

namespace pidev\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentairevendeurType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateajout')
            ->add('contenu')
            ->add('idvendeur')
            ->add('idclient')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'pidev\TestBundle\Entity\Commentairevendeur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_testbundle_commentairevendeur';
    }
}
