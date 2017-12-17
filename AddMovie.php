<?php
/**
 * Created by PhpStorm.
 * User: Ditte
 * Date: 06-11-2017
 * Time: 14:25
 */
include 'data.php';
include 'Movie.php';

function AddData(){
    $n1= $_POST["name"];
    $g1= $_POST["genre"];
    $pt1= $_POST["playtime"];

    $newMov = new Movie();
    $newMov->name = $n1;
    $newMov->genre = $g1;
    $newMov->playtime = $pt1;

    AddMovie($newMov);
}
?>

<html>
<body>

Navn: <?php echo $_POST["name"];?><br>
Genre: <?php echo $_POST["genre"];?><br>
PlayTime: <?php echo $_POST["playtime"];?><br>

</body>
</html>
