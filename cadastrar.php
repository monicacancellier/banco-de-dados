<?php																									
require_once 'CLASSES/usuarios.php';																									
$u = new usuario;																									
?>																									
<html lang="pt-br">																									
<head>																									
<meta charset="utf-8"/>																									
<title>personalize</title>																									
<link rel="stylesheet" href="CSS/estilo.css">																									
</head>																									
<!--INICIO DO CSS-->																									
<style>*{																									
margin: 0px;																									
padding: 0px;																									
}																									
body{																									
background-image: url("https://www.pleion.com.br/blog/wp-content/uploads/shutterstock_1274741653.jpg");																									
background-size: cover;																									
background-position: 50% 70%;																									
color: white;																									
font-family: arial;																									
}																									
input{																									
display: block;																									
height: 55px;																									
width: 400px;																									
margin: 10px;																									
border-radius: 30px;																									
border: 1px solid black;																									
font-size: 16px;																									
padding: 10px 20px;																									
}																									
div#corpo-form{																									
width: 420px;																									
margin: 150px auto 0px auto;																									
}																									
div#corpo-form h1{																									
text-align: center;																									
padding: 20px;																									
}																									
a{																									
color: white;																									
text-decoration: none;																									
text-align: center;																									
display: block;																									
}																									
a:hover{																									
text-decoration: underline;																									
}																									
input[type=submit]{																									
background-color: pink;																									
border: none;																									
cursor: pointer;																									
}																									
div#corpo-form-cad{																									
text-align: center;																									
margin: 150px auto 0px auto;																									
width: 420px;																									
padding: 20px;																									
}																									
::-webkit-input-placeholder{																									
color: black;																									
}																									
:-moz-placeholder{																									
color: black;																									
}																									
::-moz-placeholder{																									
color: black;																									
}																									
div#msg-sucesso{																									
width: 400px;																									
margin: 10px auto;																									
padding: 10px;																									
background-color: rgba(50,205,50,.3);																									
border: 1px solid rgb(34,139,34);																									
}																									
div#msg-erro{																									
width: 400px;																									
margin: 10px auto;																									
padding: 10px;																									
background-color: rgba(250,128,114,.3);																									
border: 1px solid rgb(165,42,42);																									
}																									
</style>																									
<!--FIM DO CSS-->																									
<body>																									
<div id="corpo-form-cad">																									
<h2>cadastrar</h2>																									
<form method="post">																									
<input type= "text" name="nome" placeholder="Nome completo" maxlength="30">																									
<input type= "text" name="telefone" placeholder="Telefone" maxlength="30">																									
<input type= "email" name="email" placeholder="Usuário" maxlength="40">																									
<input type= "password" name="senha" placeholder="Senha" maxlength="15">																									
<input type= "password" name="confsenha" placeholder="Confirme a senha">																									
<input type= "submit" value="Cadastrar">																									
<a href="index.php"><strong> ACESSAR</strong>																									
</form>																									
</div>																									
<?php																									
//verificar se clicou no botão cadastrar																									
if(isset($_POST['nome']))																									
{																									
$nome = addslashes($_POST['nome']);																									
$telefone = addslashes($_POST['telefone']);																									
$email = addslashes($_POST['email']);																									
$senha = addslashes($_POST['senha']); //instuções em 11:36 no vídeo 4																									
$confirmarSenha = addslashes($_POST['confsenha']);																									
//verificar se não esta vazio																									
if(!empty($nome) && !empty($telefone) && !empty($email) &&																									
!empty($senha) && !empty($confirmarSenha))																									
{																									
//O nome utilizado abaixo deve ser o mesmo ao criar seu SQL nos campos create database e use																									
$u->conectar("heitor","localhost","root","");																									
if($u->msgErro == "") //não possui erro																									
if($senha == $confirmarSenha)																									
{																									
if($u->Cadastrar($nome,$telefone,$email,$senha))																									
{																									
?>																									
<div id="msg-sucesso">																									
Cadastrado com sucesso! Acesse para entrar!																									
</div>																									
<?php																									
}																									
else																									
{																									
?>																									
<div class="msg-erro">																									
Email já cadastrado!																									
</div>																									
<?php																									
}																									
}																									
else {																									
?>																									
<div class="msg-erro">																									
Senha e confirmar senha não correspondem!																									
</div>																									
<?php																									
}																									
else {																									
?>																									
<div class="msg-erro">																									
<?php echo "Erro: ".$u->msgErro;?>																									
</div>																									
<?php																									
}																									
}																									
else																									
{																									
?>																									
<div class="msg-erro">																									
Preencha todos os campos!																									
</div>																									
<?php																									
}																									
}																									
?>																									
</body>																									
</html>																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									

