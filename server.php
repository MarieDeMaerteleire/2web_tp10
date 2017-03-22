<?php
/**
 * Created by PhpStorm.
 * User: riima
 * Date: 22/03/2017
 * Time: 15:38
 */
define("USER", 'root');
define("PASSWORD", 'root');
define("DSN", 'mysql:host=localhost;port=8889;dbname=example');

try {
    $pdo = new PDO(DSN, USER, PASSWORD);
} catch (PDOException $e) {
    die("Error ! : " . $e->getMessage());
}
$sql1 = "INSERT INTO users (FirstName, LastName, id, NickName) 
			    VALUES ('john', 'doe', 1, 'Plop')";
$pdo->exec($sql1);


$sql = "SELECT FirstName,LastName, id, NickName FROM users";

$sth = $pdo->query($sql);
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
print_r($result);


unset($pdo);



?>