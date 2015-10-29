<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Dao;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

/**
 * Description of UtilisateurRepository
 *
 * @author magloire
 */
class UtilisateurRepository extends EntityRepository implements UserProviderInterface {

    public function loadUserByUsername($username) {
        $q = $this
                ->createQueryBuilder('u')
                ->where('u.login = :username or u.email = :email')
                ->setParameter('username', $username)
                ->setParameter('email', $username)
                ->getQuery();
        try {
// La méthode Query::getSingleResult() lance une exception
// s'il n'y a pas d'entrée correspondante aux critères
            $user = $q->getSingleResult();
        } catch (NoResultException $e) {
            throw new UsernameNotFoundException(sprintf('Unable to find an active admin
AcmeUserBundle:User object identified by "%s".', $username), 0, $e);
        }
        return $user;
    }

    public function find($id) {
        $q = $this
                ->createQueryBuilder('u')
                ->where('u.id = :id')
                ->setParameter('id', $id)
                ->getQuery();
        try {
// La méthode Query::getSingleResult() lance une exception
// s'il n'y a pas d'entrée correspondante aux critères
            $user = $q->getSingleResult();
        } catch (NoResultException $e) {
            throw new UsernameNotFoundException(sprintf('Unable to find an active admin
AcmeUserBundle:User object identified by "%s".', $id), 0, $e);
        }
        return $user;
    }

    public function refreshUser(UserInterface $user) {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(
            sprintf(
                    'Instances of "%s" are not supported.', $class
            )
            );
        }
        return $this->find($user->getId());
    }

    public function supportsClass($class) {
        return $this->getEntityName() === $class || is_subclass_of($class, $this->getEntityName());
    }

//put your code here
}
