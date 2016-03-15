<?php

namespace SerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SerieBundle\Form\SerieType;
use SerieBundle\Entity\Serie;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SerieBundle:Default:index.html.twig');
    }


    public function listAction()
    {
        $serie = $this->getDoctrine()
        ->getRepository('SerieBundle:Serie')
        ->findAll();
        return $this->render('SerieBundle:Default:list.html.twig');
    }

    public function addAction()
    {


        $serie = new Serie();

        $form = $this->createForm(new SerieType(), $serie);
        return $this->render('SerieBundle:Default:add.html.twig', array(
            'form' => $form->createView()
            ));
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();

            return $this->redirectToRoute('serie_list');
        }
        return $this->render('SerieBundle:Default:add.html.twig');
    }

    public function deleteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $serie = $this->getDoctrine()
        ->getRepository('SerieBundle:serie')
        ->find($id);
        $em->remove($serie);
        $em->flush();
        return $this->redirectToRoute('serie_list');
        
    }

    public function updateAction()
    {
        $em = $this->getDoctrine()->getManager();
        $serie = $em->getRepository('SerieBundle:Serie')->find($id);
        if (!$serie) {
            throw $this->createNotFoundException(
                'No serie found for id '.$id
                );
        } // remplir la valeur des parenthese avec le formulaire d'ajout de serie
        $serie->setName();
        $serie->setSummary();
        $serie->setReleaseDate();
        $serie->setSeasons();
        $serie->setCountries();
        $em->flush();
        return $this->redirectToRoute('serie_list');
        return $this->render('SerieBundle:Default:update.html.twig');
    }

    public function detailAction($id)
    {
        $serie = $this->getDoctrine()
        ->getRepository('AppBundle:serie')
        ->find($id);
        return $this->render('SerieBundle:Default:detail.html.twig');
    }
}

