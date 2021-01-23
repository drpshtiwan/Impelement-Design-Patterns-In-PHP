<?php
require_once "../../../vendor/autoload.php";

use Jano\Structural\Adapter\Filesystem;
use Jano\Structural\Adapter\FTP;
use Jano\Structural\Adapter\S3;
use Jano\Structural\Adapter\Adapters\FTPAdapter;
use Jano\Structural\Adapter\Adapters\S3Adapter;

$path = 'file.txt';

echo (new Filesystem)->get($path);
echo (new FTPAdapter(new FTP))->get($path);
echo (new S3Adapter(new S3))->get($path);
