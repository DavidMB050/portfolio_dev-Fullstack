
<?php


include("connectDB.inc.php");


/* Démarage de session */
session_start();


include("formulairecontact.php");



/**  Requête SQL Pour récupérer le nombre total de notifications
 * par projet sur la homepage **/


/**  Requête SQL Pour récupérer le nombre total de likes sur projet marketing **/


$querySelectLikeM = "SELECT *
FROM projet_marketing
WHERE liker = 1
";

$queryPrepareLikeM = mysqli_prepare($link, $querySelectLikeM);

mysqli_stmt_execute($queryPrepareLikeM);

$resultatLikeM = mysqli_stmt_get_result($queryPrepareLikeM);

$nombreLikeM = mysqli_num_rows($resultatLikeM);


/** Requête SQL Pour récupérer le nombre total de likes sur projet XO**/


$querySelectLikeX = "SELECT *
FROM projet_xogame
WHERE liker = 1
";

$queryPrepareLikeX = mysqli_prepare($link, $querySelectLikeX);

mysqli_stmt_execute($queryPrepareLikeX);

$resultatLikeX = mysqli_stmt_get_result($queryPrepareLikeX);

$nombreLikeX = mysqli_num_rows($resultatLikeX);


/** Requête SQL Pour récupérer le nombre total de likes sur projet Editeur**/


$querySelectLikeE = "SELECT *
FROM projet_editeur
WHERE liker = 1
";

$queryPrepareLikeE = mysqli_prepare($link, $querySelectLikeE);

mysqli_stmt_execute($queryPrepareLikeE);

$resultatLikeE = mysqli_stmt_get_result($queryPrepareLikeE);

$nombreLikeE = mysqli_num_rows($resultatLikeE);




/** Requête SQL Pour récupérer le nombre total de partage sur projet Marketing**/


$querySelectPartageM = "SELECT *
FROM projet_marketing
WHERE partage = 1
";

$queryPreparePartageM = mysqli_prepare($link, $querySelectPartageM);

mysqli_stmt_execute($queryPreparePartageM);

$resultatPartageM = mysqli_stmt_get_result($queryPreparePartageM);

$nombrePartageM = mysqli_num_rows($resultatPartageM);



/** Requête SQL Pour récupérer le nombre total de partage sur projet XO game**/


$querySelectPartageX = "SELECT *
FROM projet_xogame
WHERE partage = 1
";

$queryPreparePartageX = mysqli_prepare($link, $querySelectPartageX);

mysqli_stmt_execute($queryPreparePartageX);

$resultatPartageX = mysqli_stmt_get_result($queryPreparePartageX);

$nombrePartageX = mysqli_num_rows($resultatPartageX);


/** Requête SQL Pour récupérer le nombre total de partage sur projet Editeur*/


$querySelectPartageE = "SELECT *
FROM projet_editeur
WHERE partage = 1
";

$queryPreparePartageE = mysqli_prepare($link, $querySelectPartageE);

mysqli_stmt_execute($queryPreparePartageE);

$resultatPartageE = mysqli_stmt_get_result($queryPreparePartageE);

$nombrePartageE = mysqli_num_rows($resultatPartageE);



?>

<!DOCTYPE html>
<html >

<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link   rel="stylesheet" href="assets/css/style.css">

   <!-- Font Righteous -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
 
<!-- Font Revalia -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Revalia&family=Righteous&display=swap" rel="stylesheet">

<!-- Font Roboto -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Revalia&family=Righteous&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

 

</head>

<body>

 <!-- NAV -->
<nav id="nav">
  <button id="Menu" class="menuall">
    <img src="assets/images/burger-bar.png" alt="">
  </button>

  <a href="#Home"   id="buttonhome" class="menuall">
    <img src="assets/images/maison.png" alt="">
  </a>

  <a href="#Partiecompétences" id="buttoncompétences" class="menuall">
    <img src="assets/images/competence.png" alt="">
  </a>

  <a href="#Partieprojetsweb" id="buttonwebdev" class="menuall">
    <img src="assets/images/web-development (2).png" alt="">
  </a>

  <a href="#Partieprojetsu" id="buttonuxprojet" class="menuall">
    <img src="assets/images/user-experience.png" alt="">
  </a>

  <a href="#Partiecontact" id="buttoncontact" class="menuall">
    <img src="assets/images/phone.png" alt="">
  </a>
