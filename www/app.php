<?php

require_once "bootstrap.php";

$factory = $sc->get('html-elements');

$links = array(
    'input',
    'radio',
    'checkbox',
    'textarea',
    'select'
);

foreach ($links as $value) {
    echo $factory->render('a')
        ->setAttribute('href', $value.'.php')
        ->setAttribute('text', $value).'<br/>';
}