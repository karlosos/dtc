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
	</footer>
</body>

</html>