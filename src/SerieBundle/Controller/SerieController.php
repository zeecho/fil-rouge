<?php

namespace SerieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SerieBundle\Entity\Serie;
use SerieBundle\Form\SerieType;

/**
 * Serie controller.
 *
 * @Route("/serie")
 */
class SerieController extends Controller
{
    /**
     * Lists all Serie entities.
     *
     * @Route("/", name="serie_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $series = $em->getRepository('SerieBundle:Serie')->findAll();

        $summaries = [];
        foreach ($series as $serie) {
            $serie->tinySum = substr($serie->getSummary(), 0, 300) . "…";
        }

        return $this->render('serie/index.html.twig', array(
            'series' => $series
        ));
    }

    /**
     * Creates a new Serie entity.
     *
     * @Route("/new", name="serie_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $serie = new Serie();
        $form = $this->createForm('SerieBundle\Form\SerieType', $serie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();

            return $this->redirectToRoute('serie_show', array('id' => $serie->getId()));
        }

        return $this->render('serie/new.html.twig', array(
            'serie' => $serie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Serie entity.
     *
     * @Route("/{id}", name="serie_show")
     * @Method("GET")
     */
    public function showAction(Serie $serie)
    {
        $deleteForm = $this->createDeleteForm($serie);

        $em = $this->getDoctrine()->getManager();

        $seasonRepo = $em->getRepository('SerieBundle:Season');
        $seasons = $seasonRepo->findBySerie($serie);

        return $this->render('serie/show.html.twig', array(
            'serie' => $serie,
            'seasons' => $seasons,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Serie entity.
     *
     * @Route("/{id}/edit", name="serie_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Serie $serie)
    {
        $deleteForm = $this->createDeleteForm($serie);
        $editForm = $this->createForm('SerieBundle\Form\SerieType', $serie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();

            return $this->redirectToRoute('serie_index', array('id' => $serie->getId()));
        }

        return $this->render('serie/edit.html.twig', array(
            'serie' => $serie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Serie entity.
     *
     * @Route("/{id}", name="serie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Serie $serie)
    {
        $form = $this->createDeleteForm($serie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($serie);
            $em->flush();
        }

        return $this->redirectToRoute('serie_index');
    }

    /**
     * Creates a form to delete a Serie entity.
     *
     * @param Serie $serie The Serie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Serie $serie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('serie_delete', array('id' => $serie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
