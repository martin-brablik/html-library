<?php

require_once("element.php");

abstract class FormElement extends HtmlElement {

    public $name;
    public $autocomplete;
    public $disabled;
}

?>