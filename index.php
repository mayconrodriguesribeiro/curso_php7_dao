<?php

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadById(4);

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//busca um usuario peloparametro informado
//$search = Usuario::search("jo");
//echo json_encode($search);

//busca um login  emostra o usuario dele
//$usuario = new Usuario();
//$usuario->login("segundo","segundo");
//echo $usuario;

//criando um novo usuario...
//$aluno = new Usuario("Segundeiro", "Segundeiro");
//$aluno->insert();
//echo $aluno;

//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("Tercereiro", "Professor");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();
echo $usuario;


?>