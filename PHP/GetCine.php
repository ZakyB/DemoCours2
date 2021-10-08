<?php
include 'cnx.php';

$sql = $cnx->prepare("Select codeCine, nomCine,adresseCine,codePostalCine,villeCine,imageCine from cinema");
$sql->execute();

echo "<table border=1   >";
foreach($sql->fetchAll(PDO:: FETCH_ASSOC) as $ligne)
{
    echo "<tr onclick='GetFilms(".$ligne['codeCine'].")'>";
        echo "<td>".$ligne['codeCine']."</td>";
        echo "<td>".$ligne['nomCine']."</td>";
        echo "<td><img src='".$ligne['imageCine']."'></td>";
        echo "<td>".$ligne['adresseCine'].",".$ligne['villeCine'].$ligne['codePostalCine']."</td>";
    echo '</tr>';
}
echo '</table>';
?>