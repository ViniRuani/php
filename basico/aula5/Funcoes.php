<?php
/*

Funcoes:
	O PHP Originalmente era todo funcional, ou seja
	baseado em funcoes.

	Existem 3 formas de criar funcoes

*/

#1: Funcoes por valor, sem parametro

#Criando uma funcao
function teste()
{
	echo 'Seu nome é: Marcio';
}

#Chamando uma funcao

#teste();

#2: Funcoes que recebem parametros

function teste2($valor)
{
	echo 'Seu nome é: ',$valor;
}

#Chamando uma funcao e passando valor

#$valor = 'Marcio';
#teste2($valor);

#3. Criando funcao por valor que retorna uma valor.

function teste3($valor)
{
	return 'Seu nome é: '.$valor;
}

#Chamando a funcao, porém agora eu tenho q usar echo;
#de duas formas:
#A: 
$valor = 'Marcio';
#echo teste3($valor);

#B:
$nome = teste3($valor);
#echo $nome, ' Muito legal !!!';

#4 Funcoes com mais de um parametro
function teste4($valor1, $valor2)
{
	
	return ($valor1);
}

$valor1 = 'M';
$valor2 = 'R';
#var_dump(teste4($valor1,$valor2));

#Tipos de dados de pode passar:
#Array, Integer, String, Objetos, Resources e Outros.


#Exemplo
function toMaisculo($nome)
{
	return strtoupper($nome);
}

$nome = 'Marcio';
echo teste5($nome);

echo PHP_EOL;

#Proximas aulas: Funcoes por Referencia, funcoes anonimas e clousers.

$valor = (int) '1'

$valor4 = 'aasdsa';

$valor4 = 35;

function teste6(int $valor)
{

}

?>
