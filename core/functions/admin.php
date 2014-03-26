<?php
/**
 * Funkcje panelu administratora
 * 
 * @package functions
 * @todo Naprawic logowanie.
 */

/**
 * Zwraca tablice z informacjami o uzytkowniku
 * 
 * @param type $user_id
 * @return array Tablica z polami o uzytkowniku.
 */
function user_data($user_id) {
	$data = array();
	$user_id = (int)$user_id;
	
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();
	
	if($func_num_args > 1) {
		unset($func_get_args[0]);
		
		$fields = '`' . implode('`, `', $func_get_args) . '`';
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `admin` WHERE `user_id` = $user_id"));
		return $data;
	}
}

/**
 * Sprawdza czy jest zalogowany
 * @return bool
 */
function logged_in () {
	return (isset($_SESSION['user_id'])) ? true : false;
}

/**
 * Zwraca id uzytkownika z danej nazwy
 * 
 * @param string $username Nazwa szukanego uzytkownika
 * @return string
 */
function user_id_from_username($username) {
	$username = sanitize($username);
	$query = mysql_query("SELECT `user_id` FROM `admin` WHERE `username` = '$username'");
	return mysql_result($query, 0, 'user_id');
}

/**
 * Sprawdza czy konto jest aktywowane
 * 
 * @param string $username 
 * @return bool
 */
function user_active ($username) {
	$username = sanitize($username);
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `admin` WHERE `username` = '$username' AND `active` = 1");
	return (mysql_result($query, 0) == 1) ? true : false;
}

/**
 * Sprawdza czy uzytkownik istnieje
 * 
 * @param string $username
 * @return string
 */
function user_exists ($username) {
	$username = sanitize($username);
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `admin` WHERE `username` = '$username'");
	return (mysql_result($query, 0) == 1) ? true : false;
}
/**
 * Loguje uzytkownika.
 * 
 * @param string $username
 * @param string $password
 * @return string
 */
function login ($username, $password) {
	$user_id = user_id_from_username($username);
	
	$username = sanitize($username);
	$password = md5($password);

	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `admin` WHERE `username` = '$username' AND `password` = '$password'"), 0) == 1) ? $user_id : false;
}
?>