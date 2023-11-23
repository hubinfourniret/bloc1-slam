<?php
    require_once './../Fonction/fonction.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Lorem Ipsum</title>
</head>
<body>
    <?=titre("lorem Ipsum generator","sans pub !")?>
    <form method="post">
        <label for="nb">Nombre de paragraphes</label>
        <input type="number" name="count" id="nb" value="<?=$count?>">
</form>
<?php
$loremIpsumarraysize=count(LOREM_IPSUM_ARRAY);
$j=0;
for($i=0;$i<$count;$i++){
    $j=rand(0,$loremIpsumarraysize-1);
    titre("para $i",level:6);
    echo "<div>".LOREM_IPSUM_ARRAY[$j]."</div>";
    
}
?>
</body>
</html>
<?php