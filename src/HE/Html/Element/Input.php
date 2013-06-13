<?php

namespace HE\Html\Element;

class Input extends Generic
{

    public function render()
    {
        return '<input id="'.$this->getAttribute('id').'" />';
    }

}