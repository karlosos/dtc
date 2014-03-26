<?php

/**
 * Funkcje glowne.
 * 
 * @package functions
 */

/**
 * Zabezpiecza lancuch referencyjnie.
 * 
 * W celu zabezpieczenia przez atakami SQL Injection wszystkie zapytania powinno
 * przepuscic sie przez ta funkcje. Dodaje ona znak konczacy zapytanie.
 * 
 * @param string &$item Zmienna ktora zmieniamy. 
 */
function array_sanitize(&$item) {
	$item = mysql_real_escape_string($item);
}

/**
 * Zwraca zabezpieczony lancuch.
 * 
 * W celu zabezpieczenia przed atakami SQL Injection funkcja ta zwraca zapytanie
 * z znakiem konczacym zapytanie
 * 
 * @param string $data Zmienna ktora zabezpieczamy.
 * @return string Zabezpieczony lancuch.
 */
function sanitize($data) {
	return mysql_real_escape_string($data);
}

/**
 * Zwraca sformatowana tablice bledow.
 * 
 * Funkcja zwraca lancuch znakow reprezentujacy wszystkie elementy tablicy w
 * postaci listy nienumerowanej. 
 * 
 * @param array $errors Tablica z bledami.
 * @return string lanuch z sformatowanymi danymi.
 */
function output_errors($errors) {
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
?>
