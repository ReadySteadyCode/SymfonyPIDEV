<?php

namespace pidev\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use pidev\TestBundle\Entity\Dealimage;
use pidev\TestBundle\Form\DealimageType;

/**
 * Dealimage controller.
 *
 * @Route("/dealimage")
 */
class DealimageController extends Controller
{

    /**
     * Lists all Dealimage entities.
     *
     * @Route("/", name="dealimage")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TestBundle:Dealimage')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Dealimage entity.
     *
     * @Route("/", name="dealimage_create")
     * @Method("POST")
     * @Template("TestBundle:Dealimage:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Dealimage();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dealimage_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Dealimage entity.
    *
    * @param Dealimage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Dealimage $entity)
    {
        $form = $this->createForm(new DealimageType(), $entity, array(
            'action' => $this->generateUrl('dealimage_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Dealimage entity.
     *
     * @Route("/new", name="dealimage_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Dealimage();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Dealimage entity.
     *
     * @Route("/{id}", name="dealimage_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Dealimage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dealimage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Dealimage entity.
     *
     * @Route("/{id}/edit", name="dealimage_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Dealimage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dealimage entity.');
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
    * Creates a form to edit a Dealimage entity.
    *
    * @param Dealimage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Dealimage $entity)
    {
        $form = $this->createForm(new DealimageType(), $entity, array(
            'action' => $this->generateUrl('dealimage_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Dealimage entity.
     *
     * @Route("/{id}", name="dealimage_update")
     * @Method("PUT")
     * @Template("TestBundle:Dealimage:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Dealimage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dealimage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('dealimage_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Dealimage entity.
     *
     * @Route("/{id}", name="dealimage_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TestBundle:Dealimage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dealimage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dealimage'));
    }

    /**
     * Creates a form to delete a Dealimage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dealimage_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
