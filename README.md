
<img width="1918" height="871" alt="portfoliodevfull" src="https://github.com/user-attachments/assets/7c2aa3aa-51a5-48d9-9bb4-b9855206d68a" />


# Portfolio Fullstack – David Mbougueng

## 📌 Présentation du projet

Ce projet consiste en la création d'un portfolio personnel Fullstack permettant de présenter mes compétences en développement web, mes réalisations ainsi que mon parcours professionnel.

Développé à partir de technologies web natives, ce portfolio intègre des fonctionnalités dynamiques reposant sur PHP et MySQL. Il met en pratique la gestion des utilisateurs, les interactions avec une base de données et la communication entre le frontend et le backend.

L'objectif de ce projet est de consolider mes compétences en développement Fullstack tout en concevant une application web fonctionnelle, interactive et évolutive.

## 🎯 Objectifs

- Concevoir une interface web responsive et interactive.
- Développer des fonctionnalités côté frontend et backend.
- Mettre en place une base de données relationnelle.
- Implémenter un système d'authentification et de gestion des sessions.
- Manipuler des requêtes SQL à travers PHP et MySQLi.
- Comprendre les échanges de données entre JavaScript et PHP.
- Appliquer les bonnes pratiques de développement et de sécurité web.

## 🛠️ Technologies utilisées

| Technologie | Utilisation |
|---|---|
| HTML5 | Structure des pages web |
| CSS3 | Mise en forme et responsive design |
| JavaScript | Interactions dynamiques et requêtes asynchrones |
| PHP | Développement backend et gestion des fonctionnalités serveur |
| MySQL | Stockage et gestion des données |
| MySQLi | Connexion et interactions avec la base de données |
| XAMPP | Environnement de développement local |
| Git / GitHub | Versionnement et gestion du code source |

## ✨ Fonctionnalités

### Gestion des utilisateurs
- Création de compte utilisateur.
- Authentification avec identifiant et mot de passe.
- Vérification des mots de passe avec `password_verify()`.
- Gestion des sessions PHP.
- Déconnexion utilisateur.

### Formulaire de contact
- Collecte des informations saisies par les visiteurs.
- Validation des données.
- Enregistrement des informations dans une base de données MySQL.

### Interactions avec les projets
- Système de likes sur les projets présentés.
- Fonctionnalité de partage des projets.
- Vérification de l'authentification avant certaines interactions.

### Gestion des données
- Connexion à une base de données MySQL.
- Utilisation de requêtes SQL via MySQLi.
- Organisation des données utilisateurs et des interactions par projet.

## 🗂️ Structure du projet

```text
portfolio-fullstack/
│
├── assets/
│   ├── css/
│   ├── images/
│   ├── js/
│   └── videos/
│
├── connectDB.inc.php
│
├── home.php
│
├── creationutilisateur.php
├── accesutilisateur.php
├── deconnexion.php
│
├── formulairecontact.php
│
├── likeMarketing.php
├── likeXo.php
├── likeEdit.php
│
├── partageMarketing.php
│
└── README.md
```

*Cette arborescence est indicative et peut évoluer en fonction de l'organisation finale du projet.*

## 🗄️ Base de données

Le projet utilise une base de données MySQL pour stocker les informations nécessaires au fonctionnement des différentes fonctionnalités.

Principales données gérées :
- Informations des utilisateurs.
- Données du formulaire de contact.
- Likes et commentaires associés aux projets.
- Informations relatives aux partages.

La connexion à la base de données est centralisée dans le fichier `connectDB.inc.php`.



## 🔐 Sécurité

Une attention particulière est portée à la sécurité des fonctionnalités backend :

- Hachage des mots de passe.
- Vérification des sessions utilisateurs.
- Contrôle de l'accès aux fonctionnalités réservées.
- Validation des données reçues depuis les formulaires.
- Utilisation de requêtes préparées MySQLi pour limiter les risques d'injection SQL.
- Protection des informations de connexion à la base de données.

## 📚 Compétences développées

Ce projet m'a permis de mettre en pratique plusieurs compétences :

- Développement frontend avec HTML, CSS et JavaScript.
- Développement backend avec PHP.
- Manipulation d'une base de données relationnelle MySQL.
- Gestion de l'authentification et des sessions.
- Communication asynchrone entre JavaScript et PHP avec Fetch API.
- Gestion des requêtes SQL et des interactions utilisateurs.
- Organisation et versionnement du code avec Git.

## 🔮 Améliorations envisagées

- Renforcement de la sécurité et de la validation des données.
- Mise en place d'un système de commentaire
- Ajout d'une section expliquant les modifications à venir
- Amélioration de l'expérience utilisateur.
- Optimisation des performances.
- Ajout de nouvelles fonctionnalités interactives.
- Amélioration de la documentation technique.
- Évolution de l'architecture du projet.

## 👨‍💻 Auteur

**David Mbougueng**

Développeur Fullstack junior en reconversion professionnelle, avec une expérience en marketing digital.

- LinkedIn : [David Mbougueng](https://www.linkedin.com/in/david-mbougueng-19096713b/)
- Portfolio : [mbdavidportfoliodev.eu](https://mbdavidportfoliodev.eu/)

---

*Projet réalisé dans le cadre de ma reconversion professionnelle vers le développement web Fullstack.*
