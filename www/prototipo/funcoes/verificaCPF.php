<?php
/*
    verificaCPF - aferidor de CPF baseado em PHP
    Copyright (C) 2000 andre camargo

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.

    Andr&eacute;) Ribeiro Camargo (acamargo@atlas.ucpel.tche.br)
    Rua Silveira Martins, 592/102
    Canguçu-RS-Brasil
    CEP 96.600-000
*/
	
// funcao............: verificaCPF
// ---------------------------------------------------------------------------
// desenvolvido por..: andré camargo
// versoes...........: 1.0 10:30 14/02/2000
// descricao.........: esta funcao verifica se o CPF fornecido com entrada é 
//                     válido
// parametros entrada: $cpf, número do CPF (formato: 999999999-99)
// parametros saída..: 1 se é valido ou 0 se NÃO é valido ;)

	function verificaCPF($cpf) {
		if (strlen($cpf) <> 12) return 0;
		$soma1 = ($cpf[0] * 10) +
					($cpf[1] * 9) +
					($cpf[2] * 8) +
					($cpf[3] * 7) +
					($cpf[4] * 6) +
					($cpf[5] * 5) +
					($cpf[6] * 4) +
					($cpf[7] * 3) +
					($cpf[8] * 2);
	        $resto = $soma1 % 11;
		$digito1 = $resto < 2 ? 0 : 11 - $resto;

		$soma2 = ($cpf[0] * 11) +
					($cpf[1]  * 10) +
					($cpf[2]  * 9) +
					($cpf[3]  * 8) +
					($cpf[4]  * 7) +
					($cpf[5]  * 6) +
					($cpf[6]  * 5) +
					($cpf[7]  * 4) +
					($cpf[8]  * 3) +
					($cpf[10] * 2);
		$resto = $soma2 % 11;
		$digito2 = $resto < 2 ? 0 : 11 - $resto;

		return (($cpf[10] == $digito1) && ($cpf[11] == $digito2));
	}

/***************************************************************
FORMULA DE CALCULO PARA DIGITO VERIFICADOR DO CPF

Multiplique os digitos correspondentes da seguinte forma.

*** PRIMEIRO DIGITO VERIFICADOR DO CPF ******

CPF---------- -|
abc.def.ghi-D1D2
||| ||| |||
||| ||| ||2    Exemplo: ( i *  2 )
||| ||| |3              ( h *  3 )
||| ||| 4               ( g *  4 )
||| ||5                 ( f *  5 )
||| |6                  ( e *  6 )
||| 7                   ( d *  7 )
||8                     ( c *  8 )
|9                      ( b *  9 )
10                      ( a * 10 )

Faca Soma1 = Soma dos resultados das multiplicacoes.
Exemplo: Soma1 = ( a * 10 )+( b * 9 )+( c * 8 )+ETC...

Divida o Resultado de Soma1 por 11 
Exemplo: Divisao1 = Soma1 / 11

Multiplique o Resultado da Divisao por 11
Exemplo: Multiplica1 = Divisao1 * 11

Faca uma subtracao da Soma1 pela Multiplica1 
Exemplo: Resto = Soma1 - Multiplica1

Se o resultado (RESTO) for igual a 0 ou igual a 1 o primeiro digito
do CPF devera ser igual a 0.
Exemplo: Se Resto = 1 entao Dig1 e igual a 0
         Se Resto = 0 entao Dig1 e igual a 0

Se o resultado (RESTO) for maior que 1 entao deve-se subtrair o resultado
(RESTO) de 11 para conseguir o primeiro digito verificador.
Exemplo: Se Resto = 8 entao Dig1 igual a ( 11 - 8 ) = 3
Exemplo: Se Resto = 5 entao Dig1 igual a ( 11 - 5 ) = 6




*** SEGUNDO  DIGITO VERIFICADOR DO CPF ******

CPF-----------|
abc.def.ghi-D1D2   ( Primeiro Digito Verifador multiplicado por 2 )
||| ||| ||| |
||| ||| ||| 2  Exemplo: ( D1 *  2 )
||| ||| ||3             (  i *  3 )
||| ||| |4              (  h *  4 )
||| ||| 5               (  g *  5 )
||| ||6                 (  f *  6 )
||| |7                  (  e *  7 )
||| 8                   (  d *  8 )
||9                     (  c *  9 )
|10                     (  b * 10 )
11                      (  a * 11 )


Faca Soma2 = Soma dos resultados das multiplicacoes. Nao se esqueca de
multiplicar e somar o primeiro digito encontrado por 2. 
Exemplo: Soma2 = ( a * 11 )+( b * 10 )+ETC...+ ( D1 * 2 )

Divida o Resultado de Soma2 por 11 
Exemplo: Divisao2 = Soma2 / 11

Multiplique o Resultado da Divisao por 11
Exemplo: Multiplica2 = Divisao2 * 11

Faca uma subtracao da Soma1 pela Multiplica1 
Exemplo: Resto = Soma2 - Multiplica2

Se o resultado (RESTO) for igual a 0 ou igual a 1 o segundo digito
do CPF devera ser igual a 0.
Exemplo: Se Resto = 1 entao Dig2 e igual a 0
         Se Resto = 0 entao Dig2 e igual a 0

Se o resultado (RESTO) for maior que 1 entao deve-se subtrair o resultado
(RESTO) de 11 para conseguir o segundo digito verificador.
Exemplo: Se Resto = 8 entao Dig2 igual a ( 11 - 8 ) = 3
Exemplo: Se Resto = 5 entao Dig2 igual a ( 11 - 5 ) = 6


ATENCAO: Para que o CPF seja valido os dois digitos verificadores devem
         conferir. 
**********************************************************/
?>