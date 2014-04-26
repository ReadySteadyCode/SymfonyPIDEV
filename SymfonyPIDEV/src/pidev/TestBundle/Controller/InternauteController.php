<?php

namespace pidev\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use pidev\TestBundle\Entity\Internaute;
use pidev\TestBundle\Form\InternauteType;

/**
 * Internaute controller.
 *
 * @Route("/internaute")
 */
class InternauteController extends Controller
{

    /**
     * Lists all Internaute entities.
     *
     * @Route("/", name="internaute")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TestBundle:Internaute')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Internaute entity.
     *
     * @Route("/", name="internaute_create")
     * @Method("POST")
     * @Template("TestBundle:Internaute:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Internaute();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('internaute_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Internaute entity.
    *
    * @param Internaute $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Internaute $entity)
    {
        $form = $this->createForm(new InternauteType(), $entity, array(
            'action' => $this->generateUrl('internaute_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Internaute entity.
     *
     * @Route("/new", name="internaute_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Internaute();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Internaute entity.
     *
     * @Route("/{id}", name="internaute_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Internaute')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Internaute entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Internaute entity.
     *
     * @Route("/{id}/edit", name="internaute_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Internaute')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Internaute entity.');
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
    * Creates a form to edit a Internaute entity.
    *
    * @param Internaute $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Internaute $entity)
    {
        $form = $this->createForm(new InternauteType(), $entity, array(
            'action' => $this->generateUrl('internaute_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Internaute entity.
     *
     * @Route("/{id}", name="internaute_update")
     * @Method("PUT")
     * @Template("TestBundle:Internaute:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Internaute')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Internaute entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('internaute_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Internaute entity.
     *
     * @Route("/{id}", name="internaute_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TestBundle:Internaute')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Internaute entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('internaute'));
    }

    /**
     * Creates a form to delete a Internaute entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('internaute_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
