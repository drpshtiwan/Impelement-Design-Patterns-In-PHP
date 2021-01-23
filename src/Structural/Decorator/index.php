<?php
require_once "../../../vendor/autoload.php";

use Jano\Structural\Decorator\Features\DownloadFeature;
use Jano\Structural\Decorator\Subscription;

$subscription = new Subscription();
$downloadCourses = new DownloadFeature($subscription);


echo "Subscription Only \026\n";
echo $subscription->price().' - ';
echo $subscription->description();
echo "\026\nSubscription and Download Feature \026\n";
echo $downloadCourses->price().' - ';
echo $downloadCourses->description();
