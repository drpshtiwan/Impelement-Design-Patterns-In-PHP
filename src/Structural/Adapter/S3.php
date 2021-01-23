<?php

namespace Jano\Structural\Adapter;

class S3
{
    public function connectiong($details)
    {
        return 'Connecting to S3';
    }

    public function fileExist($path)
    {
        return 'Check existing file from S3 for ' . $path;
    }

    public function getIt($path)
    {
        return 'Get file from S3 for ' . $path;
    }

    public function setIt($path, $content)
    {
        return "Put some content to a file from S3 for this {$path}";
    }

    public function removeIt($path)
    {
        return "Delete file from S3 for this {$path}";
    }
}
