<?php
/**
 * Funkcje dotyczace obsługi błędów w panelu admina
 * 
 * @package functions
 */

/**
 * Dodaje do bazy danych błąd
 * 
 * @param array $error_data Tablica z informacjami o błędzie
 */
function add_error($error_data) {
    array_walk($error_data, 'array_sanitize');

    $error = $error_data['error'];
    $brand = $error_data['brand'];
    $description_pl = $error_data['description_pl'];
    $causes_pl = $error_data['causes_pl'];
    $symptoms_pl = $error_data['symptoms_pl'];
    $description_eng = $error_data['description_eng'];
    $causes_eng = $error_data['causes_eng'];
    $symptoms_eng = $error_data['symptoms_eng'];
    $author_id = $error_data['author_id'];
    
    mysql_query("INSERT INTO `errors` (`error`, `brand`, `author_id`) VALUES ('$error', '$brand', '$author_id')");
    mysql_query("INSERT INTO `def_pl` (`id`,`description_pl`, `causes_pl`, `symptoms_pl`) VALUES (LAST_INSERT_ID(), '$description_pl', '$causes_pl', '$symptoms_pl')");
    mysql_query("INSERT INTO `def_eng` (`id`,`description_eng`, `causes_eng`, `symptoms_eng`) VALUES (LAST_INSERT_ID(), '$description_eng', '$causes_eng', '$symptoms_eng')");
}