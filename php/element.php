<?php

abstract class HtmlElement {

    public $id;
    public $class;
    public $content;

    abstract public function build();

    public function render() {
        echo $this->build();
    }
}

?>