</nav>





  <main id="scroll-container">

    <!-- SECTION 1 -->


<section id="Home">

<span id="connexionInscrip">

<?php if (isset($_SESSION["connecte"]) && $_SESSION["connecte"] === true) : ?>

    Bonjour <strong><?php echo $_SESSION["identifiant_name"]; ?></strong>

<?php else : ?>

    <a href="accesutilisateur.php" id="connexion">Connexion /</a>
    <a href="creationutilisateur.php" id="inscription">Inscription</a>

<?php endif; ?>

</span>


<?php if (isset($_SESSION["connecte"]) && $_SESSION["connecte"] === true) : ?>

<span id="deconnexion">
    <a href="deconnexion.php">Déconnexion</a>
</span>

<?php endif; ?>


<div id = homeprez>
      <div id="idprez">

        <p>Mbougueng 
          <br>
          David</p>
        <span>2025 / 2026</span>

      </div>

      <img src="assets/images/imageportfoliodev.jpg" alt="">

      <h1 id="portfoliotitre">
        Portfolio<br>
        Développeur<br>
        Fullstack
      </h1>
    
</div>
      <blockquote id="quoteprez">
        “First, solve the problem.
        <br>
        Then, write the code.”
        <span>— John Johnson</span>
      </blockquote>
   

</section>

 <!-- SECTION 2 -->
  <!-- ABOUT -->
     <section id="Partiecompétences" >

  <div id="Groupapropos">
    
  <h3 id="Apropos">À propos</h3>
    <p class="textpropos">
      Développeur full-stack junior en reconversion, je combine
     3 ans d’expérience en marketing digital et une montée en
      compétence solide en développement web. J’ai travaillé
      sur des projets concrets de refonte de sites, d’optimisation de parcours utilisateurs et de performance digitale.
Aujourd’hui, je développe des applications web, en mettant l’accent sur la logique, la qualité du code et l’expérience utilisateur.
    </p>
   <a href="#Partiecontact" class="seesend" id="Boutonpropos"  >Contactez-moi<div> > </div></a>
  
  </div>
  

  <!-- SKILLS -->
   

    <div    id="skilllist">
       <h2 id="titrecompétences">Compétences</h2>
      <div  class="skills" id="skillpart1">
     <div class="skill"> <img src="assets/images/html-5.png" alt=""> Html</div>
     <div class="skill"> <img src="assets/images/css-3.png" alt=""> Css</div>
     <div class="skill"> <img src="assets/images/script-java.png" alt=""> Javascript</div>

      </div>

      <div class="skills" id="skillpart2">
         <div class="skill"> <img src="assets/images/serveur-sql.png" alt=""> Sql</div>
     <div class="skill"> <img src="assets/images/bibliotheque.png" alt=""> React</div>
     <div class="skill"> <img src="assets/images/langage-de-programmation-php.png" alt="">Php</div>
      </div>
    </div>
</section>


<!-- SECTION 3 -->
  <!-- PROJECTS DEV -->

  <section id="Partieprojetsweb">
    <h2 class="Projettitre" id="Projettitre1">Projets développement web</h2>
<div id="Projetdev">
 

   <div id="Projetunsuite">

   <div class="Introprojet">
     <h3 class="Projet">Projet</h3>
     <h3 class="Projectnumber">01</h3>
     </div> 

     <div id="Allpart2">
   <div class="alltextepart">   <h2 id="titreportmarketing">Portfolio marketing</h2>
      <h3 id="techniques">Aspects techniques: </h3>

      <p class="texteproject" id="projettextesuite">
Projet réalisé en HTML5, CSS3 et JavaScript vanilla afin de consolider 
la compréhension de la logique applicative, de la manipulation du DOM et
 de la gestion d’interfaces dynamiques sans framework.
Le JavaScript est principalement utilisé pour concevoir
 des sliders personnalisés, avec affichage simultané de plusieurs
  éléments à l’écran.
  </p>

   <p class="texteproject">
  Les sliders reposent sur une structure de données basée sur des tableaux,
   permettant une gestion fluide de l’ordre des slides.
