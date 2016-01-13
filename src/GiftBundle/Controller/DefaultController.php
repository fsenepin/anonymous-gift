<?php

namespace GiftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template("GiftBundle:Default:home.html.twig")
     */
    public function homeAction()
    {
        return array('page_title' => "Home");
    }
}
