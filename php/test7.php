<?php
class Person {
  public $name;
  public $aga;

  public function greet() {
    return "Hello, my name is {$this->name} and {$this->age} years";
  }
}

$person = new Person();
$person->name = "John";
$person->age = 30;
echo $person->greet();
?>
