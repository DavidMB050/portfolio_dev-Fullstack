<?php 
/* Connexion des bases de donnés */
include("connectDB.inc.php"); 

/* Démarage de session dans le cas d'une création de compte  */

session_start();

/* Fonction pour traitement de donnés  */

function data_verify($data){
$data = trim($data);
$data = htmlspecialchars($data);

return $data;
}; 

/* Fonction pour traitement de mail  */

function mail_verify($data){
    $data = filter_var ($data,FILTER_VALIDATE_EMAIL);

 return $data;
};




if ($_SERVER["REQUEST_METHOD"]== "POST"){

/* Récupération des donnés pour PHP */


$mail = $_POST["mail"];
$identifiant= $_POST["identifiantName"];
$password = $_POST["password"];
$confirmPassword = $_POST ["confirmPassword"];

/* Valeur Sécrisation du mot de passe  */

$secureMdp= "";

/* Paramètres pour erreurs et vérifications */

$errorMail ="";
$errorId ="";
$errorMdp ="";



/**  Vérifications des donnés du formulaire **/


/*Paramètres vérifications mail et identifiant*/

$verifMail= "";
$verifId= "";

/* Vérifications mail et identifiant*/



if (empty($identifiant)) {
echo $errorId = " L'identifiant est nécessaire !";
}

else {
echo $verifId = data_verify($identifiant);
};


if (empty($mail)) {

    $errorMail = "L'adresse mail est nécessaire !";

} else {

    $verifMail = mail_verify($mail);

    if ($verifMail === false) {
       echo $errorMail = "L'adresse mail n'est pas valide.";
    }
};



/** Vérification de mot de passe **/

/* Conditions mot de passe */

/* Vérification présence mot de passe */

if(empty($password) || empty($confirmPassword) 
       || $password !== $confirmPassword) 
    { echo $errorMdp = " Erreur de mot de passe ou
                         dans la confirmation du mot de passe !";

}

/* Vérification mot de passe identique */

elseif (!empty($password) && $password == $confirmPassword) {


/* Vérification  longueur mot de passe */

if (strlen($password) < 6 || strlen($password) > 12) {
    $errorMdp = "Votre mot de passe doit contenir 6 à 12 caractères.";
}

else {

/*  hash de mot de passe */

$secureMdp = password_hash($password,PASSWORD_DEFAULT);
};

};





/** Vérification doublons PHP et SQL **/


    if (
        empty($errorId) &&
        empty($errorMail) &&
        empty($errorMdp)
    )
    {

/* Envoi donnés sécurisées du formulaire à MYSQLI */


$querrySelectVariable = "SELECT * FROM crea_guest
WHERE identifiant_name = ?
Or mail = ?
";


$querryPrepareSelect = mysqli_prepare($link,$querrySelectVariable);

mysqli_stmt_bind_param(
$querryPrepareSelect,
"ss",
$verifId,
$verifMail
);

mysqli_stmt_execute($querryPrepareSelect);

$resultSelect= mysqli_stmt_get_result($querryPrepareSelect);

/* fonction pour la vérification des doublons */

if (mysqli_num_rows($resultSelect)!==0) {
echo $usedID ="L'identifiant ou le mail a déjà été utilisé !";
}

else{

/** Insertion donnés formulaire dans le tableau SQL  **/

$querryAddVariable ="INSERT INTO crea_guest (identifiant_name, mail, passwrd_hash)
Values (?, ?, ?)
" ; 

$querryPrepareAdd = mysqli_prepare($link,$querryAddVariable);

mysqli_stmt_bind_param(
$querryPrepareAdd,
"sss",
$verifId,
$verifMail,
$secureMdp

);

mysqli_stmt_execute($querryPrepareAdd);



/** Lancement d'une session après sa création **/

/* Récupération de l'id sur Mysqli */

$idGuest = mysqli_insert_id($link);

/* Sécurisation de la session */

session_regenerate_id(true);

/* Création de variables de session pour stockage de donnés de la session */

$_SESSION ["id_guest"] = $idGuest;
$_SESSION ["identifiant_name"] = $verifId;
$_SESSION ["connecte"] = true;



/* Reidrection sur la page principale */

header("Location: home.php");
exit();

};

};




};


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


 <!... Style Global formulaire de contact ...!>
<style>

   /* Réglages Globaux */


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #2D2C2A;
         display: flex;
    align-items:center ;
    justify-content: center;
    }

    h1,
    h2 {
        font-family: "Righteous";
    }



    h3 {
        font-family: "Revalia";
    }

    p,
    caption,
    li,
    blockquote {
        font-family: "Roboto";
        font-weight: 500;
        font-size: 2.5vh;
    }


 /* Partie Contact */


    #Form {
        display:grid;
        grid-template-rows: auto;
        background-color: #CF4CE0;
        max-width: 773px;
        max-height: 894px;
        width: 550px;
        border-radius: 10px;
        padding: 3%;
    }

    #Form h3 {
        padding: 3%;
    }

    #Form input {
        width: 250px;
        height: 30px;
        margin: 2%;

        border: 2px solid #FFFBFF;
        border-radius: 5px;


    }

  


    #Form label {
        padding: 2%;
        font-size: medium;
        font-family: roboto;
        font-weight: bold;

    }




#Partiecontact span {
    font-size: 2.5em;
    text-align: center;
    font-family: Revalia;
    padding: 3%;
}

#name:required {
    border-color: red;
}

button {
    width: fit-content;
    padding: 1%;
    margin: 2%;
    border-radius: 10px;
    cursor: pointer;
}

</style>

</head>
<body>

  <main>

  <!-- CONTACT -->

    <!-- SECTION 5 -->

    <a href="home.php"> Retour à la page d'acceuil</a>
  <section id="creaCompte">
    

    <form id="Form"  action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">

      <span> Créer un compte :</span>
      
     <label for="identifiant"> Identifiant:</label>
     <input type="text" placeholder="Mon identifiant" id="identifiant" name="identifiantName" required />
      
     <?php  ?>

          <label for="mail"> Mail:</label>
      <input type="email" placeholder="Email@gmail.com" id="mail" name="mail" required />
      
      <?php  ?>
      
      <label for="password"> Mot de passe:</label>
      <input type="password" id="password" name="password" required >
      
      <label for="confirmPassword"> Confirmer votre mot de passe :</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required >
      <?php  ?>
      
<button type="submit" class="seesend"> Envoyer</button>

    </form>




</div>

</section>

</main>


</body>
</html>

