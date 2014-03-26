<?php
/**
 * Panel administracyjny
 * 
 * @package main
 * @todo Naprawic logowanie
 */

/**
 * Dolaczenie pliku core/database/connect.php
 * 
 * @see init.php
 */
require 'core/init.php';

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

// Jeżeli jest zalogowany załącz plik add.php sprawdzający czy dodaliśmy dane
if (logged_in()) {
    include 'includes/panel/add.php';
        //Formularz dodawania danych
?>  
        <div style="margin: 0 auto; width: 800px;">
                <h2 id="search">Add</h2> 
                        <form method="post" action="">
                        <li> DTCError: <br> <input id="panel" type="text" name="error"></li>
                        <li> Brand: <br>  <input id="panel" type="text" name="brand"> </li>
                        <li> Description PL: <br>  <textarea id="panel" cols="80" name="description_pl" rows="10"> </textarea> </li>
                        <li> Possible causes PL: <br>  <textarea id="panel" cols="80" name="causes_pl" rows="10"> </textarea> </li>
                        <li> Symptoms PL: <br>  <textarea id="panel" cols="80" name="symptoms_pl" rows="10"> </textarea> </li>
                        <li> Description ENG: <br>  <textarea id="panel" cols="80" name="description_eng" rows="10"> </textarea> </li>
                        <li> Possible causes ENG: <br>  <textarea id="panel" cols="80" name="causes_eng" rows="10"> </textarea> </li>
                        <li> Symptoms ENG: <br>  <textarea id="panel" cols="80" name="symptoms_eng" rows="10"> </textarea> </li>
                        <input type="hidden" name="author_id" value="<?php echo $user_data['user_id']; ?>">
                       <!--
                        <li> Priority: <br>
                                <select name="Priority">
                                        <option value="" style="display:none;">Not specified</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                </select>
                        </li>
                       -->
                        <li> <input type="submit" value="Add"> </li>
                </form>

        </div>
<?php
} else {
    // Jeżeli nie zalogowany załącz login.php
    include 'includes/panel/login.php';
    
    // Formularz logowania
?>
<div style="margin: 0 auto; width: 200px;">
    <form method="post" action="">
		<li> Login: <br> <input id="panel" type="text" name="username"></li>
		<li> Password: <br>  <input id="panel" type="password" name="password"> </li>
		<li> <input id="submit" type="submit" value="Log In"> </li>
    </form>
</div>

<?php } 

/**
 * Dolaczenie pliku z dolna czescia strony.
 * 
 * @see footer.php
 */
include 'includes/overall/footer.php';
?>