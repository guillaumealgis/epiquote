<?php

namespace Epiquote\QuotesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Default controller.
 *
 */
class DefaultController extends Controller
{
  public function indexAction()
  {
    // As this action is basically just a redirection
    if ($this->get('session')->hasFlash('success'))
      $this->get('session')->setFlash('success', $this->get('session')->getFlash('success'));
    if ($this->get('session')->hasFlash('notice'))
      $this->get('session')->setFlash('notice', $this->get('session')->getFlash('notice'));
    if ($this->get('session')->hasFlash('error'))
      $this->get('session')->setFlash('error', $this->get('session')->getFlash('error'));
    
    return $this->redirect($this->generateUrl('quote_list', array(
        'ordering' => 'latest',
        'page'     => '1',
    )));
  }
}
