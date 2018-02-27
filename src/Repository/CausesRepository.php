<?php

namespace App\Repository;

use App\Entity\Causes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CausesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Causes::class);
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
