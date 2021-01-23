<?php

namespace Jano\Structural\Decorator\Contracts;

interface SubscriptionContract
{
    public function price(): int;
    public function description(): string;
}
