<?php

namespace Ankirin\JmolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ankirin\WebBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/jmol", name="jmol")
 * 
 */
class PopupController extends Controller
{
    /**
     * @Route("/{path}/", name="jmol_popup")
     * @Template()
     */
    public function indexAction($path)
    {
        return array('path'=>$path);
    }

}
