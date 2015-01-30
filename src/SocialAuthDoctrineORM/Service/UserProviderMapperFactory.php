<?php
/**
 * SocialAuthDoctrineORM Module
 *
 * @category   SocialAuthDoctrineORM
 * @package    SocialAuthDoctrineORM_Service
 */

namespace SocialAuthDoctrineORM\Service;

use SocialAuthDoctrineORM\Mapper\UserProvider;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator;

/**
 * @category   SocialAuthDoctrineORM
 * @package    SocialAuthDoctrineORM_Service
 */
class UserProviderMapperFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        $options = $services->get('SocialAuth-ModuleOptions');
        $entityClass = $options->getUserProviderEntityClass();

        $mapper = new UserProvider($services->get('zfcuser_doctrine_em'), $services->get('SocialAuth-ModuleOptions'));
//        $mapper->setDbAdapter($services->get('SocialAuth_ZendDbAdapter'));
        $mapper->setEntityPrototype(new $entityClass);
//        $mapper->setHydrator(new Hydrator\ClassMethods);

        return $mapper;
    }
}
