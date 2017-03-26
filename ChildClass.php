<?php 
	// this file will extend PArentClass.php
	include 'ParentClass.php';
	class ChildClass extends ParentClass {

		private $name;
		private $power;
		private $city;
		private $alterEgo;

		public function __construct($name, $power, $city, $alterEgo) {
	      $this->name = $name;
	      $this->power = $power;
	      $this->city = $city;
	      $this->alterEgo = $alterEgo;
	  }

    public function setAlterEgo($newAlterEgo){
    	$this->alterEgo = $newAlterEgo;
    }

    public function setName($name) {
    	$this->name = $name;
    }

    public function setPower($power) {
    	$this->power = $power;
    }

    public function setCity($city) {
    	$this->city = $city;
    }

    public function getCurrentlySetName(){
    	return $this->name;
    }

    public function getCurrentlySetCity(){
    	return $this->city;
    }

    public function getCurrentlySetPower(){
    	return $this->power;
    }

    public function getCurrentlySetAlterEgo(){
    	return $this->alterEgo;
    }

    public function repeatBatmanForLengthOfStringPower() {
      return parent::repeatBatmanForLengthOfInputString($this->getCurrentlySetPower());
    }

    public function __toString() {
      $greeting = "Hello, " . $this->getCurrentlySetName() . ".";
      $alter = "I will not say that your alter ego is  " . $this->getCurrentlySetAlterEgo() . " for security reasons.";
      $city = "Good luck protecting " . $this->getCurrentlySetCity() . ".";
      return "<div>" . $greeting . "<br>" . $alter . "<br>" . $city . "<br>" . "</div>";
    }

  }
