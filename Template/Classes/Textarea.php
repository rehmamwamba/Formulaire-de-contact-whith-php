<?php

class Textarea extends HTMLElement {
    public function __construct($name, $content = '', $attributes = []) {
        parent::__construct('textarea', array_merge(['name' => $name], $attributes), $content);
    }
}

?>
