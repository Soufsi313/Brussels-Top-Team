<?php

/*
|--------------------------------------------------------------------------
| FICHIERS NÉCESSAIRES
|--------------------------------------------------------------------------
*/

require_once 'includes/auth.php';
require_once 'includes/database.php';


/*
|--------------------------------------------------------------------------
| VARIABLES
|--------------------------------------------------------------------------
*/

$erreur = '';


/*
|--------------------------------------------------------------------------
| TRAITEMENT DU FORMULAIRE DE CONNEXION
|--------------------------------------------------------------------------
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupération des données envoyées par le formulaire
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];


    /*
    |--------------------------------------------------------------------------
    | RECHERCHE DE L'ADHÉRENT
    |--------------------------------------------------------------------------
    */

    $requete = $pdo->prepare("
        SELECT *
        FROM adherents
        WHERE email = :email
    ");

    $requete->execute([
        'email' => $email
    ]);

    $adherent = $requete->fetch(PDO::FETCH_ASSOC);


    /*
    |--------------------------------------------------------------------------
    | VÉRIFICATION DU MOT DE PASSE
    |--------------------------------------------------------------------------
    */

    if ($adherent && password_verify($mot_de_passe, $adherent['mot_de_passe'])) {

        /*
        |--------------------------------------------------------------------------
        | CRÉATION DE LA SESSION UTILISATEUR
        |--------------------------------------------------------------------------
        */

        $_SESSION['adherent_id'] = $adherent['id'];
        $_SESSION['nom'] = $adherent['nom'];
        $_SESSION['prenom'] = $adherent['prenom'];
        $_SESSION['email'] = $adherent['email'];
        $_SESSION['role'] = $adherent['role'];

    } else {

        $erreur = 'Adresse e-mail ou mot de passe incorrect.';
    }
}

?>

<!DOCTYPE html>

<html lang="fr">

<head>

```
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Connexion - Brussels Top Team</title>

<link rel="stylesheet" href="css/style.css">
```

</head>

<body>

```
<?php require_once 'includes/header.php'; ?>


<main class="login-page">

    <div class="login-container">

        <div class="login-header">

            <p class="section-subtitle">ESPACE MEMBRE</p>

            <h1>Connexion</h1>

        </div>


        <?php if ($erreur !== ''): ?>

            <p>
                <?= htmlspecialchars($erreur) ?>
            </p>

        <?php endif; ?>


        <form method="POST" class="login-form">

            <div class="form-group">

                <label for="email">Adresse e-mail</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                >

            </div>


            <div class="form-group">

                <label for="mot_de_passe">Mot de passe</label>

                <input
                    type="password"
                    id="mot_de_passe"
                    name="mot_de_passe"
                    required
                >

            </div>


            <button type="submit" class="login-submit">
                Se connecter
            </button>

        </form>

    </div>

</main>


<?php require_once 'includes/footer.php'; ?>
```

</body>

</html>
