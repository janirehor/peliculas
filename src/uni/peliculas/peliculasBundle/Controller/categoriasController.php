<?php

namespace uni\peliculas\peliculasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\peliculas\peliculasBundle\Entity\categorias;
use uni\peliculas\peliculasBundle\Form\categoriasType;

/**
 * categorias controller.
 *
 */
class categoriasController extends Controller
{

    /**
     * Lists all categorias entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniPeliculasBundle:categorias')->findAll();

        return $this->render('uniPeliculasBundle:categorias:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new categorias entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new categorias();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categorias_show', array('id' => $entity->getId())));
        }

        return $this->render('uniPeliculasBundle:categorias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a categorias entity.
     *
     * @param categorias $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(categorias $entity)
    {
        $form = $this->createForm(new categoriasType(), $entity, array(
            'action' => $this->generateUrl('categorias_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new categorias entity.
     *
     */
    public function newAction()
    {
        $entity = new categorias();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniPeliculasBundle:categorias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categorias entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniPeliculasBundle:categorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categorias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniPeliculasBundle:categorias:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categorias entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniPeliculasBundle:categorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categorias entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniPeliculasBundle:categorias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a categorias entity.
    *
    * @param categorias $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(categorias $entity)
    {
        $form = $this->createForm(new categoriasType(), $entity, array(
            'action' => $this->generateUrl('categorias_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing categorias entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniPeliculasBundle:categorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categorias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('categorias_edit', array('id' => $id)));
        }

        return $this->render('uniPeliculasBundle:categorias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a categorias entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniPeliculasBundle:categorias')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find categorias entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categorias'));
    }

    /**
     * Creates a form to delete a categorias entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categorias_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
