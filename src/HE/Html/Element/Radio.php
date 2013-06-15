<?php

namespace HE\Html\Element;

class Radio extends Input
{
    public function __construct($attributes)
    {
        parent::__construct($attributes);

        $this->setAttribute('type', 'radio');
    }

    public function render()
    {
        $input = parent::render();

        if ($this->getLabel(false)) {
            $input .= ' <label for="'.$this->getAttribute('id').'">'.$this->getLabel().'</label>';
        }

        return $input;
    }
}