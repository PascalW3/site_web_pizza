<?php include_once "../private/src/views/layout/header.php"; ?>
page d'inscription
<?php include_once "../private/src/views/layout/footer.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register-form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <form method="post" class="container" novalidate>
        <div class="row">
            <div class="col-4 offset-4">
            
                <!-- Champ Prénom -->
                <div class="form-group">
                    <input class="form-control" type="text" name="firstname" placeholder="Votre Prénom" value="<?= $firstname ?>">
                </div>

                <!-- Champ NOM -->
                <div class="form-group">
                    <input class="form-control" type="text" name="lastname" placeholder="Votre Nom" value="<?= $lastname ?>">
                </div>

                <!-- Champ Email -->
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Votre adresse email" value="<?= $email ?>">
                </div>

                <!-- Champ Mot de passe -->
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Votre nouveau mot de passe">
                </div>

                <button class="btn btn-success btn-block">Valider</button>

                <a href="login.php">J'ai deja un compte</a>

            </div>
        </div>
    </form>

</body>
</html>