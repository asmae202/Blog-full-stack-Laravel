# 📘 Blog Collaboratif - Laravel
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-Template-lightgrey)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=flat&logo=bootstrap&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)
## 📌 Description

Ce projet consiste à développer une application web de type **blog collaboratif** en utilisant le framework **Laravel**, suivant l’architecture **MVC (Modèle - Vue - Contrôleur)**.

L’application permet aux utilisateurs de créer, consulter, modifier et supprimer des articles, ainsi que d’interagir via un système de commentaires.

---

## 🎯 Objectifs du projet

* Comprendre le fonctionnement d’une application web avec Laravel
* Mettre en place un système d’authentification sécurisé
* Implémenter les opérations CRUD (Create, Read, Update, Delete)
* Gérer les relations entre les données (User, Article, Comment)
* Assurer la sécurité avec des règles d’accès (Policies)
* Concevoir une interface utilisateur simple et ergonomique
* Appliquer les bonnes pratiques de développement web

---

## 🛠️ Technologies utilisées

### Backend

* Laravel
* PHP
* MySQL
* Laravel Breeze (authentification)
* Eloquent ORM

### Frontend

* Blade (moteur de templates Laravel)
* Bootstrap 5

---

## ⚙️ Fonctionnalités principales

### 🔐 Authentification

* Inscription
* Connexion
* Déconnexion
* Accès protégé via middleware

### 📝 Gestion des articles

* Création d’un article
* Affichage de la liste des articles
* Consultation du détail d’un article
* Modification d’un article
* Suppression d’un article

### 💬 Système de commentaires

* Ajouter un commentaire
* Afficher les commentaires liés à un article

### 🔒 Sécurité

* Accès limité aux utilisateurs connectés
* Utilisation des **Policies**
* Un utilisateur peut modifier/supprimer uniquement ses propres articles

---

## 🗂️ Architecture du projet

Le projet suit l’architecture **MVC** :

* **Models** : gestion des données (Article, Comment, User)
* **Views** : interface utilisateur avec Blade
* **Controllers** : logique métier

Relations principales :

* Un utilisateur possède plusieurs articles
* Un article possède plusieurs commentaires
* Un commentaire appartient à un utilisateur et à un article

---

## 🖥️ Interface utilisateur

* Layout principal avec navigation
* Pages articles (liste, création, modification, détail)
* Dashboard utilisateur
* Messages de succès et erreurs
* Design responsive avec Bootstrap

---

## 🧪 Tests et validation

Les fonctionnalités suivantes ont été testées :

* Authentification (login / register)
* CRUD des articles
* Ajout de commentaires
* Sécurité des accès (Policies)

---

## 🚀 Lancement du projet

### 1. Installation

```bash
git clone https://github.com/asmae202/Blog-full-stack-Laravel.git
cd blog-laravel
composer install
npm install
```

### 2. Configuration

```bash
cp .env.example .env
php artisan key:generate
```

Configurer la base de données dans `.env`

### 3. Migration

```bash
php artisan migrate
```

### 4. Lancement

```bash
php artisan serve
npm run dev
```

---

## 🌐 Accès à l'application

* Accueil : `/`
* Inscription : `/register`
* Connexion : `/login`
* Dashboard : `/dashboard`
* Articles : `/articles`

---

## 📸 Aperçu du projet


* Page register:
 <img width="945" height="538" alt="image" src="https://github.com/user-attachments/assets/11e3e8ca-54bb-4b0a-b71b-bf382996a432" />

* Login:
 <img width="945" height="809" alt="image" src="https://github.com/user-attachments/assets/e7e01d29-eb42-4f2a-9567-b7eb743d2297" />

* Liste des articles
<img width="945" height="343" alt="image" src="https://github.com/user-attachments/assets/b7c93a12-30f6-4489-88f3-f2df881a4fcb" />


 <img width="945" height="412" alt="image" src="https://github.com/user-attachments/assets/9d203dfe-5d98-4210-9d54-253bbb492e76" />

Creer un article:
<img width="945" height="386" alt="image" src="https://github.com/user-attachments/assets/3ef07bd6-9ceb-42db-98ed-c9a10cb2ffd8" />

* Détail d’un article
<img width="945" height="512" alt="image" src="https://github.com/user-attachments/assets/86245b76-9b58-4eae-b72d-1de566f7b52f" />
 

* Ajout de commentaire

<img width="945" height="558" alt="image" src="https://github.com/user-attachments/assets/7fcbb353-01dd-4ec9-8bd9-d2927e2aa0d0" />


---

## ✅ Résultat

Ce projet permet de :

* Maîtriser Laravel et son architecture MVC
* Comprendre la gestion des utilisateurs et des permissions
* Construire une application web complète et sécurisée

---

## 📎 Auteur

Projet réalisé dans le cadre d’un travail académique.

