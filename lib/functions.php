<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	$pages = ['bio','contact', 'home'];
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';

	} 
	$file =__DIR__.'/../parts/'. $_GET['page'] . '.php';
	if(in_array($_GET['page'], $page) && file_exists($file)){
		return $file;
	}
	else {
		return  __DIR__.'../parts/404.php'; 
	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}


