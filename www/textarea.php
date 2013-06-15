<?php

require_once 'bootstrap.php';

$factory = $sc->get('html-elements');

echo $factory->render(
    'textarea',
    array(
        'id' => 'foobar',
        'value' => 'some "dangerous" <content>'
    )
);