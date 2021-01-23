<?php
namespace Jano\Structural\Decorator\Features;

class DownloadFeature extends Features
{
    public function featureDescription(): string
    {
        return  'Download courses';
    }

    public function featurePrice(): int
    {
        return 20;
    }
}
