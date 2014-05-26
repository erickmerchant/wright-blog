<?php

use Imagine\Gd\Imagine;
use Wright\Hooks\UploadsBeforePublish;
use Wright\Settings\SettingsInterface;

$container->after('hooks', function ($generators) use ($container) {

    $generators->add('before.publish', new UploadsBeforePublish(
        new Imagine,
        $container->resolve(SettingsInterface::class),
        getcwd() . '/data/',
        getcwd() . '/site/'
    ));
});