Les méthodes shift() et push() sont utilisées pour faire circuler
 dynamiquement les éléments.
Après mise à jour de la logique applicative, le DOM est entièrement régénéré via :

suppression des éléments existants (innerHTML = ""),

réinjection des slides dans le bon ordre à l’aide de forEach() et appendChild().</p>
   
<div class="allseesend">
 <a href="https://lawngreen-kudu-983221.hostingersite.com/" class="seesend"> Voir le projet <div> > </div></a>

  <a href="https://github.com/DavidMB050/portfolio_marketing" 
   class="seesend" 
   target="_blank" 
   rel="noopener noreferrer">
 Voir Github <div> > </div></a>
</div>
</div>
  
  <img src="assets/images/Home page portfolio marketing 2025 carré.png" class ="slide">
  
</div>

   </div>

   <div class="reactions">
   <button id="likeMarketing"> &#10084;<?php echo "$nombreLikeM" ?></button>
   <!--   <button id="commentMarketing"> &#9993;</button> -->
     <button id="partageMarketing">&#10149; <?php echo "$nombrePartageM" ?></button> 
</div>

<div id="Projetdeux">
   <div class="Introprojet" id="Introprojet2">
     <h3 class="Projet">Projet</h3> 
     <h3 class="Projectnumber2">02</h3>
     </div> 
   
   <div id="Allpart3">
   <div class="alltextepart">  
     <h2 id="titrexo">XO GAME</h2>
      <h3 id="techniques">Aspects techniques : </h3>
      <p class="texteproject" id="projettexte2">
Application développée majoritairement en JavaScript vanilla,
 avec une structure simple en HTML5 et une mise en forme en CSS3.
Ce projet vise à renforcer la gestion des événements et les interactions utilisateurs. </p>
<br>
<p class="texteproject" id="projettexte3">
 Dans ce projet j'utilise: La gestion des clics utilisateurs via addEventListener :

La manipulation dynamique du DOM pour afficher les symboles X et O.

La vérification de l’état des cases avant interaction.

La logique adverse repose sur une fonction dédiée (playO()) qui :

sélectionne aléatoirement une case libre via Math.random(),

vérifie la disponibilité des cases à l’aide de filter(),

empêche toute écriture sur une case déjà occupée.
</p>

<div class="allseesend">
  <a href="xo-game" class="seesend">  Voir le projet <div> > </div></a>

   <a href="https://github.com/DavidMB050/XOGAME" 
   class="seesend" 
   target="_blank" 
   rel="noopener noreferrer">
 Voir Github <div> > </div></a>
</div>
</div>

  <img src="assets/images/XOimg.png" class="slide">

</div>
   </div>


  <div class="reactions">
    <button id="likeXo"> &#10084; <?php echo "$nombreLikeX" ?></button>
   <!--  <button id="commentXo"> &#9993;</button> -->
    <button id="partageXo">&#10149; <?php echo "$nombrePartageX" ?></button>
</div>


   <div id="Projettrois">
   <div class="Introprojet">
     <h3 class="Projet">Projet</h3>
      <h3 class="Projectnumber3">03</h3>
     </div> 

   <div id="Allpart4">
   <div class="alltextepart">  
     <h2 id="titreappnote">APP PRISE DE NOTES</h2>
      <h3 id="techniques">Aspects techniques : </h3>
      <p class="texteproject" id="projettexte4">
Application web inspirée des applications natives de prise de notes,
 développée en HTML5, CSS3 et JavaScript vanilla.
Objectif : explorer les possibilités d’édition de contenu directement 
dans le navigateur et la manipulation avancée du DOM.
 </p>
<br>
<p class="texteproject" id="projettexte5">
 
Ce projet est par: l'édition directe du contenu via contenteditable.

L'ajout dynamique de composants (titres, paragraphes, spans, checkboxes) à l’aide d’event listeners.

La modification du style et de la structure des notes en temps réel.

La fonctionnalité la plus avancée repose sur la gestion de la sélection de texte grâce à :

