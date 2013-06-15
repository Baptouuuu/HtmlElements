<?php

namespace HE\Html\Element;

class Option extends Generic implements ElementInterface
{
    public function render()
    {
        return '<option value="'.htmlspecialchars($this->getValue($this->getText())).'">'.$this->getText().'</option>';
    }
}