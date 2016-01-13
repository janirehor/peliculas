<?php

namespace uni\peliculas\peliculasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\peliculas\peliculasBundle\Entity\actores;
use uni\peliculas\peliculasBundle\Form\actoresType;

/**
 * actores controller.
 *
 */
class actoresController extends Controller
{

    /**
     * Lists all actores entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniPeliculasBundle:actores')->findAll();

        return $this->render('uniPeliculasBundle:actores:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new actores entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new actores();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('actores_show', array('id' => $entity->getId())));
        }

        return $this->render('uniPeliculasBundle:actores:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a actores entity.
     *
     * @param actores $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(actores $entity)
    {
        $form = $this->createForm(new actoresType(), $entity, array(
            'action' => $this->generateUrl('actores_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new actores entity.
     *
     */
    public function newAction()
    {
        $entity = new actores();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniPeliculasBundle:actores:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a actores entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniPeliculasBundle:actores')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find actores entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniPeliculasBundle:actores:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing actores entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniPeliculasBundle:actores')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find actores entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniPeliculasBundle:actores:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a actores entity.
    *
    * @param actores $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(actores $entity)
    {
        $form = $this->createForm(new actoresType(), $entity, array(
            'action' => $this->generateUrl('actores_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing actores entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniPeliculasBundle:actores')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find actores entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('actores_edit', array('id' => $id)));
        }

        return $this->render('uniPeliculasBundle:actores:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a actores entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniPeliculasBundle:actores')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find actores entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('actores'));
    }

    /**
     * Creates a form to delete a actores entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('actores_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
