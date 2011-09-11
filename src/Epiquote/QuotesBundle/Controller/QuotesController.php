<?php

namespace Epiquote\QuotesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class QuotesController extends Controller
{
    
    public function lastestAction($max_quotes)
    {
        $quotes = $this->getDoctrine()->getEntityManager('Quote');
        
        return $this->render('EpiquoteQuotesBundle:Quotes:list.html.twig', array('quotes' => $quotes));
    }
}
