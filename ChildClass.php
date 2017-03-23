<?php 
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {

		private $n;
		private $p;
		private $c;
		private $ae;


		public function __construct($n, $p, $c, $ae) {
	      $this->name = $n;
	      $this->power = $p;
	      $this->city = $c;
	      $this->alterEgo = $ae;
	  }

    public function getOldAlterEgo(){
    	return parent::getAlterEgo();
    }

    public function setAlterEgo($newAlterEgo){
    	$this->alterEgo = $newAlterEgo
    }

    public function __toString() {
      $greeting = "Hello, " . $this->getSuperheroName() . ".";
      $alter = "You would like to set your alter ego to " . $this->getAlterEgo() . ".";
      $city = "Good luck protecting " . $this->getCity() . ".";
      return $greeting . "<br>I am sorry that your alter ego has been compromised." . $alter . "<br>" . $city . "<br>";
    }
    		
	}
