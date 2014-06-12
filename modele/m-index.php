<?php
require(dirname(__FILE__)."\configuration.php");

class modelCalc{
    public $input;
    
    public function getResultat(){
        global $link;
        if(isset($link)){
            $sql = "SELECT resultat FROM resultat WHERE id=1";
            $req = mysqli_query($link,$sql);
            $res=mysqli_fetch_assoc($req);
            
            return $res;
            mysqli_free_result($res);
        }
        
        else echo "Pbm Link";

    }
    
    public function saveResult($val){
        global $link;
        $sql = "UPDATE resultat SET id=1, resultat='".$val."' WHERE id=1";
        mysqli_query($link, $sql) or die(mysqli_error($link));
    }
    
    public function clearResult(){
        global $link;
        $sql =  "UPDATE resultat SET id=1, resultat=0 WHERE id=1";
        mysqli_query($link, $sql) or die(mysqli_error($link));
    }
}


