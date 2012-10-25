<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of table
 *
 * @author webmaster
 */
class table {
    //put your code here
    private $_rows;
    
    public function __construct() 
    {
        $this->_rows = array();
    }
    
    public function append($row) 
    {
        $this->_rows[] = $row;
    }
    
    public function draw() {
        echo '<table border="1">'.PHP_EOL;
        echo '<pre>';
        echo var_dump($this->_rows);
        echo '</pre>';
        foreach($this->_rows as $row) {
            echo '<tr>'.PHP_EOL;
            foreach($row->getCells() as $cell) {
                echo '<td>'.$cell->getContent().'</td>'.PHP_EOL;
            }
            echo '</tr>'.PHP_EOL;
        }
        echo '</table>'.PHP_EOL;
    }
}

?>
