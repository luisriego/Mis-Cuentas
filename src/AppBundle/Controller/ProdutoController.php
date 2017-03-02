<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProdutoController extends Controller
{
    /**
     * @Route("/produtos", name="produtos")
     */
    public function produtosAction()
    {
        $produtos = $this->getDoctrine()->getRepository('ModelBundle:Produto')->findProdutos();
        $categorias = $this->getDoctrine()->getRepository('ModelBundle:Categoria')->findCategorias();

        return $this->render('AppBundle:Produtos:produtos.html.twig', array(
            'produtos' => $produtos,
            'categorias' => $categorias
        ));
    }

    /**
     * @Route("/produtos/{produto}", name="produto")
     */
    public function produtoAction($produto)
    {
        $produto = $this->getDoctrine()->getRepository('ModelBundle:Produto')->findProduto($produto);

        return $this->render('@App/Produtos/produto.html.twig', array('produto' => $produto));
    }
}
