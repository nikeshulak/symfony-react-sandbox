<?php

namespace App\Repository;

use App\Entity\Cause;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CauseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cause::class);
    }

    public function getSimilarTitle($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.title = :value')->setParameter('value', $value)
            // ->orderBy('c.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
}
