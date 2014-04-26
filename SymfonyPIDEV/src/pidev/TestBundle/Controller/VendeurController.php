<?php

namespace pidev\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use pidev\TestBundle\Entity\Vendeur;
use pidev\TestBundle\Form\VendeurType;

/**
 * Vendeur controller.
 *
 * @Route("/vendeur")
 */
class VendeurController extends Controller
{

    /**
     * Lists all Vendeur entities.
     *
     * @Route("/", name="vendeur")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TestBundle:Vendeur')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Vendeur entity.
     *
     * @Route("/", name="vendeur_create")
     * @Method("POST")
     * @Template("TestBundle:Vendeur:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Vendeur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('vendeur_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Vendeur entity.
    *
    * @param Vendeur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Vendeur $entity)
    {
        $form = $this->createForm(new VendeurType(), $entity, array(
            'action' => $this->generateUrl('vendeur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Vendeur entity.
     *
     * @Route("/new", name="vendeur_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Vendeur();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Vendeur entity.
     *
     * @Route("/{id}", name="vendeur_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Vendeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vendeur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Vendeur entity.
     *
     * @Route("/{id}/edit", name="vendeur_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Vendeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vendeur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Vendeur entity.
    *
    * @param Vendeur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Vendeur $entity)
    {
        $form = $this->createForm(new VendeurType(), $entity, array(
            'action' => $this->generateUrl('vendeur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Vendeur entity.
     *
     * @Route("/{id}", name="vendeur_update")
     * @Method("PUT")
     * @Template("TestBundle:Vendeur:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Vendeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vendeur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('vendeur_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Vendeur entity.
     *
     * @Route("/{id}", name="vendeur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TestBundle:Vendeur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Vendeur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('vendeur'));
    }

    /**
     * Creates a form to delete a Vendeur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vendeur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
