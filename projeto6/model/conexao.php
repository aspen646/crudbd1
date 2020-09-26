<?php
CONST HOSTNAME='127.0.0.1';
CONST USERNAME="root";
CONST PASSWORD='';
CONST DBNAME='tb2';

try{
	$conexao= new PDO("mysql:host=".HOSTNAME.";dbname=".DBNAME,USERNAME,PASSWORD);

	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Error:".$e->getMessage();
}