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

        return $this;
    }

    public function getAttribute($name, $default = null)
    {
        if (isset($this->attributes[$name])) {
            return $this->attributes[$name];
        } else {
            return $default;
        }
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    protected function getId()
    {
        return ($this->getAttribute('id', false)) ? 'id="'.$this->getAttribute('id').'"' : '';
    }

    protected function getClass()
    {
        return ($this->getAttribute('class', false)) ? 'class="'.$this->getAttribute('class').'"' : '';
    }

    public function __call($name, $args)
    {
        $default = isset($args[0]) ? $args[0] : false;

        if (substr($name, 0, 3) === 'get') {
            $attr = strtolower(substr($name, 3));

            return $this->getAttribute($attr, $default);
        }

        return $default;
    }

    public function __toString()
    {
        return $this->render();
    }

}