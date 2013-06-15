<?php

namespace HE\Html\Element;

use HE\Html\Element\ElementInterface;

class Anchor extends Generic implements ElementInterface
{
    public function render()
    {
        return '<a '.$this->getId().' '.$this->getClass().' href="'.$this->getHref('#').'" title="'.$this->getTitle().'">'.$this->getText().'</a>';
    }
}