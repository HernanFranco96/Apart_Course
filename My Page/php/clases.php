<?php
	public class Pez{

		private $Cod = '';
		private $Raza = '';
		private $Alias = '';
		private $Edad = '';

		public void setCodigo(string $param){
			if(!empty($param)){
				$Cod = $param;
			}
		}

		public string getCodigo(){
			return $Cod;
		}

		public void setRaza(string $param){
			if(!empty($param)){
				$Raza = $param;
			}
		}

		public string getRaza(){
			return $Raza;
		}

		public void setAlias(string $param){
			if(!empty($param)){
				$Alias = $param;
			}
		}

		public string getAlias(){
			return $Alias;
		}

		public void setEdad(string $param){
			if(!empty($param)){
				$Edad = $param;
			}
		}

		public string getEdad(){
			return $Edad;
		}
	}


?>