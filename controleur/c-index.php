<?php
require_once( dirname(__FILE__).'/../modele/m-index.php');

global $valeur_input;
global $valeur_operand;
/* Action après clic sur une opérande */
if(isset($_POST["valeur_input"])&& isset($_POST["valeur_operand"])){
    $valeur_input = $_POST["valeur_input"];
    $valeur_operand = $_POST["valeur_operand"];
    
    
    $calc = new controllerCalc();
    $r = $calc->calculate($valeur_input, $valeur_operand);
    
    echo($r);
   
}

//Reinitialisation de la BDD
if(isset($_GET["clear"])){
    modelCalc::clearResult();
    
}


//Classe du Controller
class controllerCalc{
    public $input;
    public $operand;
   
    public function calculate($in,$op){
        if($op=="+"){
            $obj_req = new modelCalc();
            $obj_find = $obj_req->getResultat();
            $result = $obj_find['resultat']+$in;
            
            modelCalc::saveResult($result);
            
            return $result;
            
        }
        if($op=="-"){
            $obj_req = new modelCalc();
            $obj_find = $obj_req->getResultat();
            $result = $obj_find['resultat']-$in;
            
            modelCalc::saveResult($result);
            
            return $result;
        
        }
        if($op=="*"){
            $obj_req = new modelCalc();
            $obj_find = $obj_req->getResultat();
            $result = $obj_find['resultat']*$in;
            
            modelCalc::saveResult($result);
            
            return $result;
        
        }
        if($op=="/"){
            $obj_req = new modelCalc();
            $obj_find = $obj_req->getResultat();
            $result = $obj_find['resultat']/$in;
            
            modelCalc::saveResult($result);
            
            return $result;
        
        }
    }
}




