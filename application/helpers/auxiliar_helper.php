<?php

/* função para formatar uma data no formato pt/br */
function formataData( $data){

    if($data){

        $data = str_replace("-", "/", $data);
        return date('d/m/Y', strtotime($data));
    
    } else return "";
}


?>