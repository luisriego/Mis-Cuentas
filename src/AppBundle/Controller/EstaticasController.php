<?php

namespace AppBundle\Controller;

use AdminBundle\Entity\Contato;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Util\Util;

class EstaticasController extends Controller
{
    /**
     * @Route("/contato", name="contato")
     */
    public function contatoAction(Request $request)
    {
        $contato = new Contato();
        $form = $this->createFormBuilder($contato)
            ->add('nombre', TextType::class)
            ->add('email', EmailType::class)
            ->add('mensaje', TextareaType::class)
            ->add('enviar', SubmitType::class, array('label' => 'Enviar Mensagem'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //Ações que serão realizadas se as validações fores corretas
            $contato->setFecha(new \DateTime('now'));
            $contato->setIp($request->getClientIp());
            $contato->setSlug(Util::getSlug($contato->getNombre()));

            $em = $this->getDoctrine()->getManager();
            $em->persist($contato);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        // replace this example code with whatever you need
        return $this->render('@App/Contato/contato.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/nossos-clientes", name="nossos-clientes")
     */
    public function clientesAction()
    {
//        $clientes = $this->getDoctrine()->getRepository('ModelBundle:Clientes')->todosClientes();
        $query = $this->getDoctrine()->getRepository('ModelBundle:Clientes')->findClientes();



        return $this->render('@App/Estaticas/nossos-clientes.html.twig', array('clientes' => $query));
    }
}
