<?php

namespace LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/Library")
     */
    public function indexAction()
    {
        return $this->render('LibraryBundle:Default:index.html.twig');
    }
}
