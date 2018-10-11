<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 11/10/2018
 * Time: 12:19
 */

try
{
    $connexion = new PDO('mysql:host=localhost;dbname=project-sql-master', 'root','');
}
catch (Exception $e)
{
    die('Erreur :'.$e->getMessage() );
}
$femme = $connexion->query("SELECT * FROM client WHERE gender ='Female' ");

while ($result = $femme->fetch())
{
    echo $result['email'];
    echo "<br>";

}