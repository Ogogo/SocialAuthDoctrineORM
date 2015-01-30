<?php
/**
 * SocialAuthDoctrineORM Module
 *
 * @category   SocialAuthDoctrineORM
 * @package    SocialAuthDoctrineORM_Service
 */

namespace SocialAuthDoctrineORM\Service;

use SocialAuthDoctrineORM\Options;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * @category   SocialAuthDoctrineORM
 * @package    SocialAuthDoctrineORM_Service
 */
class ModuleOptionsFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        $config = $services->get('Configuration');

        return new Options\ModuleOptions(isset($config['social-auth']) ? $config['social-auth'] : array());
    }
}
