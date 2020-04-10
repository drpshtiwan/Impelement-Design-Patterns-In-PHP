<?php
namespace Jano\Creational\AbstractFactory;

use Jano\Creational\AbstractFactory\Parsers\ParserInterface;

class FactoryParser implements FactoryParserInterface
{
    public function parsing(string $string, ParserInterface $parser): array
    {
        return $parser->parse($string);
    }
}
