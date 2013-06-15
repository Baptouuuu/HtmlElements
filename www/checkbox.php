<?php

require_once 'bootstrap.php';

$factory = $sc->get('html-elements');

echo $factory->render(
    'checkbox',
    array(
        'id' => 'first_value',
        'name' => 'toggle',
        'value' => 'first value',
        'label' => 'First value?'
    )
);
echo $factory->render(
    'checkbox',
    array(
        'id' => 'second_value',
        'name' => 'toggle',
        'value' => 'second value',
        'label' => 'Second value?'
    )
);