<?php
use Illuminate\Support\Str;
    
    if (!function_exists('setActivo')) {
        function setActivo($ruta)
        {
            $currentRoute = request()->route()->getName();
            $baseRoute = explode('.', $ruta)[0]; 
    
            return Str::startsWith($currentRoute, $baseRoute) ? 'active' : '';
        }
    }
?>