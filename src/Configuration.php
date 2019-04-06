<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Amylian\Doctrine\ORM;

/**
 * Description of Configuration
 *
 * @author andreas
 */
class Configuration extends \Doctrine\ORM\Configuration implements ConfigurationInterface
{
    use \Amylian\Utils\ṔropertyTrait;
    use \Amylian\Doctrine\DBAL\ConfigurationTrait;
}
