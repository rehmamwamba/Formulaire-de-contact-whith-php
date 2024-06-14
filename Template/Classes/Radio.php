<?php

class Radio extends HTMLElement {
    public function __construct($name, $value, $checked = false, $attributes = []) {
        parent::__construct('input', array_merge(['type' => 'radio', 'name' => $name, 'value' => $value, 'checked' => $checked], $attributes));
    }
}

?>
