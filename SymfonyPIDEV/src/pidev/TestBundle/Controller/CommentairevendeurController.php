<?php

namespace pidev\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use pidev\TestBundle\Entity\Commentairevendeur;
use pidev\TestBundle\Form\CommentairevendeurType;

/**
 * Commentairevendeur controller.
 *
 * @Route("/commentairevendeur")
 */
class CommentairevendeurController extends Controller
{

    /**
     * Lists all Commentairevendeur entities.
     *
     * @Route("/", name="commentairevendeur")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TestBundle:Commentairevendeur')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Commentairevendeur entity.
     *
     * @Route("/", name="commentairevendeur_create")
     * @Method("POST")
     * @Template("TestBundle:Commentairevendeur:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Commentairevendeur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('commentairevendeur_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Commentairevendeur entity.
    *
    * @param Commentairevendeur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Commentairevendeur $entity)
    {
        $form = $this->createForm(new CommentairevendeurType(), $entity, array(
            'action' => $this->generateUrl('commentairevendeur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Commentairevendeur entity.
     *
     * @Route("/new", name="commentairevendeur_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Commentairevendeur();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Commentairevendeur entity.
     *
     * @Route("/{id}", name="commentairevendeur_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Commentairevendeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentairevendeur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Commentairevendeur entity.
     *
     * @Route("/{id}/edit", name="commentairevendeur_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Commentairevendeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentairevendeur entity.');
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
    * Creates a form to edit a Commentairevendeur entity.
    *
    * @param Commentairevendeur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Commentairevendeur $entity)
    {
        $form = $this->createForm(new CommentairevendeurType(), $entity, array(
            'action' => $this->generateUrl('commentairevendeur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Commentairevendeur entity.
     *
     * @Route("/{id}", name="commentairevendeur_update")
     * @Method("PUT")
     * @Template("TestBundle:Commentairevendeur:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Commentairevendeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentairevendeur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('commentairevendeur_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Commentairevendeur entity.
     *
     * @Route("/{id}", name="commentairevendeur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TestBundle:Commentairevendeur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Commentairevendeur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('commentairevendeur'));
    }

    /**
     * Creates a form to delete a Commentairevendeur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentairevendeur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
