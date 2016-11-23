<?php 

use DodoPhpLab\DodoSampleComposer\Classes\MyClass;

define("__DS__", DIRECTORY_SEPARATOR);


class MyClassTest extends PHPUnit_Framework_TestCase {

  private $fileIni;

  public function setUp() {
    #...
  }
	
  #tests

  public function testTrue(){
    $this->assertTrue(true);
  }

  #...
  
  public function tearDown() {
    #...
  }

  public static function tearDownAfterClass() {
    #...
  }
  
}

/*

###### TESTS ######
TODO : 
###### METHODS TO IMPLEMENT ######
TODO : 
###### EXCEPTIONS HANDLER ######
TODO : 

*/