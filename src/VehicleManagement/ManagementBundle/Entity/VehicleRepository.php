<?php

namespace VehicleManagement\ManagementBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * VehicleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VehicleRepository extends EntityRepository
{
	
	public function getObjects($nbLinePerPage, $offset, $user) {
		$qb = $this->createQueryBuilder('v')
					->where('v.user = :user')
					->setParameter('user', $user)
					->setFirstResult($offset)
					->setMaxResults($nbLinePerPage);
		return $qb->getQuery()->getResult();
	}
	
	public function getAllObjects($user) {
		$qb = $this->createQueryBuilder('v')
					->where('v.user = :user')
					->setParameter('user', $user);
		return $qb;
	}
	
	public function getTotal($user) {
		$qb = $this->createQueryBuilder('v')
					->select('COUNT(v)')
					->where('v.user = :user')
					->setParameter('user', $user);
		return (int) $qb->getQuery()->getSingleScalarResult();
	}
}