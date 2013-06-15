<?php

require_once 'bootstrap.php';

$factory = $sc->get('html-elements');

echo $factory->render(
    'input',
    array(
        'id' => 'dangerous',
        'type' => 'text',
        'value' => 'some "dangerous" <content>'
    )
);