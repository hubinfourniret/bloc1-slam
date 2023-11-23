<?php

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Lorem Ipsum</title>
</head>
<?php
    $nbCols=post("colonnes",defaultValue:5);
    $nbLignes=post("lignes",defaultValue:5);
?>
<form>
<label for="colonnes">Nombre de colonnes :</label><input type="number" id="colonnes" name="para"><br>
<label for="lignes">Nombre de lignes :</label><input type="number" id="lignes" name="lignes"><br>
<input type="submit" value="Envoyer">
</form>