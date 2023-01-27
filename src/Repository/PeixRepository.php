<?php

namespace App\Repository;

use App\Entity\Peix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Peix>
 *
 * @method Peix|null find($id, $lockMode = null, $lockVersion = null)
 * @method Peix|null findOneBy(array $criteria, array $orderBy = null)
 * @method Peix[]    findAll()
 * @method Peix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PeixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Peix::class);
    }

    public function save(Peix $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Peix $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    public function findByName($nom): array
    {
        $qb = $this->createQueryBuilder('c')
        ->andWhere('c.nom LIKE :nom')
        ->setParameter('nom', '%' . $nom . '%')
        ->getQuery();
        return $qb->execute();
    }


//    /**
//     * @return Peix[] Returns an array of Peix objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Peix
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
