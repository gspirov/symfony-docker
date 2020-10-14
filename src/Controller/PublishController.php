<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Component\Routing\Annotation\Route;

class PublishController extends AbstractController
{
    /**
     * @Route("/publish", name="app_publish")
     * @param PublisherInterface $publisher
     */
    public function __invoke(PublisherInterface $publisher)
    {

    }
}