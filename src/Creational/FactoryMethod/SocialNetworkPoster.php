<?php
namespace Jano\Creational\FactoryMethod;

use Jano\Creational\FactoryMethod\Interfaces\SocialNetworkConnector;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post($post)
    {
        $this->getSocialNetwork()->logIn();
        $this->getSocialNetwork()->createPost($post);
    }
}