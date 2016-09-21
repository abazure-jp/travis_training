<?php
class HogeTest extends PHPUnit_Framework_TestCase
{
  public function testMakeUnpoko(){
    require 'src/Hoge.php';

    $a = new Hoge(3);
    $b = $a->addUnpoko();
    $this->assertEquals("3💩",$b);
  }

}
?>
