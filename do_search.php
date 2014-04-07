<?php
/**
 * Przekierowanie z formularzy
 * 
 * @package main
 * @todo poprawić to i opakować w funkcję?
 */
$id = $_GET['s_e'];
header('Location: /dtc/error/'.$id);