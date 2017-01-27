<?php

namespace Medeiros\TesteBundle\Controller;

use Medeiros\TesteBundle\Entity\endereco;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Endereco controller.
 *
 * @Route("endereco")
 */
class enderecoController extends Controller
{
    /**
     * Lists all endereco entities.
     *
     * @Route("/", name="endereco_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $enderecos = $em->getRepository('MedeirosTesteBundle:endereco')->findAll();

        return $this->render('endereco/index.html.twig', array(
            'enderecos' => $enderecos,
        ));
    }

    /**
     * Creates a new endereco entity.
     *
     * @Route("/new", name="endereco_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $endereco = new Endereco();
        $form = $this->createForm('Medeiros\TesteBundle\Form\enderecoType', $endereco);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($endereco);
            $em->flush($endereco);

            return $this->redirectToRoute('endereco_show', array('id' => $endereco->getId()));
        }

        return $this->render('endereco/new.html.twig', array(
            'endereco' => $endereco,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a endereco entity.
     *
     * @Route("/{id}", name="endereco_show")
     * @Method("GET")
     */
    public function showAction(endereco $endereco)
    {
        $deleteForm = $this->createDeleteForm($endereco);

        return $this->render('endereco/show.html.twig', array(
            'endereco' => $endereco,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing endereco entity.
     *
     * @Route("/{id}/edit", name="endereco_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, endereco $endereco)
    {
        $deleteForm = $this->createDeleteForm($endereco);
        $editForm = $this->createForm('Medeiros\TesteBundle\Form\enderecoType', $endereco);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('endereco_edit', array('id' => $endereco->getId()));
        }

        return $this->render('endereco/edit.html.twig', array(
            'endereco' => $endereco,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a endereco entity.
     *
     * @Route("/{id}", name="endereco_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, endereco $endereco)
    {
        $form = $this->createDeleteForm($endereco);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($endereco);
            $em->flush($endereco);
        }

        return $this->redirectToRoute('endereco_index');
    }

    /**
     * Creates a form to delete a endereco entity.
     *
     * @param endereco $endereco The endereco entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(endereco $endereco)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('endereco_delete', array('id' => $endereco->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
