<?php

use Jano\Creational\AbstractFactory\FactoryParser;
use Jano\Creational\AbstractFactory\Parsers\JsonParser;
use Jano\Creational\AbstractFactory\Parsers\XMLParser;
use Jano\Creational\FactoryMethod\Implementations\FacebookConnector;
use Jano\Creational\FactoryMethod\Posters\FacebookPoster;
use Jano\Creational\FactoryMethod\SocialNetworkPoster;

require "../../vendor/autoload.php";

// Abstarct Factory
// $abstractFactory = new FactoryParser();
// $json = '{"menu": {"id": "file","value": "File","popup": {"menuitem": [{"value": "New", "onclick": "CreateNewDoc()"},{"value": "Open", "onclick": "OpenDoc()"},{"value": "Close", "onclick": "CloseDoc()"}]}}}';
// $xml = '<menu id="file" value="File"><popup><menuitem value="New" onclick="CreateNewDoc()" /><menuitem value="Open" onclick="OpenDoc()" /><menuitem value="Close" onclick="CloseDoc()" /></popup></menu>';

// echo "FORM JSON";
// print_r($abstractFactory->parsing($json, new JsonParser));
// echo "FORM XML";
// print_r($abstractFactory->parsing($xml, new XMLParser));

// Facotry Method
function postInAccount(SocialNetworkPoster $poster) {
    $poster->post('Hello World');
    echo "<br>";
    $poster->post('What happend dear!');
}
echo "<pre>";
postInAccount(new FacebookPoster('php@janocode.com','MINE'));
echo "</pre>";
