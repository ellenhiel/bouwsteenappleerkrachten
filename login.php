<?php include_once('core/autoload.php');?>
<?php

    session_start();

    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
        header("Location: /bouwsteenappleerkrachten/opdrachten.php");   
    }

    if(isset($_POST["logIn"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(Teacher::canLogin($username, $password)) {
            $_SESSION['username'] = $username;
            $_SESSION['loggedIn'] = true;
            $_SESSION["userId"] = User::getUserIdbyUsername($username);

            header("Location: /bouwsteenappleerkrachten/opdrachten.php?class_id=klas");
        } else {
            $error = "Gebruikersnaam of wachtwoord is fout.";
        }

    }
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Bouwsteen login leerkracht</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <div>
        <img src="images/Final-logo_Bouwsteen.png" alt="logo_bouwsteen">
        <h1>Leerkrachtenplatform</h1>
        <form action="" method="POST">
            <div>
            <label for="username">Gebruikersnaam</label>
            <input type="text" placeholder="voornaamachternaam" name="username" required>
        
            <label for="password">Wachtwoord</label>
            <input type="password" placeholder="*************" name="password" required>
            
            <?php if(isset($error)):?>
                <p style="font-weight: bold; color: red;"><?php echo $error; ?></p>
            <?php endif;?>
            
            <button type="submit" name="logIn">Login</button>
        </div>
        </form>
    </div>
</body>
</html>