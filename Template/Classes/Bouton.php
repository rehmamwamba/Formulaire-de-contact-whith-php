<?php

class Button extends HTMLElement {
    public function __construct($type, $name, $content = '', $attributes = []) {
        parent::__construct('button', array_merge(['type' => $type, 'name' => $name], $attributes), $content);
    }
}

?>
