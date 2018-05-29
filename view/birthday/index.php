<?php
	$allMonths = array(null,"January","February","March","April","May","June","July","August","September","October","November","December");
	$currentMonth = null;
	$currentDay = null;
	
	foreach ($birthdays as $birthday) { 
		if ($currentMonth !== $birthday['month']) {  
			$currentMonth = $birthday['month'];
	
?>
		<h1><?=$allMonths[$birthday['month']]?></h1>		

<?php 
		}
			if ($currentDay !== $birthday['day']) {  
				$currentDay = $birthday['day'];
?> 
				<h2><?=$birthday['day']?></h2>		
<?php
			}
?>
	<p> 
		<a href="<?= URL ?>birthday/edit/<?=$birthday["id"]?>">
			<?=$birthday['person']?> (<?= $birthday['year']?>)</a>
		<a href="<?= URL ?>birthday/delete/<?=$birthday['id']?>">X</a>
	
	</p>
<?php 
	}
?>
<p><a href="<?= URL ?> birthday/create">nieuwe verjaardag toevoegen</a></p>
