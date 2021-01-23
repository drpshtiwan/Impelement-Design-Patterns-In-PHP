<?php

namespace Jano\Structural\Adapter\Contracts;

interface FilesystemContract
{
    public function connect(array $details);
    public function exist(string $path);
    public function get(string $path);
    public function put(string $path, $content);
    public function delete(string $path);
}
