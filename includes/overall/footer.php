<?php
/**
 * Stopka
 * 
 * @package overall
 */
?>
</div>
	<footer>
	<a href="panel.php">Panel administratora</a>
	<?php
        if (logged_in()) {
        ?>
            <a href="logout.php"> Wyloguj </a>
       
        <?php 
        }
        ?>
            <a href="error_list.php"> Wszystkie błędy </a>
	</footer>
</body>

</html>