<?php
function titre(string $content,string $subTitle='',int $level=1): void {
    echo "<h$level>$content</h$level>";
    if($subTitle!=null){
        echo "<p classe='sub-title'>$subTitle</p>";
    }
}

function get(string $key,$defaultValue=null): mixed{
    return $_GET[$key]??$defaultValue;
}
const LOREM_IPSUM_ARRAY=[
    "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", 
    "Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    "It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
    "It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", 
]
/**
 * Retourne le paragraphe avec le smots mélangés
 * @param string $paragraphe
 * @return string 
 */function 
 shufflePara(string $paragraphe) : string{
   $word=explode("",strtolower($paragraphe));    (
    array:$word);
   return ucfirst(implode("",$word));
}
?>