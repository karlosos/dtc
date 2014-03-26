<?php
/**
 * Przykladowe wyniki wyszukiwania
 * 
 * @package search
 * @todo narazie nieaktywne, patrz index.php
 */
?>
<div id="searchres"> 
<?php 


if(error_exists(filter_input(INPUT_GET, 's_e'))) {
    error_def_pl(filter_input(INPUT_GET, 's_e'));
} else {
    include '/includes/search/not_found.php';
}
        
?>

<!--
Stary kod testowy opakowany w pliki w folderze /includes/results

	<div id="brand">
		<h2 id="search">Audi - ERROR <?php echo $_GET['s_e']?></h2>
		<h3 id="search">Description</h3>
		<p id="search">Fuel Volume Regulator Control Circuit/Open</p>
	</div>
	
	<div id="brand">
		<h2 id="search">Volvo - ERROR <?php echo $_GET['s_e']?></h2>
		<h3 id="search">Description</h3>
		<p id="search">Accelerator Pedal Position Sensor Supply Voltage Too High</p>
		<h3 id="search">Possible symptoms</h3>
		<p id="search">Engine Light ON (or Service Engine Soon Warning Light)</p>
		<h3 id="search">Possible causes</h3>
		<p id="search">
			<ul>
				<li>- Three way catalyst converter Bank 1</li>
				<li>- Exhaust tube</li>
				<li>- Intake air leaks</li>
				<li>- Fuel injectors may be faulty</li>
				<li>- Fuel injector leaks</li>
				<li>- Spark plugs may be faulty</li>
				<li>- Improper ignition timing</li>
				<li>- Engine Control Module (ECM)</li>
			</ul>
		</p>
	</div>
-->
</div>