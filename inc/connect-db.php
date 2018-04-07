<?php
/* ------------------------------------------------------------------------
Crée le 07/04/2018 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'connect-db.php',  Connexion a la base de donnée de l'entreprise
---------------------------------------------------------------------------
L'utilisateur :

---------------------------------------------------------------------------

L'administrateur :

------------------------------------------------------------------------ */

$host='localhost';
$bd='world';
$login='root';
$password='sio';


$pdo = new PDO('mysql:host='.$host.'; dbname='.$bd, $login, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
