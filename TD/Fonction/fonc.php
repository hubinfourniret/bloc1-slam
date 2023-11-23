<?php
function( int $rows,int): string {
    $html='<table>';
    for($i=o;$i<$rows;$i++){
        $html.='<tr>';
        $html.= str_repeat("<td>$defaultValue</td>",$cols);
        $html.='</tr>';
    }
    $html.='</table>;
}