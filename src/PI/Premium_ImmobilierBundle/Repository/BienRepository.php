<?php

namespace PI\Premium_ImmobilierBundle\Repository;
use Doctrine\ORM\EntityRepository;
use PI\Premium_ImmobilierBundle\Entity\TypeBien;
use PI\Premium_ImmobilierBundle\Entity\Localite;
use PI\Premium_ImmobilierBundle\Entity\Bien;
use PI\Premium_ImmobilierBundle\Entity\Image;
use PI\Premium_ImmobilierBundle\Entity\Reservation;

use Doctrine\ORM\QueryBuilder;
/**
 * BienRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BienRepository extends \Doctrine\ORM\EntityRepository
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

 /*public function findTypeBudjetLocalite($localite,$type){
    $qb = $this
    ->createQueryBuilder('b')
    ->leftJoin('b.Localite', 'loc')
    ->addSelect('loc')
    ->leftJoin('b.TypeBien','typ')
    ->addSelect('typ')
    ->where('b.Localite = :localite')
    ->setParameter('localite',$localite)
    ->andWhere('b.TypeBien= :type')
    ->setParameter('type',$type);

   
    return $qb
    ->getQuery()
    ->getResult();


 }*/

public function findBiens($idLocalite=0,$idType=0,$budget=0)
    {
        $dql = "SELECT b, i FROM PI\Premium_ImmobilierBundle\Entity\Bien  b 
        left Join b.images i Join b.TypeBien t Join b.Localite l WHERE b.etat = 1";

       


        
        if ($idLocalite != 0) {
            $dql .= ' AND l.id = :idLoc';
        }
        if ($idType != 0) {
            $dql .= ' AND t.id = :idType';
        }
        if ($budget != 0) {
            $dql .= ' AND b.prixlocation BETWEEN :prixMin AND :prixMax';
        }
 
        $query = $this->getEntityManager()->createQuery($dql);
 
        if ($idLocalite != 0) {
            $query->setParameter('idLoc', $idLocalite);
        }
        if ($idType != 0) {
            $query->setParameter('idType', $idType);
        }
        if ($budget != 0) {
            $query->setParameter('prixMin', $budget - 10000)
            ->setParameter('prixMax', $budget + 20000);
        }

 
        return $query->getResult();
    }


/****trouver les biens independamment des etats */
    public function findBienWhitoutEtat()
      {
        $dql = "SELECT b, i FROM PI\Premium_ImmobilierBundle\Entity\Bien  b 
        left Join b.images i Join b.TypeBien t Join b.Localite l order by b.id ";

       $query = $this->getEntityManager()->createQuery($dql);
 
        return $query->getResult();
      }

       /**Trouver un bien a reserver +description+image by id */
    public function FindBienById($id)
    {
        $dql = "SELECT b, i FROM PI\Premium_ImmobilierBundle\Entity\Bien  b 
        left Join b.images i Join b.TypeBien t Join b.Localite l  WHERE b.id = :id";
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('id', $id);

          return $query->getResult();   
    }


           /** Touver la list des 6 premiers biens diponibles */
   public function list6Biens($idLocalite=0,$idType=0,$budget=0)
      {
        $dql = "SELECT b, i FROM PI\Premium_ImmobilierBundle\Entity\Bien  b 
        left Join b.images i Join b.TypeBien t Join b.Localite l WHERE b.etat = 1  ";
         $query = $this->getEntityManager()->createQuery($dql);
          return $query->getResult();
      }



  





}
