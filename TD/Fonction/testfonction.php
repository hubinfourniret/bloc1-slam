<?php
include "fonction.php";
titre("Titre de niveau 1",1);
titre("Titre de niveau 2",level:2);
titre("Titre de niveau 2","avec subtitle",level:2);
echo get('page',false);