<?php
/**
 * Stopka
 * 
 * @package overall
 * @todo sciezki poprawic
 */
?>
</div>
	<footer>
	<a href="/dtc/panel.php">Panel administratora</a>
	<?php
        if (logged_in()) {
        ?>
            <a href="/dtc/logout.php"> Wyloguj </a>
       
        <?php 
        }
        ?>
            <a href="/dtc/error_list.php"> Wszystkie błędy </a>
	</footer>
</body>

</html>