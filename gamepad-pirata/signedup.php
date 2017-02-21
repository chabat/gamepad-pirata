<?php
    include("./php/showerrors.php");
    include("./php/dbconnect.php");

    /*
    $var1 = "INSERT INTO customer VALUES";
    $var2 = "(1,'a','netinhodrift@hotmail.com',2,'banana', 'rua dos gato preto','BAIRRO','general carneiro', 'paraná')";
    $res = pg_query($con,$var1.$var2);
    if(!$res) ECHO "FUDEEEEU";
    */
    $_sql1 = "INSERT INTO customer VALUES";
    $_sql2 = "(".$_POST['cpf'].","."'".$_POST['name']."'".","."'".$_POST['email']
            ."'".",".$_POST['phone'].","."'".$_POST['psw']."'".","."'".
            $_POST['street']."'".","."'".$_POST['neighb']."'".","."'".
            $_POST['city']."'".","."'".$_POST['state']."'".")";
    $res = pg_query($con, $_sql1.$_sql2);
    if(!$res){
        echo "DEU RUIM";
        echo $_sql1.$sql2;
    }
    //$user = $_POST['name'];
    else header('Location: index.php');
 ?>
