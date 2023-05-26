<?php

require_once("element.php");

class Img extends HtmlElement {

    public $src;
    public $alt;
    public $width;
    public $height;

    public function __construct($src, $alt) {
        $this->src = $src;
        $this->alt = $alt;
    }

    public function build() {
        $element = sprintf('<img%s%s src="%s" alt="%s"%s%s>',
            isset($this->id) ? sprintf(' id="%s"', $this->id) : "",
            isset($this->class) ? sprintf(' class="%s"', $this->class) : "",
            $this->src,
            $this->alt,
            isset($this->width) ? sprintf(' width="%s"', $this->width) : "",
            isset($this->height) ? sprintf(' height="%s"', $this->height) : ""
        );

        return $element;
    }
}

?>