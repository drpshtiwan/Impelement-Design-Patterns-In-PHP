<?php
namespace Jano\Creational\FactoryMethod\Interfaces;
interface SocialNetworkConnector
{
    public function logIn();
    public function logOut();
    public function createPost($content);
}