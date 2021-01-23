<?php

namespace Jano\Structural\Adapter\Adapters;

use Jano\Structural\Adapter\Contracts\FilesystemContract;
use Jano\Structural\Adapter\S3;

class S3Adapter implements FilesystemContract
{
    protected $client;
    public function __construct(S3 $client)
    {
        $this->client = $client;
    }

    public function connect($details)
    {
        return $this->client->connectiong($details);
    }

    public function exist($path)
    {
        return $this->client->fileExist($path);
    }

    public function get($path)
    {
        return $this->client->getIt($path);
    }

    public function put($path, $content)
    {
        return $this->client->setIt($path, $content);
    }

    public function delete($path)
    {
        return $this->client->removeIt($path);
    }
}
