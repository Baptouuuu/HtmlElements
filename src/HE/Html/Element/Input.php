<?php

namespace HE\Html\Element;

use HE\Html\Element\ElementInterface;

class Input extends Generic implements ElementInterface
{

    public function render()
    {
        return '<input '.$this->getId().' '.
            $this->getClass().' '.
            'type="'.$this->getType().'"'.
            'name="'.$this->getName().'" '.
            'value="'.htmlspecialchars($this->getValue()).'" '.
            ' />';
    }

}