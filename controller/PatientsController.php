<?php

require(ROOT . "model/PatientsModel.php");

function index()
{
	render("Ziekenhuis/index", array(
		'ziekenhuis' => getAllStudents()
	));
}

function create()
{
	render("Ziekenhuis/create");
}

function createSave()
{
	if (!createStudent()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Ziekenhuis/index");
}

function edit($id)
{
	render("Ziekenhuis/edit", array(
		'student' => getStudent($id)
	));
}

function editSave()
{
	if (!editStudent()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Ziekenhuis/index");
} 

function delete($id)
{
	if (!deleteStudent($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Ziekenhuis/index");
}
