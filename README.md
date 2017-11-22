# Projet garage

# Définition
Le garage représente un... garage

* Nom (string 100)
* Marque (string 50)

# Sitemap

![](/reference/sitemap-crud-demo.png)

# CRUD

## Create

### Formulaire
GET /add.php

### Ajout dans la base de données
```sql
INSERT INTO `garage` (`nom`, `marque`) VALUES ('Stephane', 'Renault');
```
POST /doadd.php

## Read

### Lister
```sql
SELECT `id`, `nom`, `marque` FROM `garage`;
```
GET /index.php

### Visualiser les détails
```sql
SELECT `id`, `nom`, `marque` FROM `garage` WHERE id = 1;
```
GET /details.php?id=:id

## Update

### Formulaire
GET /edit.php?id=:id

### Modifier les données dans la base
```sql
UPDATE `garage` SET `marque` = "Chevrolet" WHERE id = 2;
``` 
POST /doedit.php

## Delete

### demande de confirmation
GET /delete.php?id=:id

### Effacer dans la base
```sql
DELETE FROM `garage` WHERE id = 2;
```
POST /dodelete.php
