<?php

namespace HE\Html\Element;

class Generic
{
    protected $attributes = array();

    public function __construct($attributes = false)
    {
        if (is_array($attributes)) {
            foreach ($attributes as $name => $value) {
                $this->setAttribute($name, $value);
            }
        }
    }

    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function getAttribute($name)
    {
        return $this->attributes[$name];
    }

    public function __toString()
    {
        return $this->render();
    }

}