<?php

namespace Epiquote\QuotesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;

use Epiquote\QuotesBundle\Entity\Quote;
use Epiquote\QuotesBundle\Form\QuoteType;

/**
 * Quote controller.
 *
 */
class QuoteController extends Controller
{
    /**
     * Lists all Quote entities.
     *
     */
    public function allAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('EpiquoteQuotesBundle:Quote')->findAll();

        return $this->render('EpiquoteQuotesBundle:Quote:all.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Quote entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EpiquoteQuotesBundle:Quote')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Quote entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EpiquoteQuotesBundle:Quote:show.html.twig', array(
            'quote'       => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Quote entity.
     *
     */
    public function newAction()
    {
        $entity = new Quote();
        $form   = $this->createForm(new QuoteType(), $entity);

        return $this->render('EpiquoteQuotesBundle:Quote:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'indicator_position' => 445,
        ));
    }

    /**
     * Creates a new Quote entity.
     *
     */
    public function createAction()
    {
        $entity  = new Quote();
        $request = $this->getRequest();
        $form    = $this->createForm(new QuoteType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $entity->sanitize();
          
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
            
            $this->get('session')->setFlash('success', 'Votre quote a été enregistrée');

            return $this->redirect($this->generateUrl('epiquote_homepage'));
            
        }

        return $this->render('EpiquoteQuotesBundle:Quote:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Quote entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EpiquoteQuotesBundle:Quote')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Quote entity.');
        }

        $editForm = $this->createForm(new QuoteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EpiquoteQuotesBundle:Quote:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Quote entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EpiquoteQuotesBundle:Quote')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Quote entity.');
        }

        $editForm   = $this->createForm(new QuoteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            
            $this->get('session')->setFlash('success', 'Quote edited');

            return $this->redirect($this->generateUrl('quote_edit', array('id' => $id)));
        }

        return $this->render('EpiquoteQuotesBundle:Quote:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Quote entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EpiquoteQuotesBundle:Quote')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Quote entity.');
            }

            $em->remove($entity);
            $em->flush();
            
            $this->get('session')->setFlash('success', 'Quote #' . $id . ' deleted successfully.');
        }

        return $this->redirect($this->generateUrl('epiquote_homepage'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    /**
     * Show a list of quotes, ordered by [latest | top rated | random] and paginated
     */
    public function listAction($ordering, $page)
    {
      $em = $this->getDoctrine()->getEntityManager();
      $repo = $em->getRepository('EpiquoteQuotesBundle:Quote');
      
      $entities = array();
      switch ($ordering)
      {
        case 'latest':
          $entities = $repo->findLastests($page);
          break;
        case 'top':
          $entities = $repo->findBestRateds($page);
          break;
        case 'random':
          $entities = $repo->findRandoms($page);
          break;

        default:
          throw $this->createNotFoundException('Bad ordering "'.$ordering.'"');
          break;
      }

      if ($this->get('request')->isXmlHttpRequest())
      {
        $view = 'EpiquoteQuotesBundle:Quote:list.html.twig';
      }
      else
        $view = 'EpiquoteQuotesBundle:Quote:list_layout.html.twig';
      
      $next_url = $this->generateUrl($this->get('request')->get('_route'), array(
          'ordering' => $this->get('request')->get('ordering'),
          'page'     => $page + 1
      ));
      
      return $this->render($view, array(
          'quotes'             => $entities,
          'next_page_url'      => $next_url,
      ));
    }
    
    /**
     * Increase or decrease the rank of a quote
     * 
     * @param type $id The quote id
     * @param type $delta The operation on the rank 1 = increase, -1 = decrease
     */
    public function voteAction($id, $delta)
    {
      // FIXME: Implement a working voting system
      throw $this->createNotFoundException();
      
      $em = $this->getDoctrine()->getEntityManager();
      
      try
      {
        $quote = $em->getRepository('EpiquoteQuotesBundle:Quote')->find($id);
        if ($delta == 1)
          $quote->rankIncrease();
        else if ($delta == -1)
          $quote->rankDecrease();
        else
          throw new \InvalidArgumentException ('Delta should be 1 or -1');
          
        $em->flush();
      } catch (Exception $e)
      {
        $this->get('session')->setFlash('success', 'Une erreur s\'est produite,'
                . 'votre vote n\'a pas été pris en compte');
      }
      
      $this->get('session')->setFlash('success', 'Merci de votre vote');
      
      if (isset($_SERVER['HTTP_REFERER']))
        return $this->redirect($_SERVER['HTTP_REFERER']);
      else
        return $this->redirect($this->generateUrl('epiquote_homepage'));
    }
}
