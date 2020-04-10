<?php

use Jano\Creational\AbstractFactory\FactoryParser;
use Jano\Creational\AbstractFactory\Parsers\JsonParser;
use Jano\Creational\AbstractFactory\Parsers\XMLParser;

require "../../vendor/autoload.php";

$abstractFactory = new FactoryParser();
$json = '{"menu": {"id": "file","value": "File","popup": {"menuitem": [{"value": "New", "onclick": "CreateNewDoc()"},{"value": "Open", "onclick": "OpenDoc()"},{"value": "Close", "onclick": "CloseDoc()"}]}}}';
$xml = '<menu id="file" value="File"><popup><menuitem value="New" onclick="CreateNewDoc()" /><menuitem value="Open" onclick="OpenDoc()" /><menuitem value="Close" onclick="CloseDoc()" /></popup></menu>';

echo "FORM JSON";
print_r($abstractFactory->parsing($json, new JsonParser));
echo "FORM XML";
print_r($abstractFactory->parsing($xml, new XMLParser));
