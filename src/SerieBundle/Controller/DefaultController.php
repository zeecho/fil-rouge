<?php

namespace SerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SerieBundle\Form\SerieType;
use SerieBundle\Entity\Serie;
use Symfony\Component\HttpFoundation\Request;

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

    public function addAction(Request $req)
    {
        $serie = new Serie();

        $form = $this->createForm(SerieType::class, $serie);
        $form->handleRequest($req);
        if ($form->isValid() && $form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();

            return $this->redirectToRoute('serie_list');
        }
        return $this->render('SerieBundle:Default:add.html.twig', array(
            'form' => $form->createView()
            ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $serie = $this->getDoctrine()->getRepository('SerieBundle:serie')->find($id);
        $em->remove($serie);
        $em->flush();
        return $this->redirectToRoute('serie_list');
        
    }

    public function updateAction(Request $req,Serie $serie)
    {
        // $em = $this->getDoctrine()->getManager();
        // $serie = $em->getRepository('SerieBundle:Serie')->find($id);
        // if (!$serie) {
        //     throw $this->createNotFoundException(
        //         'No serie found for id '.$id
        //         );
        // } // remplir la valeur des parenthese avec le formulaire d'ajout de serie
        // $serie->setName();
        // $serie->setSummary();
        // $serie->setReleaseDate();
        // $serie->setSeasons();
        // $serie->setCountries();
        // $em->flush();
        // return $this->redirectToRoute('serie_list');
        // return $this->render('SerieBundle:Default:update.html.twig');

        $form = $this->createForm(SerieType::class, $serie);
        $form->handleRequest($req);
        if ($form->isValid() && $form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();

            return $this->redirectToRoute('serie_list');
        }
        return $this->render('SerieBundle:Default:add.html.twig', array(
            'form' => $form->createView()
            ));
    }

    public function detailAction($id)
    {
        $serie = $this->getDoctrine()
        ->getRepository('SerieBundle:Serie')
        ->find($id);
        return $this->render('SerieBundle:Default:detail.html.twig', [
                'serie' => $serie
            ]);
    }
}

