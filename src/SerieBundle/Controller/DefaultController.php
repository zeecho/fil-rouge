<?php

namespace SerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SerieBundle:Default:index.html.twig');
    }


    public function listAction()
    {

        return $this->render('SerieBundle:Default:list.html.twig');
    }

    public function addAction()
    {

        return $this->render('SerieBundle:Default:add.html.twig');
    }

    public function deleteAction()
    {

        return $this->render('SerieBundle:Default:delete.html.twig');
    }

    public function updateAction()
    {

        return $this->render('SerieBundle:Default:update.html.twig');
    }

    public function detailAction()
    {

        return $this->render('SerieBundle:Default:detail.html.twig');
    }
}

