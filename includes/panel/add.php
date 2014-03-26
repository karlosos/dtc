<?php
/**
 * Plik dodający błąd
 * 
 * @package execute
 */

if (empty($_POST) === false) {
    
    $error_data = array(
        'error' => $_POST['error'],
        'brand' => $_POST['brand'],
        'description_pl' => $_POST['description_pl'],
        'causes_pl' => $_POST['causes_pl'],
        'symptoms_pl' => $_POST['symptoms_pl'],
        'description_eng' => $_POST['description_eng'],
        'causes_eng' => $_POST['causes_eng'],
        'symptoms_eng' => $_POST['symptoms_eng'],
        'author_id' => $_POST['author_id']
    );
    
    add_error($error_data);
    
    echo 'Dodano error';
}