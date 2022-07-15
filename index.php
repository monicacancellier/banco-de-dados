<?php																									
require_once 'CLASSES/usuarios.php';																									
$u = new Usuario;																									
?>																									
<html>																									
<html lang=”pt-br”>																									
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
background-image: url("  https://www.pleion.com.br/blog/wp-content/uploads/shutterstock_1274741653.jpg   ");																									
background-size: cover;																									
background-position: 50% 70%;	
/* abaixo definimos a cor do texto na pagina inicial */																								
color: red;																									
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
background-color: #ff0087;																									
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
<div id="corpo-form">																									
<h1>Entrar</h1>																									
<form method="POST" action="index.php">																									
<input type="email" placeholder="Usuário/e-mail" name="email">																									
<input type="password" placeholder="Senha" name="senha">																									
<input type="submit" value="ACESSAR">																									
<a href="cadastrar.php">Ainda não está inscrito? <strong>Cadastre-se!</strong>																									
</form>																									
</div>																									
<?php																									
if(isset($_POST['email']))																									
{																									
$email = addslashes($_POST['email']);																									
$senha = addslashes($_POST['senha']); //instuções em 11:36 no vídeo 4																									
//verificar se não esta vazio																									
if(!empty($email) && !empty($senha))																									
{																									
//O nome utilizado abaixo deve ser o mesmo ao criar seu SQL nos campos create database e use																									
$u->conectar("personalize","localhost","root","");																									
print_r($u);																									
if($u->msgErro == "")																									
{																									
$login=$u->logar($email,$senha);																									
print_r($login);																									
if($login)																									
{																									
header("location: CLASSES/areaPrivada.php");																									
exit;																									
}																									
else																									
{																									
echo "Email e/ou senha estão incorretos!";																									
}																									
}																									
else																									
{																									
echo "Erro:".$u->msgErro;																									
}																									
}else{																									
echo "Preencha todos os campos!";																									
}																									
}																									
?>																									
</body>																									
</html>																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									
																									