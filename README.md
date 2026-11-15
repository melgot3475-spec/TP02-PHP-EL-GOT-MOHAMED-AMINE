# TP 02 - PHP et GitHub

## Informations générales
- **Nom :** El got
- **Prénom :** Mohamed Amine
- **Groupe :** G1
- **Module :** Programmation Web 2 (Année universitaire 2026/2027)
- **Titre du TP :** TP 02 - Bases de PHP et publication sur GitHub

---

## Liste des fichiers et exercices
- `index.php` : Page d'accueil avec liens vers les 10 exercices.
- `ex01.php` : Exercice 1 - Balises, HTML/PHP, commentaires, `echo`.
- `ex02.php` : Exercice 2 - Variables, casse, concaténation, opérateur `.=`.
- `ex03.php` : Exercice 3 - Constantes, calculs, affectation composée (`+=`).
- `ex04.php` : Exercice 4 - Types de données (`int`, `float`, `string`, `bool`, `null`) et conversions.
- `ex05.php` : Exercice 5 - Structures conditionnelles (`if`, `elseif`, `else`) et opérateurs de comparaison.
- `ex06.php` : Exercice 6 - Structure `switch` et fonction `date()`.
- `ex07.php` : Exercice 7 - Boucles `for`, compteur et boucles imbriquées.
- `ex08.php` : Exercice 8 - Boucles `while`, `do-while`, `continue` et `break`.
- `ex09.php` : Exercice 9 - Tableaux associatifs, `foreach`, calculs de somme, moyenne et maximum.
- `ex10_get.html` & `ex10_get.php` : Exercice 10 (Partie A & C) - Formulaire et traitement sécurisé via la méthode `GET`.
- `ex10_post.html` & `ex10_post.php` : Exercice 10 (Partie B & C) - Formulaire et traitement sécurisé via la méthode `POST`.

---

## Instructions d'exécution en local
Pour exécuter ce projet localement :
1. Ouvrir un terminal à la racine du dossier du dépôt.
2. Démarrer le serveur interne PHP avec la commande :
   ```bash
   php -S localhost:8000
   ```
   *(Sous Windows avec XAMPP si PHP n'est pas dans le PATH : `& "C:\xampp\php\php.exe" -S localhost:8000`)*
3. Ouvrir le navigateur à l'adresse : [http://localhost:8000/index.php](http://localhost:8000/index.php)
4. Pour arrêter le serveur : appuyer sur `Ctrl + C` dans le terminal.

---

## Réponses aux questions théoriques du TP

### Exercice 2 : Casse et validité des noms de variables
1. **Pourquoi `$note` et `$Note` sont différentes ?**
   En PHP, les noms de variables sont **sensibles à la casse** (*case-sensitive*). La lettre minuscule `n` et la lettre majuscule `N` ont des codes ASCII distincts, donc PHP traite `$note` et `$Note` comme deux emplacements mémoire totalement indépendants.
2. **Identification des noms de variables valides et invalides :**
   Règle en PHP : un nom de variable commence par `$` suivi obligatoirement d'une lettre ou d'un tiret bas (`_`), puis peut contenir des lettres, des chiffres ou des tirets bas (aucun caractère spécial comme `!`).
   - `$a` : **Valide**
   - `$_a` : **Valide** (commence par un underscore)
   - `$a_a` : **Valide**
   - `$AAA` : **Valide**
   - `$a!` : **Invalide** (contient le caractère spécial `!` interdit)
   - `$1a` : **Invalide** (commence par un chiffre directement après `$`)
   - `$a1` : **Valide** (le chiffre est placé après la première lettre)

### Exercice 4 : Différence d'affichage de `false` entre `echo` et `var_dump()`
- Avec **`echo false;`** : PHP convertit la valeur booléenne `false` en une **chaîne de caractères vide** (`""`). Par conséquent, rien ne s'affiche à l'écran (contrairement à `echo true;` qui affiche `"1"`).
- Avec **`var_dump(false);`** : Cette fonction de débogage affiche explicitement le **type** et la **valeur** exacte de l'expression, soit `bool(false)`. C'est indispensable pour distinguer `false`, `null` et `""` lors du débogage.

### Exercice 5 : Valeurs testées et messages obtenus
| Valeur de `$moyenne` testée | Message obtenu |
| :--- | :--- |
| `-1` | Note invalide |
| `9` | Non validé |
| `10` | Passable |
| `12` | Assez bien |
| `14` | Bien |
| `16` | Très bien |
| `21` | Note invalide |

### Exercice 10 : Observation et comparaison des URLs (`GET` vs `POST`)
- **Avec la méthode `GET` (`ex10_get.php`) :** Après soumission du formulaire, les valeurs saisies apparaissent **en clair directement dans la barre d'adresse (URL)** après le point d'interrogation `?`, séparées par `&` (la *query string*). Exemple : `http://localhost:8000/ex10_get.php?nom=El+got&prenom=Mohamed+Amine&groupe=G1`.
- **Avec la méthode `POST` (`ex10_post.php`) :** Après soumission, l'URL dans la barre d'adresse reste simplement `http://localhost:8000/ex10_post.php`. Les données ne sont **pas visibles dans l'URL** car elles sont transmises dans le corps (*body*) de la requête HTTP.
