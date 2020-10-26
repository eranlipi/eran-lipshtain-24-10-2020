<?php
class Dragonball {
  static public $ballCount= 0;

  static public function iFoundaBall(){

  self::$ballCount =  self::$ballCount +1;

  if( self::$ballCount === 7 ){
    self::$ballCount = 0;
    echo 'you got one million dollar';
  }


  }
}