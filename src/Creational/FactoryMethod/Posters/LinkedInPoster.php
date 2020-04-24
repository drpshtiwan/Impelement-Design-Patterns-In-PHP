<?php

namespace Jano\Creational\FactoryMethod\Posters;

use Jano\Creational\FactoryMethod\Implementations\LinkedInConnector;
use Jano\Creational\FactoryMethod\Interfaces\SocialNetworkConnector;
use Jano\Creational\FactoryMethod\SocialNetworkPoster;

class LinkedInPoster extends SocialNetworkPoster
{
    private $email,$password;
    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = $password;
    }
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email,$this->password);
    }
}