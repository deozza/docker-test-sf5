<?php

namespace App\Repository;

use App\Entity\DummyEntity;
use Doctrine\ORM\EntityRepository;

/**
 * @method DummyEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method DummyEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method DummyEntity[]    findAll()
 * @method DummyEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DummyRepository extends EntityRepository
{
}
