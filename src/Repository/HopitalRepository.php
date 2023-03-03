<?php

namespace App\Repository;

use App\Entity\Hopital;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Hopital>
 *
 * @method Hopital|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hopital|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hopital[]    findAll()
 * @method Hopital[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HopitalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hopital::class);
    }

    public function save(Hopital $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Hopital $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function findFiltered(array $criteria = [])
    {
        $qb = $this->createQueryBuilder('e');

        

        if (isset($criteria['type_conference'])) {
            $qb->andWhere('e.typeh = :type_conference')
                ->setParameter('type_conference', 'Hôpital Privé');
        }

        if (isset($criteria['type_workshop'])) {
            $qb->andWhere('e.typeh = :type_workshop')
                ->setParameter('type_workshop', 'Hôpital Publique');
        }

        if (isset($criteria['filter_by_adresse'])) {
            $qb->andWhere('e.adresseh = :filter_by_adresse')
                ->setParameter('filter_by_adresse',$criteria['filter_by_adresse']);
        }
        return $qb->getQuery()->getResult();
    }

//    /**
//     * @return Hopital[] Returns an array of Hopital objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Hopital
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
