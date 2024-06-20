<?php

    include_once('Conexao.php');

    if(isset($_GET['token'])){
        
        $Token=$_GET['token'];
        $CRM=$_GET['crm'];

        if($Token=='123'){
            $SQL="SELECT * FROM crm WHERE crm='$CRM' LIMIT 1";
            $Requisicao=mysqli_query($mysqli,$SQL);
            $Valores=$Requisicao->fetch_assoc();
            echo json_encode($Valores);
        }
    }
?>