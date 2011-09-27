<?php

namespace Epiquote\QuotesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Syndication controller.
 *
 */
class SyndicationController extends Controller
{
  public function rssAction()
  {
    // Get the last 20 quotes
    $quotes = $this->getDoctrine()->getEntityManager()
            ->getRepository('EpiquoteQuotesBundle:Quote')
            ->findLastests(1, 20);
    
    return $this->render('EpiquoteQuotesBundle:Syndication:rss.twig.xml', array(
        'quotes' => $quotes,
    ));
  }
  
  public function atomAction()
  {
    $app_uuid = $this->generateUUID(
            'www.epiquote.fr',
            'urn:uuid:');
    
    // Get the last 20 quotes
    $quotes = $this->getDoctrine()->getEntityManager()
            ->getRepository('EpiquoteQuotesBundle:Quote')
            ->findLastests(1, 20);
    
    $uuids = array();
    foreach ($quotes as $quote)
    {
      $uuids[] = $this->generateUUID(
              $this->generateUrl('quote_show', array('id' => $quote->getId())),
              'urn:uuid:');
    }
    
    return $this->render('EpiquoteQuotesBundle:Syndication:atom.twig.xml', array(
        'app_uuid' => $app_uuid,
        'quotes'   => $quotes,
        'uuids'    => $uuids,
    ));
  }
  
  /**
  * Generates an UUID
  * @author     Anis uddin Ahmad <admin@ajaxray.com>
  * @param      string  an optional prefix
  * @return     string  the formated uuid
  */
  private function generateUUID($key = null, $prefix = '')
  {
    $key = ($key == null)? uniqid(rand()) : $key;
    $chars = md5($key);
    $uuid  = substr($chars,0,8) . '-';
    $uuid .= substr($chars,8,4) . '-';
    $uuid .= substr($chars,12,4) . '-';
    $uuid .= substr($chars,16,4) . '-';
    $uuid .= substr($chars,20,12);

    return $prefix . $uuid;
  }
}
