<?php

class Select extends HTMLElement {
    protected $options;

    public function __construct(string $name, $options, $attributes = []) {
        parent::__construct('select', array_merge(['name' => $name], $attributes));
        $this->options = $options;
    }

    public function addOption($value, $label) {
        $this->options[$value] = $label;
    }

    public function render() {
        $html = '<' . $this->tag . $this->renderAttributes() . '>';
        foreach ($this->options as $value => $label) {
            $html .= "<option value=\"$value\">$label</option>";
        }
        $html .= '</' . $this->tag . '>';
        return $html;
    }
}

?>
