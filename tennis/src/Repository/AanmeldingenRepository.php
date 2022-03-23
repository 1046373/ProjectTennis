<?php

namespace App\Repository;

use App\Entity\Aanmeldingen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Aanmeldingen|null find($id, $lockMode = null, $lockVersion = null)
 * @method Aanmeldingen|null findOneBy(array $criteria, array $orderBy = null)
 * @method Aanmeldingen[]    findAll()
 * @method Aanmeldingen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AanmeldingenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Aanmeldingen::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Aanmeldingen $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Aanmeldingen $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Aanmeldingen[] Returns an array of Aanmeldingen objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Aanmeldingen
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
