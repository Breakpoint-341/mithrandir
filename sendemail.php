<?php

$EmailFrom="info@mithr.io";
$EmailTo="whitelist@mithr.io";
$Subject="Email enviado desde el Formulario de Mithr.io, para anotarme en la WHITE LIST!";
$SubjectUser="Te registraste para recibir el AirDrop de Mithr! Felicitaciones!";
$Email=Trim(stripslashes($_POST['email']));

// simple way to validate the form
$ValidationOk=true;
if ($Email == "") $ValidationOk=false;
	if (!$ValidationOk) {
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
		exit;
	}
		
	// preparing the body of the email 
	$Body="";

	$Body.="Email: ";
	$Body.=$Email;
	$Body.="\n";

	$Body_User="";
	$Body_User.="Te anotaste correctamente para recibir el AirDrop de MITHR, desde el email: ";
	$Body_User.=$Email;
	$Body_User.="\n";
	$Body_User.="FELICITACIONES! Te avisaremos cuando necesitemos tu Address Wallet de CARDANO para enviarte los Tokens.";
	$Body_User.="\n";
	$Body_User.="Salu2!, El equipo de Mithradir.";
	$Body_User.="\n";

	//sending the email now
	$success=mail($EmailTo, $Subject, $Body,"From: <$EmailFrom>");
	$success_dos=mail($Email, $SubjectUser, $Body_User,"From: <$EmailFrom>");

	//redirect after mail send 
	if ($success) {
 
       print "<meta http-equiv=\"refresh\" content=\"0;URL=send.html\">";

	}
	else {

		print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";

	}
?>