<?php

namespace Jano\Structural\Decorator\Features;

use Jano\Structural\Decorator\Contracts\SubscriptionContract;

abstract class Features implements SubscriptionContract
{
    protected $subscription;

    public function __construct(SubscriptionContract $subscription)
    {
        $this->subscription = $subscription;
    }

    public function price(): int
    {
        return $this->subscription->price() + $this->featurePrice();
    }
    
    public function description(): string
    {
        return $this->subscription->description() .' and '. $this->featureDescription();
    }

    abstract public function featureDescription():string;
    abstract public function featurePrice(): int;
}
