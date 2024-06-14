<?php
require_once  '/../Template/Classes/HTMLElement.php';

class Input extends HTMLElement {
    public function __construct($type, $name, $value = '', $attributes = []) {
        parent::__construct('input', array_merge(['type' => $type, 'name' => $name, 'value' => $value], $attributes));
    }
}
