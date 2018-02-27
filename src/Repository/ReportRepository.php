<?php

namespace App\Repository;

use App\Entity\Report;
use App\Entity\Cause;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ReportRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Report::class);
    }

    
    public function getByCause($value)
    {
        return $this->createQueryBuilder('r')
            ->where('r.primaryCause.id = :value')->setParameter('value', $value->getId())
            ->orderBy('r.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function getRelatedReports($value)
    {
        return $this->createQueryBuilder('r')
            ->where('r.primaryCause = :value')->setParameter('value', $value->getPrimaryCause()->getId())
            ->andWhere('r.id != :valId')->setParameter('valId', $value->getId())
            ->orderBy('r.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    
}
