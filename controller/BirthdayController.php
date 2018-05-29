<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	render("birthday/index", array(
		'birthdays' => getAllbirthdays()
	));
}
function create()
{
	render("birthday/create");
}

function createSave()
{
	if (createBirthday()) {
		header("location:" . URL . "birthday");
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_db");
		exit();
	}
}


function edit($id)
{
	$birthday = getBirthday($id);

	render("birthday/edit", array(
		"birthday" => $birthday
	));
}

function editSave($id)
{
	if (editBirthday($id)) {
		header("location:" . URL . "birthday");
		exit();
	} else {
		header("location:" . URL . "error/error_404");
		exit();
	}
}

function delete($id)
{
	if (deleteBirthday($id)) {
		header("location:" . URL . "birthday");
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_delete");
		exit();
	}
}
