<?php
/**
 * Created by PhpStorm.
 * User: riima
 * Date: 22/03/2017
 * Time: 15:38
 */
define("USER", 'root');
define("PASSWORD", 'root');
define("DSN", 'mysql:host=localhost;port=8889;dbname=dblogin');


function login(){
    try {
        $pdo = new PDO(DSN, USER, PASSWORD);
    } catch (PDOException $e) {
        die("Error ! : " . $e->getMessage());
    }

    $sql = "SELECT username, password FROM users";

    $sth = $pdo->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);


    if(isset($_POST['username'])) {
        for( $i = 0; $i < sizeof($result); $i++){
            if ($result[$i]['username'] == $_POST['username'] && ($result[$i]['password'] == $_POST['password'])) {
                $_SESSION['username'] = $_POST['username'];
            }
        }
    }
}
session_start();
login();
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <link href="css/main.css" media="all" rel="stylesheet" type="text/css" />

</head>
<body>
<h1>LOGIN PAGE</h1>

<form id="form" class="col s6"  action="server.php" method="POST">
    <div class="input-field col s6">
        <input type="text" name="username" value="">
        <label for="username">Username</label>
    </div>
    <div class="input-field col s6">
        <input id="password" type="password" class="validate" name="password" value="">
        <label for="password">Password</label>
    </div>

    <button class="btn waves-effect waves-light" type="submit" name="submit" value="Login">LOGIN
        <i class="material-icons right">send</i>
    </button>
    <?php if($_SESSION['username']): ?>
        <p>WELCOME MY FRIEND</p>
        <p>You are logged in as <?=$_SESSION['username']?></p>
        <button href="?logout=1" class="btn waves-effect waves-light" type="submit" name="submit" value="Logout">LOGOUT
            <i class="material-icons right">send</i>
        </button>
    <?php endif; ?>
</form>
</body>

