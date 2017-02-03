<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CiqualRepository extends EntityRepository
{
    /**
     * @param string $ingredient
     *
     * @return array|null
     */
    public function findByORIGGPFROrORIGFDNM(string $ingredient)
    {
        $qb = $this->createQueryBuilder('p');
        $result = $qb->where($qb->expr()->like('p.ORIGGPFR', ':ingredient'))
            ->orWhere($qb->expr()->like('p.ORIGFDNM', ':ingredient'))
            ->setParameter('ingredient', '%'.$ingredient.'%')
            ->getQuery()
            ->getResult();

        return $result;
    }
}
