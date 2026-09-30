<?php

include("connectDB.inc.php");

/* Démarrage de session */
session_start();


/* Vérification que l'utilisateur est connecté */

if (!isset($_SESSION["connecte"]) || $_SESSION["connecte"] !== true) {

    exit("Vous n'êtes pas connecté.");

}


/* Récupération de l'id de l'utilisateur */

$idGuest = $_SESSION["id_guest"];


/**  Like projet Marketing **/


/* Vérification si l'utilisateur a déjà liké */

$queryCheckLikeM = "
    SELECT liker
    FROM projet_marketing
    WHERE id_guest = ?
    AND liker = 1
";


$stmtCheckLikeM = mysqli_prepare($link, $queryCheckLikeM);

mysqli_stmt_bind_param(
    $stmtCheckLikeM,
    "i",
    $idGuest
);

mysqli_stmt_execute($stmtCheckLikeM);


/* Récupération du résultat */

$resultCheckLikeM = mysqli_stmt_get_result($stmtCheckLikeM);


/* Vérification */

if (mysqli_num_rows($resultCheckLikeM) == 0) {

    /* L'utilisateur n'a pas encore liké */

    $likeMarketing = 1;


    $queryAddLikeM = "
        INSERT INTO projet_marketing (id_guest, liker)
        VALUES (?, ?)
    ";


    $stmtAddLikeM = mysqli_prepare($link, $queryAddLikeM);

    mysqli_stmt_bind_param(
        $stmtAddLikeM,
        "ii",
        $idGuest,
        $likeMarketing
    );

    mysqli_stmt_execute($stmtAddLikeM);

    echo "Like ajouté";

}

else {

    /* L'utilisateur avait déjà liké */

    $queryDeleteLikeM = "
        DELETE FROM projet_marketing
        WHERE id_guest = ?
        AND liker = 1
    ";


    $stmtDeleteLikeM = mysqli_prepare($link, $queryDeleteLikeM);

    mysqli_stmt_bind_param(
        $stmtDeleteLikeM,
        "i",
        $idGuest
    );

    mysqli_stmt_execute($stmtDeleteLikeM);

    echo "Like supprimé";

};




?>