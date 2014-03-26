<?php
/**
 * Glowna konfiguracja
 * 
 * W tym pliku dolaczamy pliki z funkcjami i inne konfiguracje.
 * @package configuration
 */

session_start();

/**
 * Wymaganie pliku core/database/connect.php
 * 
 * @see connect.php
 */
require 'database/connect.php';

/**
 * Wymaganie pliku core/functions/general.php
 * 
 * @see general.php
 */
require 'functions/general.php';

/**
 * Wymaganie pliku functions/search.php
 * 
 * @see search.php
 */
require 'functions/search.php';

/**
 * Wymaganie pliku functions/admin.php
 * 
 * @see admin.php
 */
require 'functions/admin.php';

require 'functions/errors.php';

if(logged_in() === true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id', 'username', 'password');
	if (user_active($user_data['username']) === false) {
		//W przypadku umożliwienia tworzenia kont użytkowników
                //session_destroy();
		//header('Location: index.php');
		exit();
	}
}

/**
 * Zmienna w ktorej przechowywane sa bledy
 */
$errors = array();
?>