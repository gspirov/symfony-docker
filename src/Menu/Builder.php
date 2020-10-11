<?php

namespace App\Menu;

use Knp\Menu\FactoryInterface;

class Builder
{
    /**
     * @var FactoryInterface $factory
     */
    private $factory;

    /**
     * Builder constructor.
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function menu()
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Home', ['route' => 'app_home']);

        $menu->addChild('Profile', [
            'route' => 'app_profile',
            'routeParameters' => ['id' => 1]
        ]);

        return $menu;
    }
}