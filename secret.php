
    <!DOCTYPE html>
<html>

<head>
    <title>Page secrète</title>
    <meta charset="utf-8" />
</head>

<body>
    
    
<?php 
    if (isset($_POST['mdp']) AND $_POST['mdp'] == "kangourou") 
    { 
    ?>
    <p> Bravo ! C'est le bon mot de passe. </p>
    <?php
    }
    else 
    {
        echo '<p>C\'est le mauvais mot de passe. Pour recommencer clique <a href="formulaire.php">ICI</a> .</p>';
    }
    ?>

</body>

</html>
