<?php

// Créatin d'une session - Enregistrement de l'utilisateur - Enregistrement du Cookie
session_start();

// $_SESSION['Utilisateur'] = $Login;
// setcookie('Login', $Login , time() + 365*24*3600, null, null, false, true);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <!-- JS & CSS JQUERY -->
    <script src="../TOOLS/JQUERY/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="../TOOLS/JQUERY/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <!-- Boostrap Local -->
    <script src="/TOOLS/BOOSTRAP-4.1/bootstrap.js"></script>
    <link rel="stylesheet" href="../TOOLS/BOOSTRAP-4.1/bootstrap.css">

    <!-- Boostrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <!-- Homepage CSS -->
    <link rel="stylesheet" href="../TOOLS/CSS/Homepage.css">

    <title>GameTournement</title>
</head>

<body>
        <h1>Bienvenue sur GameTournement</h1>
    <div class="container">
        <div class="row">
            <div class="col" id="Desc">
                <span>GameTournement est un site communautaire ou tu peux défier les joueurs du monde entier dans des Tournois
                    ou Compétition</span>
            </div>
            <div class="col">
                <form method="POST" action="../CONTROLLER/FormulaireVerif.php">
                    <div class="form-group">
                        <label>Pseudo</label>
                        <input type="text" class="form-control" name="PseudoLog"  placeholder="Entre ton Pseudo">
                        <small class="form-text text-muted">Tes données sont gardées entre de bonnes mains</small>
                    </div>
                    <div class="form-group">
                        <label>Mot de passe </label>
                        <input type="password" class="form-control" name="MdpLog" placeholder="Mot de Passe">
                    </div>
                    <!-- Systeme de Remember à faire plus tard-->
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="RememberCheck">
                        <label class="form-check-label">Je me souviendrai de toi</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                    <?php
                        if(isset($_GET['error']))
                        {
                            $errorLog = "<br><br><div id='ErrorMessage'>Je crois que tu tes trompé l'ami(e) </div>";
                            echo($errorLog);
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>