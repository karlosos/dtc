<?php
/**
 * Pole wyszukiwania z wartoscia $_GET
 * 
 * @package search
 * @todo zmienic sciezke
 */
?>
<div id="search"> 
        <form action="/dtc/do_search.php">
		<input id="search" type="text" name="s_e" value="<?php echo($_GET['s_e']) ?>">
	</form>
</div>