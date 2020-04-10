<?php

namespace Jano\Creational\AbstractFactory;

use Jano\Creational\AbstractFactory\Parsers\ParserInterface;

interface FactoryParserInterface
{
    public function parsing(string $string, ParserInterface $parse);
}
