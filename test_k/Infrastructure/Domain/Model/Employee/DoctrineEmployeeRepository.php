<?php

namespace Dokify\Infrastructure\Domain\Model\Employee;

use Dokify\Domain\Model\Employee\Employee;
use Doctrine\ORM\EntityRepository;

class DoctrineEmployeeRepository extends EntityRepository implements EmployeeRepository
{
}
