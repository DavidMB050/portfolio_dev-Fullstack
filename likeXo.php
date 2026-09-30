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



/**  Like projet XO **/


/* Vérification si l'utilisateur a déjà liké */

$queryCheckLikeX = "
    SELECT liker
    FROM projet_xogame
    WHERE id_guest = ?
    AND liker = 1
";


$stmtCheckLikeX = mysqli_prepare($link, $queryCheckLikeX);

mysqli_stmt_bind_param(
    $stmtCheckLikeX,
    "i",
    $idGuest
);

mysqli_stmt_execute($stmtCheckLikeX);


/* Récupération du résultat */

$resultCheckLikeX = mysqli_stmt_get_result($stmtCheckLikeX);


/* Vérification */

if (mysqli_num_rows($resultCheckLikeX) == 0) {

    /* L'utilisateur n'a pas encore liké */

    $likeXo = 1;


    $queryAddLikeX = "
        INSERT INTO projet_xogame(id_guest, liker)
        VALUES (?, ?)
    ";


    $stmtAddLikeX = mysqli_prepare($link, $queryAddLikeX);

    mysqli_stmt_bind_param(
        $stmtAddLikeX,
        "ii",
        $idGuest,
        $likeXo
    );

    mysqli_stmt_execute($stmtAddLikeX);

    echo "Like ajouté";

}

else {

    /* L'utilisateur avait déjà liké */

    $queryDeleteLikeX = "
        DELETE FROM projet_xogame
        WHERE id_guest = ?
        AND liker = 1
    ";


    $stmtDeleteLikeX = mysqli_prepare($link, $queryDeleteLikeX);

    mysqli_stmt_bind_param(
        $stmtDeleteLikeX,
        "i",
        $idGuest
    );

    mysqli_stmt_execute($stmtDeleteLikeX);

    echo "Like supprimé";

};


?>