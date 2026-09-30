

<?php

/* Inclusion connexion*/
include ("connectDB.inc.php");



/* Filtrage et traitement de la data */

/* Fonction de filtrage */

function data_verify ($data) {

$data = trim($data);
 $data = htmlspecialchars($data);

return $data;

};

/* Fonction de filtrage et validité de mail */


function mail_verify ($data) {


$data = filter_var ($data,FILTER_VALIDATE_EMAIL);

 return $data;
 

};



/* Filtrage input form */



 if ($_SERVER ["REQUEST_METHOD"] == "POST") {

/* Paramètres pour la gestion des erreurs */

$ErrName = "";
$ErrPrenom = "";

$ErrMail= "";


$verifName ="";
$verifPrenom ="";
$verifMail ="";
$verifMessage ="";
 
/* Récupération des variables pour PHP*/ 

$name = $_POST["nom"];
$prenom = $_POST["prenom"]; 

$mail = $_POST["mail"];
$message = $_POST["message"];


 if (empty($name)) {
    echo $ErrName = "Le nom est obligatoire.";
 }
 
 else {
    echo $verifName = data_verify($name);
 }
 ;


 if (empty($prenom)) {
    echo $ErrPrenom = "Le nom est obligatoire.";
 }
 
 else {
    echo $verifPrenom = data_verify($prenom);
 }
 ;


 if (empty($mail)) {
echo  $ErrMail = "Le mail est obligatoire ";
 }

 else {
   echo  $verifMail = mail_verify($mail);
 };


if (!empty($message)) {
    echo $verifMessage = data_verify($message);
};

if ($verifMail === false) {
    $ErrMail = "Adresse mail invalide.";
};
/* Transfert des variables à sql */ 

$querryAddVariable = "INSERT INTO form_contact (nom, prenom, email, message)
VALUES ('$verifName', '$verifPrenom','$verifMail','$verifMessage')";

 $Addvariable = mysqli_query($link,$querryAddVariable);

 echo "Votre formulaire a été envoyé";
};




?>

