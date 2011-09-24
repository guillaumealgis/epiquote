<?php

namespace Epiquote\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PagesController extends Controller
{
    public function legalAction()
    {
        return $this->render('EpiquotePagesBundle:Pages:legal.html.twig');
    }
    
    public function aboutAction()
    {
      $license_year = (date('Y') != '2011' ? '2011-' : '') . date('Y');
      
        return $this->render('EpiquotePagesBundle:Pages:about.html.twig', array(
            'license_year' => $license_year,
        ));
    }
    
    public function mobileAction()
    {
        return $this->render('EpiquotePagesBundle:Pages:mobile.html.twig');
    }
}
