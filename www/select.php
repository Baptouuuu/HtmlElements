<?php

require_once 'bootstrap.php';

$factory = $sc->get('html-elements');

echo $factory->render(
    'select',
    array(
        'name' =>'select',
        'options' => array(
            array('value' => 'first_value', 'text' => 'First Value'),
            array('text' => 'second value')
        )
    )
);