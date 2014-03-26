<?php
/**
 * Funkcje dotyczace wyszukiwania
 * 
 * @package functions
 */

/**
 * Sprawdza czy blad istnieje w bazie danych
 * 
 * @param sting $error Blad ktory chcemy sprawdzic.
 * @return bool
 */
function error_exists ($error) {
    $error = sanitize($error);
    $query = mysql_query("SELECT COUNT(`id`) FROM `errors` WHERE `error` = '$error'");
    return (mysql_result($query, 0) >= 1) ? true : false;
}

/**
 * Wyswietla wszystkie pasujace bledy do zapytania
 * 
 * @param string $error Blad ktory wyswietlamy
 * @todo Poprawić, aby funkcja nie robiła include (opakować w show.php)
 */
function error_def_pl ($error) {
    $error = sanitize($error);
    $query = mysql_query("SELECT errors.ID, error, brand, description_pl, causes_pl, symptoms_pl FROM def_pl INNER JOIN errors ON errors.ID = def_pl.ID WHERE errors.error = '$error'");
    while ($key = mysql_fetch_array($query, MYSQL_NUM)) {
        include ('/includes/results/result_desc.php');
    if ($key[4] != NULL) {
        include ('/includes/results/result_causes.php');
    } 
    if ($key[5] != NULL) {
        include ('/includes/results/result_symptoms.php');
        
    } 
        echo '</div>';
    }
    mysql_free_result($query);
}
// Funkcja w przypadku działania na lokalnym serwerze
//function error_def_pl ($error) {
//    $error = sanitize($error);
//    $query = mysql_query("SELECT errors.ID, error, brand, description_pl, causes_pl, symptoms_pl FROM def_pl INNER JOIN errors ON errors.ID = def_pl.ID WHERE errors.error = '$error'");
//    while ($key = mysql_fetch_array($query, MYSQL_NUM)) {
//        include ($_SERVER['DOCUMENT_ROOT'] . 'DTC/includes/results/result_desc.php');
//    if ($key[4] != NULL) {
//        include ($_SERVER['DOCUMENT_ROOT'] . 'DTC/includes/results/result_causes.php');
//    } 
//    if ($key[5] != NULL) {
//        include ($_SERVER['DOCUMENT_ROOT'] . 'DTC/includes/results/result_symptoms.php');
//        
//    } 
//        echo '</div>';
//    }
//    mysql_free_result($query);
//}


?>