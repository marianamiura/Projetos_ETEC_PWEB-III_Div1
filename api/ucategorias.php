<?php
require '../app/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$json = filter_input(INPUT_GET, 'jsn');
$data = json_decode($json, true);
$id = $data['id'];
$nome = $data['nome'];
$ativo = $data['ativo'];
$sql = "update categorias set catnome = ?, catativo = ? where catid = ?;";
$prp = $pdo->prepare($sql);
$prp->execute([$nome, $ativo, $id]);

Conexao::desconectar();
//{"id":"valor","nome":"valor","login":"valor","senha":"valor"}
//http://localhost/Projetos_ETEC_PWEB-III_Div1/api/uusuario.php?jsn={"id":"5","nome":"JOÃO CARLOS DE SOUZA","login":"JOCA","senha":""}