<?php
class HTMLElement {
    protected $tag;
    protected $attributes;
    protected $content;

    public function __construct($tag, $attributes = [], $content = '') {
        $this->tag = $tag;
        $this->attributes = $attributes;
        $this->content = $content;
    }

    public function generateHTML() {
        $html = "<{$this->tag}";

        foreach ($this->attributes as $key => $value) {
            $html .= " $key=\"$value\"";
        }

        $html .= ">{$this->content}</{$this->tag}>";

        return $html;
    }

    public function getTag() {
        return $this->tag;
    }

  
    public function setTag($tag) {
        $this->tag = $tag;
    }

   
    public function getAttributes() {
        return $this->attributes;
    }


    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

    public function getContent() {
        return $this->content;
    }

   
    public function setContent($content) {
        $this->content = $content;
    }
}
