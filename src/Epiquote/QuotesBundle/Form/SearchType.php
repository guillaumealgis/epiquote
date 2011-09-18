<?php

namespace Epiquote\QuotesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('pattern', 'text')
        ;
    }
    
    /**
     * Disable the CSRF protection, we need it as we will call the form action
     * from an URL with "load more quotes"
     */
    public function getDefaultOptions(array $options)
    {
        return array(
            'csrf_protection' => false
        );
    }

    public function getName()
    {
        return 'search';
    }
}
