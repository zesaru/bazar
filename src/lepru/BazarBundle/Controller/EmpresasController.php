<?php

namespace lepru\BazarBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use lepru\BazarBundle\Entity\Empresas;
use lepru\BazarBundle\Form\EmpresasType;

/**
 * Empresas controller.
 *
 * @Route("/empresas")
 */
class EmpresasController extends Controller
{

    /**
     * Lists all Empresas entities.
     *
     * @Route("/", name="empresas")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BazarBundle:Empresas')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Empresas entity.
     *
     * @Route("/", name="empresas_create")
     * @Method("POST")
     * @Template("BazarBundle:Empresas:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Empresas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $entity -> setFechadeincripcion(new \DateTime());
            $em->flush();

            return $this->redirect("http://embajadadelperuenjapon.org/peru-charity-market/");
                //$this->generateUrl('empresas', ));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Empresas entity.
     *
     * @param Empresas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Empresas $entity)
    {
        $form = $this->createForm(new EmpresasType(), $entity, array(
            'action' => $this->generateUrl('empresas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Empresas entity.
     *
     * @Route("/new", name="empresas_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Empresas();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Empresas entity.
     *
     * @Route("/{id}", name="empresas_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BazarBundle:Empresas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Empresas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Empresas entity.
     *
     * @Route("/{id}/edit", name="empresas_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BazarBundle:Empresas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Empresas entity.');
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
    * Creates a form to edit a Empresas entity.
    *
    * @param Empresas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Empresas $entity)
    {
        $form = $this->createForm(new EmpresasType(), $entity, array(
            'action' => $this->generateUrl('empresas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Empresas entity.
     *
     * @Route("/{id}", name="empresas_update")
     * @Method("PUT")
     * @Template("BazarBundle:Empresas:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BazarBundle:Empresas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Empresas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('empresas_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Empresas entity.
     *
     * @Route("/{id}", name="empresas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BazarBundle:Empresas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Empresas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('empresas'));
    }

    /**
     * Creates a form to delete a Empresas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('empresas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
