<?php

/*
 * Vehicle class
 */

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Vehicle {

    /*** public color ****/
    public $color;
    public $num_doors;
    public $price;
    public $shape;
    public $brand;
    
    /*** define public methode ***/
    
    /**
     * echo the price
     */
    public function showPrice() {
        echo 'This vehicle costs ' . $this->price . '<br>';
    }
    
    /**
     * echo num_doors;
     */
    public function numDoors() {
        echo 'This vehicle has ' . $this->num_doors . ' doors. <br>';
    }
    
    /*
     * echo VROOM
     */
    public function drive() {
        echo 'VROOM<br>';
    }
    
    /** setters */
    
    /**
     * 
     * @param type $color
     * @throws Exception
     */    
    public function setColor($color) {
        if(null === $color) {
            throw new Exception('No color');
        }
        $this->color = $color;
    }

    /**
     * 
     * @param type $brand
     */
    public function setBrand($brand) {
        $this->brand = $brand;
    }
    
    /**
     * 
     * @param type $num_doors
     */
    public function setNumDoors($num_doors) {
        $this->num_doors = $num_doors;
    }
    
    /**
     * 
     * @param type $price
     */
    public function setPrice($price) {
        $this->price = $price;
    }
    
    /**
     * 
     * @param type $shape
     */
    public function setShape($shape) {
        $this->shape = $shape;
        
    }
    
    public function getColor() {
        return $this->shape;
    }
    public function getNumDoors() {
        return $this->numDoors;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getShape() {
        return $this->shape;
    }
    public function getBrand() {
        return $this->brand;
    }    
}
?>
