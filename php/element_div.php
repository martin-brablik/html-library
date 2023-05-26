<?php

require_once("element.php");

class Div extends HtmlElement {

    public function build() {
        $element_open = sprintf("<div%s%s>",
            isset($this->id) ? sprintf(' id="%s"', $this->id) : "",
            isset($this->class) ? sprintf(' class="%s"', $this->class) : ""
    );
        $element_content = $this->content;
        $element_close = '</div>';

        return $element_open.$element_content.$element_close;
    }
}

?>