<?php

namespace App\Repository;

use App\Entity\ImageCours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImageCours>
 *
 * @method ImageCours|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageCours|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageCours[]    findAll()
 * @method ImageCours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageCoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageCours::class);
    }

//    /**
//     * @return ImageCours[] Returns an array of ImageCours objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ImageCours
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
