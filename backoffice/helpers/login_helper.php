<?php

function logar($username, $password){

    $acessos = selectSQL("SELECT * FROM acessos");

    foreach($acessos as $a){
        if($a["username"] == $username){
            if($password == $a["password"]){
                session_start();
                $_SESSION["user"] = $a;
                $_SESSION["password"] = $a["password"];
                $_SESSION["id"] = $a["id"];
                unset($_SESSION["user"]["password"]);
                setDataUltimoAcesso($a["id"]);
                
                return true;
            }else{
                return false;
            }
        }
    }
    return false;

}

function verificarEstaLogado(){

    session_start();

    if(!empty($_SESSION["user"])){
        return true;
    }else{
        header("Location: index.php");
        exit();
    }

    

}

function logout(){

    session_start();
    session_destroy();

}

function verificarLogado(){

    session_start();
    if(!empty($_SESSION["user"])){
        return true;
    }else{
        return false;
    }


}

function getDataActual(){

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("h:i:s - d/m/Y");
    return $data_atual;
}

function setDataUltimoAcesso($id){

    $ultimo_acesso = getDataActual();
    iduSQL("UPDATE acessos SET ultimo_acesso='$ultimo_acesso' WHERE id='$id'");

}

?>