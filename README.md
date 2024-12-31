# Système de Gestion des Comptes Bancaires

## Contexte du Projet

L'objectif de ce projet est de développer une application web qui permet de gérer efficacement les différents types de comptes bancaires (compte épargne, compte courant, compte entreprise) en appliquant les principes avancés de la programmation orientée objet (OOP).

## Concepts Fondamentaux de l’OOP en PHP

Ce projet intègre les quatre concepts principaux de l'OOP pour assurer une conception robuste et évolutive :

1. **Encapsulation** :
   - Les données sensibles sont protégées en les déclarant comme privées ou protégées.
   - Des méthodes publiques (getters et setters) permettent de contrôler l'accès et la modification de ces données.

2. **Héritage** :
   - Une classe parent `Account` définit les propriétés et méthodes communes à tous les types de comptes.
   - Les classes enfants (`SavingsAccount`, `CurrentAccount`, `BusinessAccount`) héritent de la classe `Account` et peuvent personnaliser ou étendre ses fonctionnalités.

3. **Polymorphisme** :
   - Les classes enfants peuvent redéfinir les méthodes de la classe parent pour s’adapter à leurs besoins spécifiques.
   - Par exemple, une méthode `calculateInterest()` pourrait être implémentée différemment dans `SavingsAccount` et `CurrentAccount`.

4. **Abstraction** :
   - La classe `Account` peut définir des méthodes abstraites que les classes enfants doivent obligatoirement implémenter.
   - Cela garantit que chaque type de compte implémente les fonctionnalités essentielles, comme l’affichage du solde ou la gestion des transactions.

---

## Fonctionnalités Attendues

### 1. Système CRUD Complet

- Ajouter, consulter, mettre à jour et supprimer des comptes bancaires.

### 2. Utilisation des Concepts de l’OOP

- Structurer les comptes en classes :
  - Une classe parent `Account`.
  - Des classes enfants spécialisées : `SavingsAccount`, `CurrentAccount`, `BusinessAccount`.
- Garantir la sécurité et l’optimisation :
  - Protéger les données grâce à des requêtes SQL préparées et à la validation côté serveur.
  - Minimiser l'utilisation des ressources tout en maximisant les performances.
- Respecter les bonnes pratiques de développement PHP :
  - **DRY** (Don't Repeat Yourself), modularité, conventions de nommage et gestion des erreurs.


---

## Instructions de Configuration et d'Utilisation

### Prérequis

- **PHP** (à partir de la version 7.4).
- **Serveur Apache** avec **MySQL**.
- **Navigateur Web**.

### Installation

1. **Clonez ce dépôt** :
   ```bash
   git clone https://github.com/boukadia/Gestion-Comptes-Bancaires.git
