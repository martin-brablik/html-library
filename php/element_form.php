<?php

require_once("element.php");

class Form extends HtmlElement {

    public $method;
    public $action;

    public function __construct($method, $action) {
        $this->method = $method;
        $this->action = $action;
    }

    public function build() {
        $element_open = sprintf('<form%s%s method="%s" action="%s">',
            isset($this->id) ? sprintf(' id="%s"', $this->id) : "",
            isset($this->class) ? sprintf(' class="%s"', $this->class) : "",
            $this->method,
            $this->action
        );

        $element_content =  $this->content;
        $element_close = '</form>';

        return $element_open.$element_content.$element_close;
    }
}

?>