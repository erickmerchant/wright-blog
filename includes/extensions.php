<?php

use Wright\Extensions\Twig;

$container->after('twig', function ($twig) {

    $twig->addExtension(new Twig\DateBatchExtension);
});
