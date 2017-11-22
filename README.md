# Projet garage

# Définition
Le garage représente un... garage

* Nom (string 100)
* Marque (string 50)

# CRUD

## Create

### Formulaire

### Ajout dans la base de données
```sql
INSERT INTO `garage` (`nom`, `marque`) VALUES ('Stephane', 'Renault');
```

## Read

### Lister
```sql
SELECT `id`, `nom`, `marque` FROM `garage`;
```

### Visualiser les détails
```sql
SELECT `id`, `nom`, `marque` FROM `garage` WHERE id = 1;
```

## Update

### Formulaire

### Modifier les données dans la base
```sql
UPDATE `garage` SET `marque` = "Chevrolet" WHERE id = 2;
``` 

## Delete

### demande de confirmation

### Effacer dans la base
```sql
DELETE FROM `garage` WHERE id = 2;
```

