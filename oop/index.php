<?php
    class Animal {
        public $name,$legs,$cold_blooded;

        public function __construct($name, $legs=4, $cold_blooded="no")
        {
            $this->name = $name;
            $this->legs = $legs;
            $this->cold_blooded = $cold_blooded;
        }

        public function get_name() {
            return $this->name;
        }

        public function get_legs() {
            return $this->legs;
        }

        public function get_cold_blooded() {
            return $this->cold_blooded;
        }

        public function set_name($name) {
            $this->name = $name;
        }

        public function set_legs($legs) {
            $this->legs = $legs;
        }

        public function set_cold_blooded($cold_blooded) {
            $this->cold_blooded = $cold_blooded;
        }
    }

    require('Frog.php');
    require('Ape.php');

    $sheep = new Animal("shaun");

    echo "Name: " . $sheep->get_name() . "<br>";
    echo "legs: " . $sheep->get_legs() . "<br>";
    echo "cold blooded: " . $sheep->get_cold_blooded();

    $kodok = new Frog("buduk");
    echo "<br><br>";
    echo "Name: " . $kodok->get_name() . "<br>";
    echo "legs: " . $kodok->get_legs() . "<br>";
    echo "cold blooded: " . $kodok->get_cold_blooded() . "<br>";
    echo "Jump: " . $kodok->jump();

    $sungokong = new Ape("kera sakti");
    echo "<br><br>";
    echo "Name: " . $sungokong->get_name() . "<br>";
    $sungokong->set_legs(2);
    echo "legs: " . $sungokong->get_legs() . "<br>";
    echo "cold blooded: " . $sungokong->get_cold_blooded() . "<br>";
    echo "Yell: " . $sungokong->yell();
?>