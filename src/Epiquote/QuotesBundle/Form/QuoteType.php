<?php

namespace Epiquote\QuotesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class QuoteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('author')
            ->add('context')
            ->add('content')
        ;
    }

    public function getName()
    {
        return 'epiquote_quotesbundle_quotetype';
    }
}
