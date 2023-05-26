<?php

require_once("element_global_form.php");

class Option extends HtmlElement {
    
    public $value;

    public function __construct($value, $content) {
        $this->value = $value;
        $this->content = $content;
    }

    public function build() {
        $element = sprintf('<option%s%s value="%s">%s</option>',
            isset($this->id) ? sprintf(' id="%s"', $this->id) : "",
            isset($this->class) ? sprintf(' class="%s"', $this->class) : "",
            $this->value,
            $this->content);
        return $element;
    }
}

?>