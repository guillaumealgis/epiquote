<?php

namespace Epiquote\SecurityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('username', 'email')
            ->add('password', 'password')
        ;
    }

    public function getName()
    {
        return 'epiquote_securitybundle_usertype';
    }
}
