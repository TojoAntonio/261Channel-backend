<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(! function_exists('stringToTab')){
    function stringToTab($p){
        if(strlen($p)>0){
            $tab=explode(",",$p);
            $res=array();
            $i=0;
            foreach($tab as $ligne){
                $res[$i]=intval($ligne);
                $i++;
            }
            return $res;
        }
        else echo("Erreur: la taille de la chaine a parser est incorrecte");
    }
}

if(! function_exists('tabToString')){
    function tabToString($p){
        if(count($p)>0){
            $res="";
            for($i=0;$i<count($p);$i++){
                $res.=$p[$i];
                if($i!=(count($p)-1)) $res.=",";
            }
            return $res;
        }
        else echo("Erreur: la taille du tableau a parser est incorrecte");
    }
}

if(! function_exists('erreur')){
    function erreur($mes){
        echo "
        <html>
            <head>
                <title>".$mes."</title>
            </head>
            <body>
                <h2>".$mes."</h2>
                <a href='javascript:history.go(-1)'>Retour</a>
            </body>
        </html>
        ";
    }
}


if(! function_exists('test_code')){
    function test_code($mes){
        echo '
        <html>
            <head>
                <title>Test code</title>
            </head>
            <body>
                <h2>Test code</h2>
                <div>'.htmlentities($mes).'</div><br/>
                <a href="javascript:history.go(-1)">Retour</a>
            </body>
        </html>
        ';
    }
}