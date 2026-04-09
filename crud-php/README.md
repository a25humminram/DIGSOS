# 🎮 CRUD Videojocs en PHP

Aplicació web CRUD desenvolupada en PHP procedural amb MySQLi per gestionar un catàleg de videojocs. Desplegada al servidor `dam.inspedralbes.cat`.

---

## Descripció

Permet realitzar les quatre operacions bàsiques sobre una base de dades de videojocs:

- **Create** – Afegir nous videojocs mitjançant formulari
- **Read** – Llistar tots els videojocs en format taula
- **Update** – Editar les dades d'un videojoc existent
- **Delete** – Eliminar un videojoc del sistema

---

## Estructura del projecte

```
/crud-php
├── conexion.php      → Connexió a la base de dades
├── index.php         → Redirecció a listar.php
├── listar.php        → Llistat de tots els registres
├── insertar.php      → Formulari i lògica d'inserció
├── editar.php        → Formulari d'edició amb dades precàrregades
├── actualizar.php    → Lògica d'actualització
├── eliminar.php      → Lògica d'eliminació
├── css/
│   └── estils.css    → Estils de l'aplicació
└── README.md
```

---

## Estructura de la base de dades

```sql
CREATE DATABASE IF NOT EXISTS nom_base_de_dades
    CHARACTER SET utf8
    COLLATE utf8_general_ci;

USE nom_base_de_dades;

CREATE TABLE IF NOT EXISTS videojuegos (
    id              INT          NOT NULL AUTO_INCREMENT,
    nom             VARCHAR(100) NOT NULL,
    descripcio      TEXT,
    genere          VARCHAR(50)  NOT NULL,
    any_llancament  YEAR,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

---

## Configuració

1. Clona el repositori al servidor:
   ```bash
   git clone https://github.com/el-teu-usuari/crud-php.git
   ```

2. Edita `conexion.php` amb les teves credencials:
   ```php
   define('DB_HOST', 'dam.inspedralbes.cat');
   define('DB_USER', 'el_teu_usuari');
   define('DB_PASS', 'la_teva_contrasenya');
   define('DB_NAME', 'el_teu_bd');
   ```

3. Executa el `CREATE TABLE` anterior al teu gestor de base de dades (phpMyAdmin o terminal).

---

## Tecnologies

- PHP 8+ procedural
- MySQLi amb consultes preparades
- HTML5 / CSS3
- Servidor: dam.inspedralbes.cat
