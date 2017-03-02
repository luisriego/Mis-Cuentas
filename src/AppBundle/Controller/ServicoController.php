<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ServicoController extends Controller
{
    /**
     * @Route("/servico/{slug}", name="servico")
     */
    public function servicoAction($slug)
    {

        return $this->render('AppBundle:Servicos:servico.html.twig');
    }

    /**
     * @Route("/servicos", name="servicos")
     */
    public function servicosAction()
    {

        return $this->render('AppBundle:Servicos:servicos.html.twig');
    }
}
