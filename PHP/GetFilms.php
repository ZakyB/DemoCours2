
<?php
include 'cnx.php';


$sql = $cnx->prepare("Select codeFilm,nomFilm,imageFilm,genreFilm,nbVotes,totalVotes FROM `film` where `codeFilm` IN
(select `numFilm`FROM `projeter` where `numCine`= ?");
$sql->bindValue(1,$_GET['numCine']);
$sql->execute();

echo "<table border=1   >";
foreach($sql->fetchAll(PDO:: FETCH_ASSOC) as $ligne)
{
    echo "<tr>";
        echo "<td>".$ligne['codeFilm']."</td>";
        echo "<td>".$ligne['nomFilm']."</td>";
        echo "<td><img src='".$ligne['imageFilm']."'></td>";
    echo '</tr>';
}
echo '</table>';
?>