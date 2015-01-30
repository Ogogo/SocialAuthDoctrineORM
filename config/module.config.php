<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'SocialAuth-Entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => array(__DIR__ . '/../src/SocialAuthDoctrineORM/Entity'),
            ),
            'orm_default' => array(
                'drivers' => array(
                    'SocialAuthDoctrineORM\Entity'  => 'SocialAuth-Entity'
                )
            )
        )
    ),
    'service_manager' => array(
        'factories' => array(
            'SocialAuth-ModuleOptions' => 'SocialAuthDoctrineORM\Service\ModuleOptionsFactory',
            'SocialAuth-UserProviderMapper' => 'SocialAuthDoctrineORM\Service\UserProviderMapperFactory',
        ),
    ),
);