<?php

require_once("element.php");

class A extends HtmlElement {

    public $href;
    public $target;

    public function __construct($href, $content) {
        $this->href = $href;
        $this->content = $content;
    }

    public function build() {
        $element_open = sprintf('<a%s%s href="%s"%s>',
            isset($this->id) ? sprintf(' id="%s"', $this->id) : "",
            isset($this->class) ? sprintf(' class="%s"', $this->class) : "",
            $this->href,
            isset($this->target) ? sprintf(' target="%s"', $this->target) : ""
        );

        $element_content = $this->content;
        $element_close = '</a>';

        return $element_open.$element_content.$element_close;
    }
}

?>