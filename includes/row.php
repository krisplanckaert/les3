<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of row
 *
 * @author webmaster
 */
class row {
    private $_cells;
    
    public function __construct() 
    {
        $this->_cells = array();
    }
    
    public function append($cells) {
        $this->_cells[] = $cells;
    }
    
    /**
     * 
     * @return array
     */
    public function getCells() 
    {
        return $this->_cells;
    }
    
}

?>
