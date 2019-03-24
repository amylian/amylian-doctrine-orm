<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Amylian\Doctrine\ORM;

/**
 * Description of EntityManager
 *
 * @author andreas
 */
class EntityManager extends \Doctrine\ORM\EntityManager implements EntityManagerInterface
{
    public function __construct(\Amylian\Doctrine\DBAL\ConnectionProviderInterface $connectionProvider)
    {
        $actualConnection = $connectionProvider->getActualConnection();
        parent::__construct($connectionProvider->getActualConnection(), $actualConnection->getConfiguration(), $eventManager);
    }
}
