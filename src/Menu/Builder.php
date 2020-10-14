<?php

namespace App\Menu;

use App\Entity\User;
use Knp\Menu\FactoryInterface;
use Symfony\Component\Security\Core\Security;

class Builder
{
    /**
     * @var FactoryInterface $factory
     */
    private $factory;
    /**
     * @var Security
     */
    private $security;

    /**
     * Builder constructor.
     * @param FactoryInterface $factory
     * @param Security $security
     */
    public function __construct(FactoryInterface $factory, Security $security)
    {
        $this->factory = $factory;
        $this->security = $security;
    }

    public function menu()
    {
        /* @var User $user */
        $user = $this->security->getUser();

        $menu = $this->factory->createItem('root');

        $menu->addChild('Home', ['route' => 'app_home']);

        $menu->addChild('Profile', [
            'route' => 'app_profile',
            'routeParameters' => ['id' => 1]
        ]);

        return $menu;
    }
}