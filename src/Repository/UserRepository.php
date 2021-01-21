<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
public function findAllOrderedByName()
{
return $this->getEntityManager()
->createQuery(
'SELECT p FROM AppBundle:Product p ORDER BY p.name ASC'
)
->getResult();
}
}