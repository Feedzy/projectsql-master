<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 11/10/2018
 * Time: 16:36
 */

try
{
    $connexion = new PDO('mysql:host=localhost;dbname=project-sql-master', 'root','');
}
catch (Exception $e)
{
    die('Erreur :'.$e->getMessage() );
}

$requette = $connexion->query("SELECT * FROM etudiant ");