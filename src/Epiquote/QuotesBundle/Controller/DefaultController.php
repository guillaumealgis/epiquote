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
    return $this->redirect($this->generateUrl('quote_list', array(
        'ordering' => 'lastest',
        'page'     => '1',
    )));
  }
}
