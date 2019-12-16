<?php

namespace Galoa\ExerciciosPhp\TextWrap;

/**
 * Implemente sua resolução aqui.
 */

class Resolucao implements TextWrapInterface {
$text = "Hoje é o dia de fazer festa! De comemorar e prestigiar o NATAL e ANO NOVO. Começar um novo ciclo uma nova maneira de enchegar o mundo e mudar as perspectiva de mundo que tem no momento.";

$array = explode(" ",$text);
$numPalavra = count($array);
$length = 20;
$linUsado = 0;
  /**
   * {@inheritdoc}
   */
  public function textWrap(string $text, int $length): array {
  	
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
