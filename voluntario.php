<?php

$EmailFrom="info@mithr.io";
$EmailTo="info@mithr.io";
$Subject=" quiere ser Voluntario de Mithr.io!";
$SubjectUser="¡Quieres ser voluntario de MITHR!";
$Email=Trim(stripslashes($_POST['voluntarioEmail']));

// simple way to validate the form
$ValidationOk=true;

if ($Email == "") $ValidationOk=false;
	if (!$ValidationOk) {
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
		exit;
	}
		
	// preparing the body of the email 
	$Body="";

	$Body="";
	$Body.="Se registraron para ser voluntario de Mithr! Felicitaciones!.";
	$Body.="\n";
	$Body.="El email que registramos es: ";
	$Body.=$Email;
	$Body.="\n";
	$Body.="\n";
	$Body.="Salu2!, El equipo de Mithradir.";
	$Body.="\n";

	$Body_User="";
	$Body_User.="Te registraste para ser voluntario de Mithr! Felicitaciones!.";
	$Body_User.="\n";
	$Body_User.="En breve te estaremos contactando! El email que registramos es: ";
	$Body_User.=$Email;
	$Body_User.="\n";
	$Body_User.="¿Quieres contactarnos tu?! Te dejamos nuestro linktree para que puedas ver nuestros datos, y contactarnos desde donde prefieras.";
	$Body_User.="\n";
	$Body_User.="https://linktr.ee/breakpoint341";
	$Body_User.="\n";
	$Body_User.="\n";
	$Body_User.="Salu2!, El equipo de Mithradir.";
	$Body_User.="\n";

	//sending the email now
	//$success=mail($EmailTo, $Email . $Subject, $Body,"From: <$EmailFrom>");
	//$success_dos=mail($Email, $SubjectUser, $Body_User,"From: <$EmailFrom>");

	//redirect after mail send 
	//if ($success) {
 
       print "<meta http-equiv=\"refresh\" content=\"0;URL=send_voluntario.html\">";

	//}
	//else {

	//	print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";

	//}
?>