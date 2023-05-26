<?php

require_once("element_global_form.php");
require_once("element_option.php");

class Select extends FormElement {

    public $options = array();

    public function build() {
        $element_open = sprintf('<select%s%s name="%s" %s%s>',
            isset($this->id) ? sprintf(' id="%s"', $this->id) : "",
            isset($this->class) ? sprintf(' class="%s"', $this->class) : "",
            $this->name,
            isset($this->autocomplete) ? sprintf(' autocomplete="%s"', $this->autocomplete) : "",
            isset($this->disabled) ? ' disabled' : ""
        );

        $element_content = "";

        foreach($this->options as $option) {
            $element_content .= $option->build();
        }

        $element_close = '</select>';

        return $element_open.$element_content.$element_close;
    }

}

?>