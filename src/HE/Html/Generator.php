<?php

namespace HE\Html;

use Element\ElementInterface;
use Element\Exception\ElementNotFound;
use Element\Input;

class Generator
{

    public function render($elementName, array $attributes)
    {

        switch ($elementName) {
            case 'input':
                $element = new Input($attributes);
                break;
            default:
                throw new ElementNotFound($elementName);

        }

    }

}