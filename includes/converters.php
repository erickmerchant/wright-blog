<?php

use Wright\Converter\ParsedownConverter;

$container->after('data', function ($data) {

    $parsedown = new ParsedownConverter(new Parsedown);

    $data->addConverter('md', $parsedown);
});