window.getSelection()

selection.getRangeAt(0) et

extractContents().

Cette approche permet de cibler, extraire et réinjecter
 précisément une portion de nœud sélectionnée, ouvrant la
  voie à des fonctionnalités avancées d’édition (mise en forme, annotations, structuration du contenu).
</p>

<div class="allseesend">
  <a href="app-prise-de-notes"  class="seesend"> Voir le projet <div> > </div></a>

   <a href="https://github.com/DavidMB050/NOTEAPP" 
   class="seesend" 
   target="_blank" 
   rel="noopener noreferrer">
 Voir Github <div> > </div></a>

 </div>

</div>
 
  <img src="assets/images/Noteappimg.png" class="slide">
  
</div>
</div>
    

  <div class="reactions">
    <button id="likeEdit"> &#10084; <?php echo "$nombreLikeE" ?> </button>
   <!-- <button id="commentEdit"> &#9993;</button> -->
    <button id="partageEdit">&#10149; <?php echo "$nombrePartageE" ?></button>
</div>


 </section>


  <!-- CASE STUDY -->

<!-- SECTION 4 -->
  <section id="Partieprojetsux"> 
    <h2 class="Projettitre">Projets UX/UI</h2>

   <div id="Projetux">
  <div id="Uxpart1">
    <div id="Allbreakfirst">
    <img src="assets/images/Breakfirst.png">
    <div id="Breakfirsttexte">
    <p class="texte">Application “Breakfirst” : </p>
    <br>
    <p class="texte">
interface d’une application de réservation de 
petit-déjeuner d’entreprise, pensée pour un parcours fluide et rapide. </p>

      <a 
   href="https://www.figma.com/proto/OoGkBpy6L7F71IRo3NNXz8/Sign-Up-UI-Daily?page-id=0%3A1&node-id=424-1107&viewport=5596%2C-1456%2C0.24&t=cpg2g3kzgD3fxK5e-1&scaling=scale-down&content-scaling=fixed&starting-point-node-id=424%3A933&show-proto-sidebar=1" 
   class="seesend"
   target="_blank"
   rel="noopener noreferrer"
>
   Voir Figma <div> &gt;</div>
</a>

</div>
</div>

<div id="Allunclej">
    <img src="assets/images/UncleJ projet.png">

    <div id="Unclejtexte">
    <p id="Unclejtitre">Application “Uncle J” :
 </p>
 <br>
    <p class="texte">
conception d’une application e-commerce dédiée à 
la vente de sneakers collectors, avec un focus sur
 le visuel produit et l’expérience d’achat mobile. </p>
 
      <a href="https://www.figma.com/proto/OoGkBpy6L7F71IRo3NNXz8/Sign-Up-UI-Daily?page-id=0%3A1&node-id=1848-2698&viewport=5596%2C-1456%2C0.24&t=0RwuoJSHRlQrPEpj-1&scaling=scale-down&content-scaling=fixed&starting-point-node-id=1848%3A2138&show-proto-sidebar=1"
      class="seesend"> 
  Voir Figma<div> > </div></a>
</div>
</div>
    
</div>

<div id="Uxpart2">
    <div id="Axsolclient">
    <img src="assets/images/Axsol paiement page nouveau.png">

    <div id="Parcoursclienttexte">
    <p class="texte"> Parcours client - “Axsol boutique” </p>
    <br>
    <p class="texte">
Résultat : +10 % de ventes sur la boutique en ligne </p>

<p class="texte">
Actions menées :
Séparation des parcours Particuliers / Professionnels pour alléger le formulaire.
Suppression de champs non essentiels (ex. téléphone fixe).
Simplification du parcours pour atteindre plus rapidement la page de paiement.
</p>
<br>
 <a href="https://www.figma.com/proto/OoGkBpy6L7F71IRo3NNXz8/Sign-Up-UI-Daily?page-id=0%3A1&node-id=1054-4703&p=f&viewport=4248%2C-2048%2C0.24&t=PXKA1iFhpMrUqXfh-1&scaling=scale-down&content-scaling=fixed&starting-point-node-id=1848%3A2138"
 class="seesend">
  Voir Figma<div> > </div></a>
