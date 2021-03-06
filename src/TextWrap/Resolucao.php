<?php

namespace Galoa\ExerciciosPhp\TextWrap;

require_once 'vendor/autoload.php';
/**
 * Implemente sua resolução aqui.
 */

class Resolucao implements TextWrapInterface {
public $text = "Hoje é o dia de fazer festa! De comemorar e prestigiar o NATAL e ANO NOVO. Começar um novo ciclo uma nova maneira de enchegar o mundo e mudar as perspectiva de mundo que tem no momento.";
public $length = 20;
	
	public function setText(){
		$this->text = $text;
	}
	public function getText(){
		return $this->text;
	}
	public function getLength(){
		return $this->length;
	}
  /**
   * {@inheritdoc}
   */

  /*public function setText($text){
  	$this->text = $text;
  }
  public function getText(){
  	return $this->text;
  }*/
  

  public function textWrap(getText(), getLength()): array {
  	//$this->text = $text;
	$array = explode(" ",$text);
	$numPalavra = count($array);
	//$length = 20;
	$linUsado = 0;

  	for($i = 0; $i < $numPalavra; $i++){
	$contaPalavra = strlen($array[$i]);
	$linUsado += $contaPalavra; //Quatidade de linhas usadas
	
	if($linUsado > $length){ //Os caracteres da linha usados até o momento forem ultrapassados do tamanho estipulado
		if($contaPalavra > $length){ //Tamanho da palavra maior que o tamanho Permitido
			echo substr($array[$i],0,$length-$i);
			echo "<br>";
			echo substr($array[$i],$length-$i)." ";
			$linUsado = ($linUsado-$length)+1;
		}else{//Tamanho da palavra menor que o tamanho Permitido
			echo "<br>";
			echo substr($array[$i],0)." ";
			$linUsado = $contaPalavra+1;
		}
	}else{//Continua imprimindo as Strings
		print "$array[$i] ";
	}
}
    return [""];
  }
  
}