<?php
 abstract class House {
     abstract function getHouseName();
     abstract function getHouseMotto();
     abstract function getHouseSeat();

     public function introduce() {
         echo 'House ';
         echo static::getHouseName();
         echo ' of ';
         echo static::getHouseSeat();
         echo ' : "';
         echo static::getHouseMotto();
         echo '"'  . PHP_EOL;
     }
 }
?>
