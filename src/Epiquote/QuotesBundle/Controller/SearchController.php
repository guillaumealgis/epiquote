<?php

namespace Epiquote\QuotesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Epiquote\QuotesBundle\Entity\Quote;
use Epiquote\QuotesBundle\Form\SearchType;

/**
 * Search controller.
 *
 */
class SearchController extends Controller
{
    public function searchAction()
    {
      $form   = $this->createForm(new SearchType());
      
      return $this->render('EpiquoteQuotesBundle:Search:search.html.twig', array(
          'form' => $form->createView()
      ));
    }
    
    public function resultsAction($page)
    {
      $request = $this->getRequest();
      $form    = $this->createForm(new SearchType());
      $form->bindRequest($request);

      if ($form->isValid()) {
        $values = $form->getData();
        
        if (empty($values['pattern']))
          $results = array();
        else
        {
          $em = $this->getDoctrine()->getEntityManager();
          $results = $em->getRepository('EpiquoteQuotesBundle:Quote')
                ->findAllMatchingPattern($values['pattern'], $page);
        }
        
        $next_url = $this->generateUrl($this->get('request')->get('_route'), array(
            'search'     => $form->getData(),
            'page'     => $page + 1
        ));
        
        if ($this->get('request')->isXmlHttpRequest() || $request->getRequestFormat() != 'html')
          $view = 'EpiquoteQuotesBundle:Quote:list.' . $request->getRequestFormat() . '.twig';
        else
          $view = 'EpiquoteQuotesBundle:Quote:list_layout.html.twig';
        
        
        return $this->render($view, array(
          'quotes'        => $results,
          'next_page_url' => $next_url
        ));

      }
        
      // Error in form
      return $this->redirect($this->generateUrl('/'));
    }
    
    /**
     * Used for autocomplete in quote/new on field "author"
     * 
     * @param type $term The value entered by the user in the field "author"
     * @return type JSON list of matching authors
     */
    public function autocompleteAuthorAction()
    {
      $term = $this->get('request')->get('term');
      if (!$term)
        $authors = array();
      else
      {
        $em = $this->getDoctrine()->getEntityManager();
        $authors = $em->getRepository('EpiquoteQuotesBundle:Quote')
                      ->findAuthorsMatchingPattern($term);
      }

      return new Response(json_encode($authors));
    }
}
