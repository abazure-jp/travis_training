<?php

class Hoge {

  protected $unpoko = null;

  public function __construct (
    $unpoko ) {

    $this->unpoko = $unpoko;
  }

  public function addUnpoko(){
    return $this->unpoko . "💩";
  }
}

?>
