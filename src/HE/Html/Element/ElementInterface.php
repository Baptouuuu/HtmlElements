<?php

namespace HE\Html\Element;

interface ElementInterface {

    public function setAttribute($name, $data);
    public function getAttribute($name);
    public function render();
    public function __toString();

}