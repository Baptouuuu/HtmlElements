<?php

namespace HE\Html\Element;

class Textarea extends Generic implements ElementInterface
{
    public function render()
    {
        return '<textarea '.$this->getId().' '.$this->getClass().'>'.htmlspecialchars($this->getValue()).'</textarea>';
    }
}