</div>
</div>
</div>
</div>
</section>

  <!-- CONTACT -->

    <!-- SECTION 5 -->
  <section id="Partiecontact">
    

    <form id="Form"  action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">

      <span>Laissez moi un message :</span>
      <h3 id="Contacttitre">Contact</h3>
     <label for="nom" > Nom:</label>
     <input type="text" placeholder="Nom" id="nom" name="nom" required />
       <label for="prénom" > Prénom:</label>
     <input type="text" placeholder="Prenom" id="prenom" name="prenom" required />
     
          <label for="mail"> Mail:</label>
      <input type="email" placeholder="Email" id="mail" name="mail" required />
      
      
      <label for="message"> Message:</label>
      <textarea placeholder="Message" id="message" name="message"></textarea>

      
<button type="submit" class="seesend"> Envoyer</button>

    </form>



<div id="formpart">
  <span> Pour en savoir plus
     n'hésitez pas à me contacter</span>

<div id="formpartB">
      <a href="" class="seesend">
  Rendez-vous<div> > </div>
</a>

 <a href="asset/" class="seesend">
  Mon CV<div> > </div>
</a>
</div>


</div>

</section>
</main>

<!-- FOOTER -->

<footer class="footer">

  <ul class="menu-footer1">

  <li class="footer-element2">
      <a href="#Home">
        Home
      </a>
    </li>
    

    <li class="footer-element2">
      <a href="mailto:davidmbougueng@gmail.com">
        Mail : davidmbougueng@gmail.com
      </a>
    </li>


    <li class="footer-element1">© Mbougueng David</li>


<li>
      <a href="https://www.linkedin.com/in/david-mbougueng-19096713b/" target="_blank" rel="noopener">
        <img src="assets/images/linkedin.png" alt="LinkedIn">
      </a>
    </li>

    <li>
      <a href="https://github.com/" target="_blank" rel="noopener">
        <img src="assets/images/github.png" alt="GitHub">
      </a>
    </li>

  </ul>

  <ul class="menu-footer2">
 <li class="footer-element3"  >
         <a href="#Partieprojetsweb">
          Projets développement web
        </a>
    </li>
  </ul>

  <ul class="menu-footer3">
    <li class="footer-element3">
    <a href="#Partieprojetsux"> 
       Projets UX/UI </a>
    </li>
  </ul>

  <ul class="menu-footer4">
    <li>
       <a href="#Partiecontact">
        Contact
      </a>
    </li>
  </ul>

</footer>

<script>

/**  fonction pour liker  **/

/*  fonction pour like Marketing  */

document.querySelector("#likeMarketing").addEventListener("click", function() {

    fetch("likeMarketing.php", {
        method: "POST"
    })
    .then(response => response.text())
    .then(data => {

        console.log(data);
        document.querySelector ("#likeMarketing").style.color = "red";
        location.reload();

    });

});






document.querySelector("#likeXo").addEventListener("click", function() {

    fetch("likeXo.php", {
        method: "POST"
    })
    .then(response => response.text())
    .then(data => {

        console.log(data);
        document.querySelector ("#likeXo").style.color = "red";
        location.reload();

    });


});




document.querySelector("#likeEdit").addEventListener("click", function() {

    fetch("likeEdit.php", {
        method: "POST"
    })
    .then(response => response.text())
    .then(data => {

        console.log(data);
        document.querySelector ("#likeEdit").style.color = "red";
        location.reload();

    });


});


/**  fonction pour Partager  **/

/*  fonction pour partage Marketing  */

document.querySelector("#partageMarketing").addEventListener("click", function() {

    fetch("partageMarketing.php", {
        method: "POST"
    })
    .then(response => response.text())
    .then(data => {

        console.log(data);
        document.querySelector ("#partageMarketing").style.color = "violet";

        /* téléchargement automatique d'image de proget  */
      /* const lien = document.createElement("a");

    lien.href = "assets/images/imgprojetM.png";
    lien.download = "imgprojetM.png";

    lien.click();
*/

/* Rafraichissement de la page pour afficher le nombre de partage  */
        location.reload();

    });

});





</script>


</body>
</html>

