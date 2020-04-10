<?php
namespace Jano\Creational\AbstractFactory\Parsers;

class XMLParser implements ParserInterface
{
    public function parse(string $string): array
    {
        return (array) simplexml_load_string($string);
    }
}
