<?php

class Form {
    protected $attributes;
    protected $elements;

    public function __construct($attributes = []) {
        $this->attributes = $attributes;
        $this->elements = [];
    }

    public function addElement($element) {
        $this->elements[] = $element;
    }

    public function render() {
        $html = '<form';
        foreach ($this->attributes as $key => $value) {
            $html .= " $key=\"$value\"";
        }
        $html .= '>';
        foreach ($this->elements as $element) {
            $html .= $element->render();
        }
        $html .= '</form>';
        return $html;
    }
}

?>
