<?php

namespace pidev\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use pidev\TestBundle\Entity\Chart;
use pidev\TestBundle\Form\ChartType;

/**
 * Chart controller.
 *
 * @Route("/chart")
 */
class ChartController extends Controller
{

    /**
     * Lists all Chart entities.
     *
     * @Route("/", name="chart")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TestBundle:Chart')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Chart entity.
     *
     * @Route("/", name="chart_create")
     * @Method("POST")
     * @Template("TestBundle:Chart:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Chart();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('chart_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Chart entity.
    *
    * @param Chart $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Chart $entity)
    {
        $form = $this->createForm(new ChartType(), $entity, array(
            'action' => $this->generateUrl('chart_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Chart entity.
     *
     * @Route("/new", name="chart_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Chart();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Chart entity.
     *
     * @Route("/{id}", name="chart_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Chart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chart entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Chart entity.
     *
     * @Route("/{id}/edit", name="chart_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Chart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chart entity.');
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
    * Creates a form to edit a Chart entity.
    *
    * @param Chart $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Chart $entity)
    {
        $form = $this->createForm(new ChartType(), $entity, array(
            'action' => $this->generateUrl('chart_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Chart entity.
     *
     * @Route("/{id}", name="chart_update")
     * @Method("PUT")
     * @Template("TestBundle:Chart:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestBundle:Chart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chart entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('chart_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Chart entity.
     *
     * @Route("/{id}", name="chart_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TestBundle:Chart')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Chart entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('chart'));
    }

    /**
     * Creates a form to delete a Chart entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chart_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
