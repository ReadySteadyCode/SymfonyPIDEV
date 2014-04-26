<?php

namespace pidev\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use pidev\TestBundle\Entity\Commentairedeal;
use pidev\TestBundle\Form\CommentairedealType;

/**
 * Commentairedeal controller.
 *
 * @Route("/commentairedeal")
 */
class CommentairedealController extends Controller
{

    /**
     * Lists all Commentairedeal entities.
     *
     * @Route("/", name="commentairedeal")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TestBundle:Commentairedeal')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Commentairedeal entity.
     *
     * @Route("/", name="commentairedeal_create")
     * @Method("POST")
     * @Template("TestBundle:Commentairedeal:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Commentairedeal();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('commentairedeal_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Commentairedeal entity.
    *
    * @param Commentairedeal $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Commentairedeal $entity)
    {
        $form = $this->createForm(new CommentairedealType(), $entity, array(
            'action' => $this->generateUrl('commentairedeal_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Commentairedeal entity.
     *
     * @Route("/new", name="commentairedeal_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Commentairedeal();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Commentairedeal entity.
     *
     * @Route("/{id}", name="commentairedeal_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Commentairedeal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentairedeal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Commentairedeal entity.
     *
     * @Route("/{id}/edit", name="commentairedeal_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Commentairedeal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentairedeal entity.');
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
    * Creates a form to edit a Commentairedeal entity.
    *
    * @param Commentairedeal $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Commentairedeal $entity)
    {
        $form = $this->createForm(new CommentairedealType(), $entity, array(
            'action' => $this->generateUrl('commentairedeal_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Commentairedeal entity.
     *
     * @Route("/{id}", name="commentairedeal_update")
     * @Method("PUT")
     * @Template("TestBundle:Commentairedeal:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Commentairedeal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentairedeal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('commentairedeal_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Commentairedeal entity.
     *
     * @Route("/{id}", name="commentairedeal_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TestBundle:Commentairedeal')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Commentairedeal entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('commentairedeal'));
    }

    /**
     * Creates a form to delete a Commentairedeal entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentairedeal_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
