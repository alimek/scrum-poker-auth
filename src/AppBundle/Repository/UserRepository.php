<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function findOneByCredentials($login, $password)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $query = $queryBuilder
            ->select('user')
            ->from('AppBundle\Entity\User', 'user')
            ->where('loginName = :login')
            ->andWhere('password = :password')
            ->setParameter('login', $login)
            ->setParameter('password', $password)
            ->getQuery();

        return $query->getResult();
    }
}
