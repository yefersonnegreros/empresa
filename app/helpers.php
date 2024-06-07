<?php

    if(! function_exists('setActivo')){
        function setActivo($ruta){
            return request()->routeIs($ruta) ? 'active' : '' ; 
        }
    }

?>