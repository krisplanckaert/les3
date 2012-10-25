<?php
ini_set('display_errors',1);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'includes/table.php';
require_once 'includes/row.php';
require_once 'includes/cell.php';

$celA1 = new cell('dit is cel A1');
$celA2 = new cell('dit is cel A2');

$rowA = new row();
$rowA->append($celA1);
$rowA->append($celA2);
$rowA->append(new cell('dit is cel A3'));

$rowB = new row();
$rowB->append($celA1);
$rowB->append($celA2);
$rowB->append(new cell('dit is cel A3'));

$table = new table();
$table->append($rowA);
$table->append($rowB);
$table->draw();

?>
