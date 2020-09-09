<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include "../res/x5engine.php";
	$form = new ImForm();
	$form->setField('Nombre', $_POST['imObjectForm_1_1'], '', false);
	$form->setField('Telefono', $_POST['imObjectForm_1_2'], '', false);
	$form->setField('E-mail', $_POST['imObjectForm_1_3'], '', false);
	$form->setField('Mensaje', $_POST['imObjectForm_1_4'], '', false);

	if(@$_POST['action'] != "check_answer") {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != "jsactive" || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('secretaria@elcarmelo.com.co', 'secretaria@elcarmelo.com.co', '', '', true);
		$form->mailToCustomer('secretaria@elcarmelo.com.co', $_POST['imObjectForm_1_3'], '', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file