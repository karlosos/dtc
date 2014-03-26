<?php
/**
 * Plik logujacy
 * 
 * @package execute
 */
	if (empty($_POST) === false) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(empty($username) === true || empty($password) === true) {
			$errors[] = 'Musisz wprowadzic login i haslo';
		} else if (user_exists($username) === false) {
			$errors[] = 'Nie ma takiego uztkownika';
		} else if (user_active($username) === false) {
			$errors[] = 'Konto nie aktywowane';
		} else {
			$login = login($username, $password);
			if ($login === false) {
				$errors[] = 'That username/password combination is incorrect';
			} else {
				$_SESSION['user_id'] = $login;
				header('Location: panel.php');
				echo $_SESSION['user_id'];
                                exit();
			}
		}	
	}       
	if (empty($errors) === false) {
?>
	<h2> Próbowaliśmy cię zalogować, ale... </h2>
<?php
	echo output_errors($errors);
	} 
?>