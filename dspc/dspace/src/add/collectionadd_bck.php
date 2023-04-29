<?php #abre a tag do php ,inicio
session_start();
$scn = $_POST['linkscn'];#variavel scn recebe o metodo post na string linkscn
$_SESSION['collection']=$scn;#variavel da sessao scene recebea variavel scn
header("location: ../collections.php");#linka com index.php uma pasta atras

?><!--fim de tag php--><!-- essa pagina tava pequena ai adiatei-->