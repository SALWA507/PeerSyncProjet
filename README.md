PeerSync - Plateforme de Tutorat ENAA
📌 Description

PeerSync est une plateforme de peer-learning développée en PHP Orienté Objet pour les apprenants de l’ENAA.

L’objectif du projet est de permettre :

aux apprenants bloqués sur une technologie de créer une demande d’aide,
aux tuteurs volontaires de prendre en charge les tickets,
de suivre les sessions d’entraide,
et d’évaluer les tuteurs après résolution.

Le projet respecte les principes de :

Programmation Orientée Objet (POO),
Encapsulation,
Typage strict PHP 8,
Architecture en couches (Entities / Repositories / Views),
Utilisation sécurisée de PDO.
🚀 Fonctionnalités
✅ Authentification
Connexion utilisateur
Vérification email/password
Redirection vers dashboard
✅ Gestion des tickets
Création d’une demande d’aide
Affichage dynamique des tickets
Statuts :
pending
assigned
resolved
✅ Assignation des tickets
Un tuteur peut prendre un ticket
Impossible de prendre son propre ticket
Utilisation d’Exception PHP
✅ Résolution des tickets
Changement du statut vers resolved
Ajout d’un commentaire de remerciement
✅ Évaluation
Notation du tuteur entre 1 et 5
Validation métier avec Exception
Protection de la base de données
🛠️ Technologies utilisées
PHP 8
MySQL
PDO
Tailwind CSS
Apache / XAMPP
📂 Architecture du projet
peersync-backend/
│
├── config/
│   └── Database.php
│
├── src/
│   ├── Entities/
│   │   ├── User.php
│   │   ├── HelpRequest.php
│   │   └── Evaluation.php
│   │
│   ├── Enums/
│   │   └── Status.php
│   │
│   └── Repositories/
│       ├── HelpRequestRepository.php
│       └── EvaluationRepository.php
│
├── scripts/
│   ├── login_process.php
│   ├── request_process.php
│   ├── assign_process.php
│   ├── close_process.php
│   └── logout.php
│
├── public/
│   ├── index.php
│   └── dashboard.php
│
└── README.md
🗄️ Base de données
Tables utilisées
users
id
name
email
password
role
skills
id
name
user_skills
id
user_id
skill_id
level
help_requests
id
title
description
status
technology
student_id
tutor_id
comment
evaluations
id
rating
comment
student_id
tutor_id
help_request_id
⚙️ Installation
1. Cloner le projet
git clone https://github.com/your-username/PeerSync.git
2. Déplacer le projet dans htdocs
C:/xampp/htdocs/
3. Créer la base de données

Nom :

peersync
4. Importer le fichier SQL

Importer :

schema.sql
5. Lancer Apache + MySQL

Depuis XAMPP.

6. Ouvrir le projet
http://localhost/PeerSync/public/index.php
🧪 Tests effectués
✅ Création ticket

Le ticket est enregistré dans MySQL.

✅ Assignation sécurisée

Le tuteur ne peut pas s’assigner lui-même.

✅ Résolution ticket

Le statut passe à resolved.

✅ Validation note

Les notes supérieures à 5 sont rejetées avec Exception.

📸 Captures
Dashboard
Login
phpMyAdmin
ERD
UML
👩‍💻 Auteur

Projet réalisé par :
Salwa Amzane

Formation :
ENAA - Développement Web Full Stack

📌 Améliorations futures
Sessions utilisateurs réelles
Leaderboard
Notifications
Dashboard Admin
Système de badges
Recherche de tickets
Filtres dynamiques
