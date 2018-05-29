<form action="<?= URL ?>birthday/editSave/<?= $birthday["id"] ?>" method="POST">
	<input type="text" name="person"  placeholder="person" value="<?= $birthday["person"] ?>">
	<input type="text" name="day" placeholder="day" value="<?= $birthday["day"] ?>">
	<input type="text" name="month" placeholder="month" value="<?= $birthday["month"] ?>">
	<input type="text" name="year" placeholder="year" value="<?= $birthday["year"] ?>">
	
	
	<input type="hidden" name="id" value="<?= $birthday["id"] ?>">

	<input type="submit" value="Opslaan">
</form>