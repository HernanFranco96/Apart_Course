<?php
	class Pez{

		private $Cod = '';
		private $Raza = '';
		private $Alias = '';
		private $Edad = '';

		function setCodigo(string $param){
			if(!empty($param)){
				$Cod = $param;
			}
		}

		function getCodigo(){
			return $Cod;
		}

		function setRaza(string $param){
			if(!empty($param)){
				$Raza = $param;
			}
		}

		function getRaza(){
			return $Raza;
		}

		function setAlias(string $param){
			if(!empty($param)){
				$Alias = $param;
			}
		}

		function getAlias(){
			return $Alias;
		}

		function setEdad(string $param){
			if(!empty($param)){
				$Edad = $param;
			}
		}

		function getEdad(){
			return $Edad;
		}
	}


?>