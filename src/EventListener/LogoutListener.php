<?php

namespace App\EventListener;

use Symfony\Component\Security\Http\Event\LogoutEvent;

class LogoutListener
{
    /**
     * @param LogoutEvent $event
     */
    public function onLogout(LogoutEvent $event) {}
}