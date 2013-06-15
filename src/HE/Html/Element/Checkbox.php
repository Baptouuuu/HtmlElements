<?php

namespace HE\Html\Element;

class Checkbox extends Input
{
    public function __construct($attributes)
    {
        parent::__construct($attributes);

        $this->setAttribute('type', 'checkbox');

        if (substr($this->getName(), -2) !== '[]') {
            $this->setAttribute(
                'name',
                $this->getName().'[]'
            );
        }
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