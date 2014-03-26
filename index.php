<?php 
/**
 * Glowny plik projektu
 * 
 * @package main
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

if(isset($_GET['s_e']) && $_GET['s_e']) {
    include 'includes/search/set_bar.php';
    if(error_exists($_GET['s_e'])) {
        echo "<div id='searchres'>";
            $error = sanitize($_GET['s_e']);
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
        echo "</div>";
    } else {
         include '/includes/search/not_found.php';
    }
    //Do naprawy
    //include 'includes/search/results.php';
} else { 
	include 'includes/search/default_bar.php';
} 

/**
 * Dolaczenie pliku z dolna czescia strony.
 * 
 * @see footer.php
 */
include 'includes/overall/footer.php';
?>
	