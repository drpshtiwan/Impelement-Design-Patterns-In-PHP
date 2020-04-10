<?php

namespace Jano\Creational\AbstractFactory\Parsers;

class JsonParser implements ParserInterface
{
    public function parse(string $string): array
    {
        return json_decode($string, true);
    }
}
