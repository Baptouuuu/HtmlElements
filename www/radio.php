<?php

require_once 'bootstrap.php';

$factory = $sc->get('html-elements');

echo $factory->render(
    'radio',
    array(
        'id' => 'yes',
        'name' => 'yes_no',
        'value' => 'yes',
        'label' => 'Yes?'
    )
);
echo $factory->render(
    'radio',
    array(
        'id' => 'no',
        'name' => 'yes_no',
        'value' => 'no',
        'label' => 'No?'
    )
);