<?php

/**
 * Wszystkie błędy
 * 
 * Na stronie max 50 błędów
 * @todo prototyp
 */


/**
 * Dolaczenie pliku core/database/connect.php
 * 
 * @see init.php
 */
include 'core/init.php';

/**
 * Dolaczenie pliku posiadajacego znacznik <head>
 * 
 * @see head.php
 */
include 'includes/overall/head.php';

/**
 * Dolaczenie pliku z gorna czescia strony.
 * 
 * @see logo.php
 */
include 'includes/overall/logo.php';

$query = mysql_query("SELECT * FROM errors");
echo "<div style='width: 800px; margin: 5px auto'>";
while ($key = mysql_fetch_array($query, MYSQL_NUM)) {
      echo "<a href='/dtc/error/$key[1]'>".$key[1]."</a>, ";
}
echo "</div>";
/**
 * Dolaczenie pliku z dolna czescia strony.
 * 
 * @see footer.php
 */
include 'includes/overall/footer.php';
?>
	