<?php

class Animal {

    private $family;
    private $food;

    public function __construct($family, $food) {
        $this->family = $family;
        $this->food = $food;
    }

    public function get_family() {
        return $this->family;
    }

    public function set_family($family) {
        $this->family = $family;
    }

    public function get_food() {
        return $this->food;
    }

    public function set_food($food) {
        $this->food = $food;
    }
    
     public function __destruct() {
         unset($this->family);
         unset($this->food);
    }

}

$animal=new Animal("test family", "test food");
echo $animal->get_family();

?> 
