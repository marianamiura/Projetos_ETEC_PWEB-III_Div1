<?php
require '../app/conexao.php';

$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$json = filter_input(INPUT_GET, 'jsn');
$data = json_decode($json, true);

$nome  = $data['nome'];
$login = $data['login'];
$senha = $data['senha'];
$id = $data['id'];     

if (!empty($data['senha'])){
    $sql = "UPDATE usuarios SET usunome = ?, usulogin = ?, ususenha = MD5(?) WHERE usuid = ? ;";
    $prp = $pdo->prepare($sql);
    $prp->execute(array($nome, $login, $senha, $id));

} 
else{
    $sql = "UPDATE usuarios SET usunome = ?, usulogin = ? WHERE usuid = ? ;";
    $prp = $pdo->prepare($sql);
    $prp->execute(array($nome, $login, $id));
}

Conexao::desconectar();

//localhost/Projetos_ETEC_PWEB-III_Div1/uusuario.php?jsn={"nome":"Joao","login":"joao123","senha":"123456","id"="1"}
?>
