<?php
namespace Jano\Structural\Adapter\Adapters;

use Jano\Structural\Adapter\Contracts\FilesystemContract;
use Jano\Structural\Adapter\FTP;

class FTPAdapter implements FilesystemContract
{
    protected $client;

    public function __construct(FTP $client)
    {
        $this->client = $client;
    }
    
    /**
     * Connecting to the provider
     *
     * @param array $details
     * @return mixed
     */
    public function connect(array $details)
    {
        return $this->client->login($details);
    }

    /**
     * Check for existing the file
     *
     * @param string $path
     * @return bool
     */
    public function exist(string $path)
    {
        return $this->client->isExist($path);
    }


    public function get($path)
    {
        return $this->client->getFile($path);
    }

    public function put($path, $content)
    {
        return $this->client->setFile($path, $content);
    }

    public function delete($path)
    {
        return $this->client->remove($path);
    }
}
