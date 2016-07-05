<?php

/*
 * This file is part of the code generator app package.
 *
 * (c) Rafael Calleja <rafaelcalleja@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CodeGenerator\Infrastructure\Persistence\DoctrineMysql;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    /**
     * @return EntityManager
     */
    public function build($conn)
    {
        return EntityManager::create(
            $conn,
            Setup::createYAMLMetadataConfiguration(array(__DIR__.'/config'), true)
        );
    }
}
