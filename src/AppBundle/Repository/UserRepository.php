<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function findOneByCredentials($login, $pass)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $query = $qb
            ->select('user')
            ->from('AppBundle:Entity', 'user')
            ->where('loginName = :login')
            ->andWhere('password = :password')
            ->setParameter('login', $login)
            ->setParameter('password', $pass)
            ->getQuery();

        return $query->getResult();
    }
}
