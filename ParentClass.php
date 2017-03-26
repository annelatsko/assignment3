<?php
	// This is the file for the parent class

	class ParentClass {

		private $n = "";
		private $p = "";
		private $c = "";
		private $ae = "";


		public function __construct($n, $p, $c, $ae) {
      $this->n = $n;
      $this->p = $p;
      $this->c = $c;
      $this->ae = $ae;
    }

		public function getHeroName() {
      return $this->n;
    }

    public function getAlterEgo() {
    	return $this->ae;
    }

    public function getPower() {
    	return $this->p;
    }

    public function getCity() {
    	return $this->c;
    }

    public function repeatBatmanForLengthOfInputString($str){
      $str_len = strlen($str);
      $x = 1; 
      while($x <= $str_len) {
          echo "<div> Batman </div>";
          $x++;
      } 
    }

    public function __toString() {
      $greeting = "Hello, " . $this->getHeroName() . ".";
      $thing = "I see that you're doing your thing.";
      $neato = "It's neato that you're looking at this parent class that doesn't actually get used.";
      $city = "I'm feeling reasonably 0/10 about PHP.";
      return $greeting . "<br>" . $thing . "<br>" . $neato . "<br>" . $city . "<br>";
    }
	}
