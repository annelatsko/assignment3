<?php
	// This is the file for the parent class

	class ParentClass {

		private $n;
		private $p;
		private $c;


		public function __construct($n, $p, $c, $ae) {
      $this->name = $n;
      $this->power = $p;
      $this->city = $c;
      $this->alterEgo = $ae;
    }

		public function getSuperheroName() {
      return $this->name;
    }

    public function getAlterEgo() {
    	return $this->alterEgo;
    }

    public function getSuperheroPower() {
    	return $this->power;
    }

    public function getCity() {
    	return $this->city;
    }

    public function __toString() {
      $greeting = "Hello, " . $this->getSuperheroName() . ".";
      $powerExpose = "How is it going with the whole " . $this.getSuperheroPower() . "thing?"
      $alter = "I will not say that your alter ego is  " . $this->getAlterEgo() . " for security reasons.";
      $city = "Good luck protecting " . $this->getCity() . ".";
      return $greeting . "<br>" . $powerExpose . "<br>" . $alter . "<br>" . $city . "<br>";
    }



		
	}
