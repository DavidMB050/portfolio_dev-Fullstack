# EDITAPP — Application d'éditeur de texte

## Présentation

EDITAPP est une application web de prise de notes développée dans le cadre de ma reconversion professionnelle vers le développement web.

Ce projet a pour objectif de concevoir une interface permettant à l'utilisateur de rédiger et de manipuler du contenu textuel directement depuis son navigateur.

L'application a été réalisée en HTML, CSS et JavaScript natif, avec une attention particulière portée à la manipulation du DOM et à la gestion des sélections de texte.

## Fonctionnalités

- Édition de contenu textuel directement dans l'interface.
- Manipulation du contenu de l'éditeur.
- Gestion des sélections de texte.
- Interaction dynamique avec le DOM.
- Interface utilisateur dédiée à la prise de notes.

## Technologies utilisées

| Technologie | Utilisation |
|---|---|
| HTML5 | Structure de l'application |
| CSS3 | Mise en forme et interface utilisateur |
| JavaScript | Gestion des interactions et de la logique applicative |
| DOM API | Manipulation dynamique des éléments HTML |
| Selection API | Gestion des sélections de texte |
| Range API | Manipulation de portions de contenu sélectionnées |

## Fonctionnement technique

Le projet repose sur JavaScript natif afin de gérer les interactions entre l'utilisateur et l'éditeur de texte.

L'utilisation de l'attribut `contenteditable` permet de rendre une zone HTML directement éditable.

Les API `Selection` et `Range` sont utilisées pour accéder aux portions de texte sélectionnées et manipuler leur contenu.

Cette approche permet de travailler sur la structure du contenu édité sans recourir à une bibliothèque externe dédiée à l'édition de texte.

## Installation et lancement

### Prérequis

- Un navigateur web moderne.
- Git (facultatif, pour cloner le dépôt).

### Installation

1. Cloner le dépôt GitHub :

   ```bash
   git clone https://github.com/DavidMB050/EDITAPP.git
   ```

2. Accéder au dossier du projet :

   ```bash
   cd NOTEAPP
   ```

3. Ouvrir le fichier HTML principal dans un navigateur web.

Aucune installation de dépendances n'est nécessaire pour la version utilisant HTML, CSS et JavaScript natif.

## Objectifs pédagogiques

Ce projet m'a permis de développer mes compétences en :

- Manipulation du DOM avec JavaScript.
- Gestion des événements utilisateur.
- Utilisation des API natives du navigateur.
- Manipulation de contenu HTML éditable.
- Conception d'une interface web interactive.
- Structuration d'un projet front-end.

## Améliorations envisagées

Plusieurs évolutions pourraient être apportées au projet :

- Sauvegarde des notes.
- Gestion de plusieurs notes.
- Mise en place d'un système de comptes utilisateurs.
- Refactorisation avec REACT


## Auteur

**David Mbougueng**

Développeur Full-Stack Junior en reconversion professionnelle.

GitHub : [DavidMB050](https://github.com/DavidMB050)

Portfolio : [mbdavidportfoliodev.eu](https://mbdavidportfoliodev.eu/)
