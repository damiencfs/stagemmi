<?php
error_reporting(E_ALL);

$EmailFrom = $_POST['mail']; 
$EmailFrom = filter_var($EmailFrom, FILTER_SANITIZE_EMAIL);
$EmailTo = "damiencherfils@gmail.com";
$Prenom = $_POST['prenom'];
$Nom = $_POST['nom']; 
$Subject = "Mail de contact depuis le site Maserati";
$Message = $_POST['message']; 

$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}
 
$Body = "";
$Body .= "Je suis ";
$Body .= $Prenom." ".$Nom;
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";
 
// envoi email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
	
// message success-error
if ($success){
  echo "Votre message a bien été envoyé.";
}
else{
  echo "Une erreur s'est produite lors de l'envoi de votre message.";
}
?>