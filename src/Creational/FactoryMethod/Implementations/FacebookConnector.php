<?php
namespace Jano\Creational\FactoryMethod\Implementations;

use Jano\Creational\FactoryMethod\Interfaces\SocialNetworkConnector;

class FacebookConnector implements SocialNetworkConnector
{
    private $email,$password;
    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = $password;
    }


    public function logIn()
    {
        // Facebok API for login
        echo "Successfully logged In to facebook with ". $this->email."\n";
    }

    public function logOut()
    {
        echo "Successfully logged Out to facbook for ". $this->email."\n";       
    }

    public function createPost($content)
    {
        echo "A topic created in your account (". $this->email.")\n";
        echo $content;
    }
}