<?php
/**
 * Formularz w przypadku braku wyniku
 * 
 * @package search
 */
?>
<div id="searchres"> 
	<h2 id="search"> Przepraszamy ale nie ma w bazie</h2>
	<h3 id="search"> Możesz nam pomoc wysyłajac ten formularz !W BUDOWIE!</h3>
	<form>
		<ul>
			<li class="notfound">Error: <input id="no" type="text" name="s" value="<?php echo($_GET['s_e']) ?>"> </li>
			<li class="notfound"> Brand: 
				<select name="nazwa">
					<option>Audi</option>
					<option>Opel</option>
				</select>
			</li>
			<li class="notfound"> <input id="submit" type="submit" value="Send"> </li>
		<ul>
	</form>
</div>