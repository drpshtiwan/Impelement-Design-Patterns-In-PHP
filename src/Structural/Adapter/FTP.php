<?php

namespace Jano\Structural\Adapter;

class FTP
{
    public function login($details)
    {
        return 'Connecting to FTP';
    }

    public function isExist($path)
    {
        return 'Check existing file from FTP for ' . $path;
    }

    public function getFile($path)
    {
        return 'Get file from FTP for ' . $path;
    }

    public function setFile($path, $content)
    {
        return "Put some content to a file from FTP for this {$path}";
    }

    public function remove($path)
    {
        return "Delete file from FTP for this {$path}";
    }
}
