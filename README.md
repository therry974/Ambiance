
# Jeu de la Roue - Calendrier de l'Avent

## Description
Un jeu où les utilisateurs s'inscrivent pour tourner une roue et découvrir s'ils ont gagné un prix. Chaque utilisateur peut jouer une fois par jour.

## Installation
1. Placez les fichiers dans le dossier `htdocs` de XAMPP.
2. Créez une base de données `calendrier_avent` avec les tables `users` et `plays`.

## Tables SQL
### Table `users`
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Table `plays`
```sql
CREATE TABLE plays (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ip_address VARCHAR(45),
    play_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Utilisation
1. Accédez à `http://localhost/calendrier_avent/index.html`.
2. Inscrivez-vous pour jouer.
3. La roue s'affiche et vous pouvez la tourner une fois par jour.
    