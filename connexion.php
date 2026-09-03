<?php

require_once 'includes/auth.php';

?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Brussels Top Team</title>

```
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
