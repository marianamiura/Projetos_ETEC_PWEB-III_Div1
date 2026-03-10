<?php
require '../app/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//$json = $_GET["jsn"]; //{"nome":"valor"}
$json = filter_input(INPUT_GET,'jsn');
$data3 = json_decode($json,true);
$data4 = json_decode($json,true);
$login = $data3['login'];
$senha = $data4['senha'];
$sql = "select * from usuarios where usulogin ='$login' and ususenha = MD5($senha);";
$prp = $pdo->prepare($sql);
$prp->execute();
$data = $prp->fetchall(PDO::FETCH_ASSOC);
echo json_encode($data);
//{"nome":"valor"}