<?php

namespace HE\Html\Element;

class Select extends Generic implements ElementInterface
{
    public function render()
    {
        $return = '<select name="'.$this->getName().'">';

        foreach ($this->getOptions(array()) as $optionAttributes) {
            $return .= new Option($optionAttributes);
        }

        $return .= '</select>';

        return $return;

    }
}