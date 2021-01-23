<?php

namespace Jano\Structural\Adapter;

class Filesystem
{
    public function exists($path)
    {
        return 'Check existing file from Local for ' . $path;
    }

    public function get($path)
    {
        return 'Get file from Local for ' . $path;
    }

    public function put($path, $content)
    {
        return "Put some content to a file from Local for this {$path}";
    }

    public function delete($path)
    {
        return "Delete file from local for this {$path}";
    }
}
