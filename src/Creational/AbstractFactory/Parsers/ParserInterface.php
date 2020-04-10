<?php

namespace Jano\Creational\AbstractFactory\Parsers;

interface ParserInterface
{
    public function parse(string $string): array;
}
