<?php
/**
 * Created by PhpStorm.
 * User: JoséLuís
 * Date: 13/08/2015
 * Time: 16:33
 */

namespace AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AsientoRepository extends EntityRepository
{
//    public function findMensalByGrupo($grupo, $mes)
//    {
//        $em = $this->getEntityManager();
//        $consulta = $em->createQuery('
//                                SELECT SUM(a.importe)
//                                FROM AdminBundle:Asiento a
//                                JOIN a.tipo t
//                                JOIN t.grupo g
//                                WHERE MONTH(a.fecha) = :mes
//                                AND t.grupo = :grupo');
//        $consulta->setParameter('mes', $mes);
//        $consulta->setParameter('grupo', $grupo);
//        return $consulta->getSingleResult();
//    }

    /**
     * @param $mes
     * @return mixed
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findMensalBy($mes)
    {

//
//        $em = $this->getEntityManager();
//        $dql = "SELECT SUM(a.importe) AS balance FROM AdminBundle:Asiento a " .
//            "WHERE a.vto = ?mes";
//        $balance = $em->createQuery($dql)
//            ->setParameter(mes, $mes)
//            ->getSingleScalarResult();
//        return $balance;


        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT a
                                FROM AdminBundle:Asiento a
                                WHERE a.vto = :mes');
        $consulta->setParameter('mes', $mes);
        return $consulta->getResult();
    }

    public function findGrupos()
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT a, t, g
                                FROM AdminBundle:Asiento a
                                JOIN a.tipo t
                                JOIN t.grupo g');
        return $consulta->getResult();
    }

    public function findPorGrupo($grupo, $mes)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT SUM(a.importe) AS total
                                FROM AdminBundle:Asiento a
                                JOIN a.tipo t
                                JOIN t.grupo g
                                WHERE t.grupo = :grupo
                                AND MONTH(a.fecha) = :esteMes');
        $consulta->setParameter('grupo', $grupo);
        $consulta->setParameter('esteMes', $mes);
        return $consulta->getResult();
    }

    public function totalMes($mes)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT SUM(a.importe) AS total
                                FROM AdminBundle:Asiento a
                                WHERE MONTH(a.fecha) = :mes');
        $consulta->setParameter('mes', $mes);
        return $consulta->getResult();
    }

    public function gastosFijos()
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT a
                                FROM AdminBundle:Asiento a
                                WHERE a.fijo = TRUE ');
        return $consulta->getResult();
    }

    public function findTodosMes($mes)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT a
                                FROM AdminBundle:Asiento a
                                WHERE MONTH(a.fecha) = :mes');
        $consulta->setParameter('mes', $mes);
        return $consulta->getResult();
    }

    public function findNMes($mes, $limite)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT a
                                FROM AdminBundle:Asiento a
                                WHERE MONTH(a.fecha) = :mes
                                ORDER BY a.fecha DESC');
        $consulta->setParameter('mes', $mes);
        $consulta->setMaxResults($limite);
        return $consulta->getResult();
    }

}