<?php

namespace Epiquote\QuotesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class QuoteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('author', null)
            ->add('context', 'text', array('required' => false))
            ->add('content')
        ;
    }

    public function getName()
    {
        return 'quote';
    }
}
