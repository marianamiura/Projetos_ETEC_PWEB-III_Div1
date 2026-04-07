<?php
require '../app/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$json = filter_input(INPUT_GET,'jsn');
$data = json_decode($json,true);
$nome = $data['nome'];
$ativo = $data['ativo'];
$sql = "insert into categorias (catnome, catativo) values (?,?);";
$prp = $pdo->prepare($sql);
$prp->execute([$nome,$ativo]);
Conexao::desconectar();
//http://localhost/Projetos_ETEC_PWEB-III_Div1/api/icategorias.php?jsn={"nome":"Bebidas","ativo":"1"}