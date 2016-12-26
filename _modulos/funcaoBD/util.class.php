<?php

    function formatadatatela($data) //formata a qualquer data do sistema para o formato do usuario
    {
       $data = explode('-',$data);
       $data = $data[2].'/'.$data[1].'/'.$data[0];
        return $data;
    }


    function formatadatabanco($data) //formata a qualquer data do sistema para o formato do bamdp
    {
       $data = explode('/',$data);
       $data = $data[2].'-'.$data[1].'-'.$data[0];
        return $data;
    }

?>