<?php

namespace Epiquote\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;


class SecurityController extends Controller
{
    
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        
        // FIXME: Should redirect to  previous page once logged in, but doesn't
        // work as HTTP_REFERER is undefined...
        if (key_exists('HTTP_REFERER', $_SERVER))
          $url = $_SERVER['HTTP_REFERER'];
        else
          $url = '/';

        return $this->render('EpiquoteSecurityBundle:Security:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
            'redirect'      => $url,
        ));
    }
}
