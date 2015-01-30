<?php

namespace SocialAuthDoctrineORM\Options;

use SocialAuth\Options\ModuleOptions as BaseModuleOptions;

class ModuleOptions extends BaseModuleOptions
{
    /**
     * @var string
     */
    protected $userProviderEntityClass = 'SocialAuthDoctrineORM\Entity\UserProvider';
}
