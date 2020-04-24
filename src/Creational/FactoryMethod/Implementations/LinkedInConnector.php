<?php
namespace Jano\Creational\FactoryMethod\Implementations;

use Jano\Creational\FactoryMethod\Interfaces\SocialNetworkConnector;

class LinkedInConnector implements SocialNetworkConnector
{
    private $email,$password;
    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = $password;
    }
    
    public function logIn()
    {
        // LinkedIn API for login
        echo "Successfully logged In to LinkedIn with ". $this->email."\n";
    }

    public function logOut()
    {
        echo "Successfully logged Out to LinkedIn for ". $this->email."\n";       
    }

    public function createPost($content)
    {
        echo "A topic created in your account (". $this->email.")\n";
        echo $content;
    }
}