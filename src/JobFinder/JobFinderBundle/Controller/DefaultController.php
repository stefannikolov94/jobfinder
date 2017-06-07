<?php

namespace JobFinder\JobFinderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JobFinderJobFinderBundle:Default:index.html.twig');
    }
}
