<?php

namespace HE\Html;

use HE\Html\Element\ElementInterface;
use HE\Html\Element\Exception\ElementNotFound;
use HE\Html\Element\Exception\TypeError;
use HE\Html\Element\Input;
use HE\Html\Element\Radio;
use HE\Html\Element\Checkbox;
use HE\Html\Element\Textarea;
use HE\Html\Element\Anchor;

class Factory
{

    public function render($elementName, array $attributes = array())
    {

        switch ($elementName) {
            case 'a':
                $element = new Anchor($attributes);
                break;
            default:
                try {

                    $class = 'HE\Html\Element\\'.ucfirst($elementName);
                    $element = new $class($attributes);

                } catch (Exception $e){

                    throw new ElementNotFound($elementName);

                }

        }

        if (!$element instanceof ElementInterface) {
            throw new TypeError('"'.$elementName.'" is not an HtmlElement');
        }

        return $element;

    }

}