<?php

namespace lepru\BazarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmpresasType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombredeempresa')
            ->add('direccion')
            ->add('telefono')
            ->add('email','email', array('label' => 'Correo electrónico' ))
            ->add('personadecontacto', 'text', array('label' => 'Persona de contacto' ))
            ->add('serviciooproducto')
            ->add('web')
            ->add('facebook')
            //->add('comentario')
            ->add('comentarios')
            //->add('fechadeincripcion')
            //->add('flag')
            ->add('gerenteg')
            ->add('nombrepro')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'lepru\BazarBundle\Entity\Empresas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lepru_bazarbundle_empresas';
    }
}
