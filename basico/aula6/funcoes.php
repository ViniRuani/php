<?php

#Recaptulando:
#Criando uma funcao que recebe um valor e retora um resultado

#Existe um  padrao para codigos em PHP que é o PHP-fig {PSR-X}
#Indicacao leiam http://br.phptherightway.com/


function nomeMaisculo($nome)
{
	return strtoupper($nome);
}

#echo nomeMaisculo('marcio'),PHP_EOL;

#Um exemplo de funcao que possui um parametro
#nao obrigatorio.

function teste1($naoobrigatorio = 'valor')
{
	return $naoobrigatorio;
	#ou
	#echo $naoobrigatorio;
}

#Outro tipo de funcao
#Funcoes anonimas

#Por padrao toda funcao possue um nome,
#As funcoes anonimas por sua vez nao possuem.

#Exemplo de uso

$func = function(){ return '123'; };

#echo $func(), PHP_EOL;

#Existem funcos no PHP que recebem como argumento
#outra funcao, chamamos isso de funcao de CallBack.
#Funcao que recebe uma funcao e uma variavel
function nome2($function,$nome = 'TESTE')
{
	#Reteornando a funcao com a manipulacao da variavel
	return $function($nome);
}

#Criando a variavel
$valor = 'Teste';
#Criando uma funcao anonima que recebe um valor e retorna
#O valor concatenado com 12345
$funcao = function($valor){ return "$valor 12345"; };
#Chamando a funcao anonima com o parametro de funcao e variavel
#informados

#echo nome2($funcao,$valor), PHP_EOL;

#echo nome2(function($valor){ return '12345'; },$valor);

class testeClass
{
	public $t = 'Nome';
}


$obj = new testeClass();


function testeClouser($function)
{

	return $function();
}


echo testeClouser(function() use ($obj){
	return $obj->t;
}),PHP_EOL;

#Existem uma funcoes no php responsavel por validar se a funcao existe
#Exemplo: is_callable() , function_exists()  

?>
