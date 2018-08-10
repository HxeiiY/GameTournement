<?php

// Prise des elements du formulaire
$Login = $_POST['PseudoLog'];
    // var_dump($Login);
$Mdp = $_POST['MdpLog'];
    // var_dump($Mdp);
    
// Connection à la base de donnée 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=GameTournement', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Vérifie si le Pseudo & le mot de passe sont dans la base de donnée 
$requete = $bdd->prepare("SELECT * FROM Utilisateurs WHERE UT_Login =  ?");
$requete->execute([$Login]);
//$resulat = $requete->fetchAll();

echo '<pre>';
$resultat = $requete->fetchAll();
echo '</pre>';

//Si y'a un retour de la base de donnée
if (sizeof($resultat) > 0 && $Mdp == $resultat[0]['UT_Mdp']) {
    if ($resultat[0]['UT_Role'] == 'administrator') {
            // Si l'utilisateur est administrateur
        header('Location: ../VIEWS/AdminPage.html');
    } else {
            // Si l'utilisateur est un User
        header('Location:../VIEWS/UserPage.html');
    }
} else {
        // Element incorrect dans le formulaire
        header('Location: ../VIEWS/Homepage.php?error=error');
        // header('Location: ../VIEWS/Homepage.html');
}



?> 