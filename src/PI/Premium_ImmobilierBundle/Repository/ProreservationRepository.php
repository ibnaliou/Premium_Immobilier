<?php

namespace PI\Premium_ImmobilierBundle\Repository;

/**
 * ProreservationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProreservationRepository extends \Doctrine\ORM\EntityRepository
{
	public function countReservation($idbien){
	$qb = $this
    ->createQueryBuilder('r')
    ->select('COUNT(r)')
    ->where('r.bien_id = :idbien')
    ->setParameter('idbien',$idbien);
    return $qb
    ->getQuery()
    ->getSingleScalarResult();
    }


     /** Touver la list des reservations */
      public function lisReservation()
    {
        $dql = "SELECT pr,b,i FROM PI\Premium_ImmobilierBundle\Entity\Proreservation pr
        left Join  pr.proprietaire p  Join  pr.bien b Join  b.TypeBien t Join b.Localite l  Join b.images i where pr.etat='0'";
        $query = $this->getEntityManager()->createQuery($dql);

        return $query->getResult();
    }



      public function findProreservationById($id)
    {
        $dql = "SELECT r,b,i FROM PI\Premium_ImmobilierBundle\Entity\Proreservation pr
        left Join  pr.proprietaire p  Join  pr.bien b Join  b.TypeBien t Join b.Localite l  Join b.images i where pr.id= :id";
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('id', $id);
        return $query->getResult();
    }
}
