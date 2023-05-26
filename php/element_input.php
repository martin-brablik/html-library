<?php

require_once("element_global_form.php");

class Input extends FormElement {

    public $type;
    public $placeholder;
    public $value;

    public function __construct($type) {
        $this->type = $type;
    }

    public function build() {
        $element = sprintf('<input%s%s%s type="%s"%s%s%s%s>',
            isset($this->id) ? sprintf(' id="%s"', $this->id) : "",
            isset($this->class) ? sprintf(' class="%s"', $this->class) : "",
            isset($this->name) ? sprintf(' name="%s"', $this->name) : "",
            $this->type,
            isset($this->value) ? sprintf(' value="%s"', $this->value) : "",
            isset($this->autocomplete) ? sprintf(' autocomplete="%s"', $this->autocomplete) : "",
            isset($this->placeholder) ? sprintf(' placeholder="%s"', $this->placeholder) : "",
            isset($this->disabled) ? ' disabled' : ""
        );

        return $element;
    }
}

?>