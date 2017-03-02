<?php

namespace AdminBundle\Controller;
namespace AdminBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Entity\Asiento;
use AdminBundle\Util\Util;

class DefaultController extends Controller
{
    /**
     * @Route("/admin/formulario-de-assentos", name="formulario_asiento")
     */
    public function asientoAction(Request $peticion)
    {
        $mesActual = date('m');
        $mesAnterior = date('m')-1;
        $em = $this->getDoctrine()->getManager();
//        $suma = $em->getRepository('AdminBundle:Asiento')->findAll();
        $suma = $em->getRepository('AdminBundle:Asiento')->findTodosMes($mesActual);
        $sumaMesAnterior = $em->getRepository('AdminBundle:Asiento')->findTodosMes($mesAnterior);
//        $a = $em->getRepository('AdminBundle:Asiento')->findBy([], ['fecha' => 'DESC'], 10);
        $a = $em->getRepository('AdminBundle:Asiento')->findNMes($mesActual, 8);
//        $alimentacion = $em->getRepository('AdminBundle:Asiento')->findPorGrupo(1,$mesActual);
//        $lar = $em->getRepository('AdminBundle:Asiento')->findPorGrupo(2,$mesActual);
//        $saude = $em->getRepository('AdminBundle:Asiento')->findPorGrupo(3,$mesActual);
//        $lazer = $em->getRepository('AdminBundle:Asiento')->findPorGrupo(4,$mesActual);
//        $transporte = $em->getRepository('AdminBundle:Asiento')->findPorGrupo(5,$mesActual);
//        $vestuario = $em->getRepository('AdminBundle:Asiento')->findPorGrupo(6,$mesActual);
//        $educacao = $em->getRepository('AdminBundle:Asiento')->findPorGrupo(8,$mesActual);

        $asiento = new Asiento();
        $asiento->setFecha(new \DateTime('today'));
        $formulario = $this->createFormBuilder($asiento)
            ->add('fecha', 'birthday', array(
                'input'  => 'datetime',
                'widget' => 'single_text'))
            ->add('nombre', TextType::class)
            ->add('tipo', 'entity', array(
                'class' => 'AdminBundle:Tipo',
//                'query_builder' => function (EntityRepository $er) {
//                    return $er->createQueryBuilder('t')
//                        ->orderBy('t.nombre', 'ASC');
//                },
                'property' => 'nombre',
                'expanded' => false,
                'multiple' => false,))
            ->add('importe', MoneyType::class)
            ->add('fPago', ChoiceType::class, array('choices'  => array(
                '1' => 'Dinheiro',
                '6' => 'Débito',
                '2' => 'Cheque',
                '3' => 'American',
                '4' => 'Master',
                '5' => 'Visa'),
                'required' => true,))
            ->add('parcelas', IntegerType::class)
            ->add('anotacion', TextareaType::class)
            ->add('vacaciones', CheckboxType::class, array('required' => false))
            ->add('registrar', SubmitType::class)
            ->getForm();


        $formulario->handleRequest($peticion);

        if ($formulario->isValid()) {
            // Validar los datos enviados y guardarlos en la base de datos


            $pago     = $em->getRepository('AdminBundle:FPago')->findOneById($asiento->getFPago());
            $tipo     = $em->getRepository('AdminBundle:Tipo')->findOneById($asiento->getTipo());
            $slug     = Util::getSlug($asiento->getNombre());
            $asiento->setFPago($pago);
            $asiento->setTipo($tipo);
            $asiento->setSlug($slug);
            $asiento->setOperacion($tipo);
            if (empty($asiento->getParcelas()) ){
                $asiento->setParcelas(1);
            }
            $parcelas = $asiento->getParcelas();
            $parcela = $asiento->getImporte() / $parcelas;
            // for ($i = 0; $i < $parcelas; $i++) {
            //     p.$i = clone $asiento;
            //     p.$i->setImporte(parcela);
            //     // p.$i->setFecha(add(new DateInterval("'".i * 30. days"'"));
            //     var_dump(p.$i);
            //     $em->persist(p.$i);
            // }
            $em->persist($asiento);
            $em->flush();
            return $this->redirect($this->generateUrl('formulario_asiento'));
        }

        return $this->render(
            '@Admin/form-asiento.html.twig', array(
            'formulario' => $formulario->createView(),
            'asiento' => $a,
            'suma' => $suma,
            'sumaMesAnterior' => $sumaMesAnterior// ,
//            'alim' => $alimentacion,
//            'lar' => $lar,
//            'saude' => $saude,
//            'lazer' => $lazer,
//            'transporte' => $transporte,
//            'vestuario' => $vestuario,
//            'educ' => $educacao
        ));
    }
}
