<?php
/**
 * Konfiguracja bazy danych
 * 
 * laczy sie z baza danych 'dtc' i w przypadku niepowodzenia przypisuje zmiennej 
 * $connect_error odpowiedni komunikat.
 * @package configuration
 */

/**
 * Zmienna ktora przechowuje komunikat o bledzie zwiazanym z polaczeniem do 
 * bazy danych.
 * 
 * @global string $connect_error
 */
$connect_error = 'Przepraszamy za problemy';
mysql_connect('localhost', 'root', '') or die ($connect_error);
mysql_select_db('dtc') or die ($connect_error);;
?>