<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 11/10/2018
 * Time: 13:08
 */
try
{
    $connexion = new PDO('mysql:host=localhost;dbname=project-sql-master', 'root' , '');
}
catch(Exception $e)
{
    echo"Message erreur =>".$e->getMessage();
}

   $age=$connexion->query("SELECT id,first_name,DATEDIFF(CURRENT_DATE , birth_date)/365 as age FROM client");

   while($reponse = $age->fetch())
   {
        echo htmlspecialchars($reponse['id']).'<br>';
        echo htmlspecialchars($reponse['first_name']).'<br>';
        echo intval($reponse['age']).' ans  <br>';
                     
   }