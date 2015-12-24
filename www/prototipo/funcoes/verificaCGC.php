<?php
/*
    verificaCGC - aferidor de CGC baseado em PHP
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

// funcao............: verificaCGC
// ---------------------------------------------------------------------------
// desenvolvido por..: andré camargo
// versoes...........: 1.0 11:43 10/02/2000
// descricao.........: esta funcao verifica se o CGC fornecido com entrada é 
//                     válido
// parametros entrada: $cgc, número do CGC (formato: 99.999.999/9999-99)
// parametros saída..: 1 se é valido ou 0 se NÃO é valido ;)

	function verificaCGC($cgc) {
		if (strlen($cgc) <> 18) return 0;
		$soma1 = ($cgc[0] * 5) +
					($cgc[1] * 4) +
					($cgc[3] * 3) +
					($cgc[4] * 2) +
					($cgc[5] * 9) +
					($cgc[7] * 8) +
					($cgc[8] * 7) +
					($cgc[9] * 6) +
					($cgc[11] * 5) +
					($cgc[12] * 4) +
					($cgc[13] * 3) +
					($cgc[14] * 2);
	        $resto = $soma1 % 11;
		$digito1 = $resto < 2 ? 0 : 11 - $resto;

		$soma2 = ($cgc[0] * 6) +
					($cgc[1] * 5) +
					($cgc[3] * 4) +
					($cgc[4] * 3) +
					($cgc[5] * 2) +
					($cgc[7] * 9) +
					($cgc[8] * 8) +
					($cgc[9] * 7) +
					($cgc[11] * 6) +
					($cgc[12] * 5) +
					($cgc[13] * 4) +
					($cgc[14] * 3) +
					($cgc[16] * 2);
		$resto = $soma2 % 11;
		$digito2 = $resto < 2 ? 0 : 11 - $resto;

		return (($cgc[16] == $digito1) && ($cgc[17] == $digito2));
	}

/***************************************************************
FORMULA DE CALCULO PARA DIGITO VERIFICADOR DO CGC

Multiplique os digitos correspondentes da seguinte forma.

*** PRIMEIRO DIGITO VERIFICADOR DO CGC ******

CGC--------------|
12.345.678/0001-99
|| ||| ||| |||| |\
|| ||| ||| |||| | \
|| ||| ||| |||| |  \
ab.cde.fgh/ijkl-Dig1Dig2
|| ||| ||| ||||       
|| ||| ||| |||2        ( l *  2 )
|| ||| ||| ||3         ( k *  3 )
|| ||| ||| |4          ( j *  4 )
|| ||| ||| 5           ( i *  5 )
|| ||| ||6             ( h *  6 )
|| ||| |7              ( g *  7 )
|| ||| 8               ( f *  8 )
|| ||9                 ( e *  9 )
|| |2                  ( d *  2 )
|| 3                   ( c *  3 )
|4                     ( b *  4 )
5                      ( a *  5 )

Faca Soma1 = Soma dos resultados das multiplicacoes.
Exemplo: Soma1 = ( a * 5 )+( b * 4 )+( c * 3 )+ETC...

Divida o Resultado de Soma1 por 11 
Exemplo: Divisao1 = Soma1 / 11

Multiplique o Resultado da Divisao por 11
Exemplo: Multiplica1 = Divisao1 * 11

Faca uma subtracao da Soma1 pela Multiplica1 
Exemplo: Resto = Soma1 - Multiplica1

Se o resultado (RESTO) for igual a 0 ou igual a 1 o primeiro digito
do CGC devera ser igual a 0.
Exemplo: Se Resto = 1 entao Dig1 igual a 0
         Se Resto = 0 entao Dig1 igual a 0

Se o resultado (RESTO) for maior que 1 entao deve-se subtrair o resultado
(RESTO) de 11 para conseguir o primeiro digito verificador.
Exemplo: Se Resto = 8 entao Dig1 igual a ( 11 - 8 ) = 3
Exemplo: Se Resto = 5 entao Dig1 igual a ( 11 - 5 ) = 6

*** SEGUNDO  DIGITO VERIFICADOR DO CGC ******

CGC--------------------|
ab.cde.fgh/ijkl-Dig1Dig2   ( Primeiro Digito Verifador multiplicado por 2 ) 
|| ||| ||| ||||  |
|| ||| ||| ||||  2     ( Dig1 * 2 )
|| ||| ||| |||3        (  l   * 3 )
|| ||| ||| ||4         (  k   * 4 )
|| ||| ||| |5          (  j   * 5 )
|| ||| ||| 6           (  i   * 6 )
|| ||| ||7             (  h   * 7 )
|| ||| |8              (  g   * 8 )
|| ||| 9               (  f   * 9 )
|| ||2                 (  e   * 2 )
|| |3                  (  d   * 3 )
|| 4                   (  c   * 4 )
|5                     (  b   * 5 )
6                      (  a   * 6 )


Faca Soma2 = Soma dos resultados das multiplicacoes. Nao se esqueca de
multiplicar e somar o primeiro digito encontrado por 2. 
Exemplo: Soma2 = ( a * 6 )+( b * 5 )+ETC... + ( Dig1 * 2 )

Divida o Resultado de Soma2 por 11 
Exemplo: Divisao2 = Soma2 / 11

Multiplique o Resultado da Divisao por 11
Exemplo: Multiplica2 = Divisao2 * 11

Faca uma subtracao da Soma1 pela Multiplica1 
Exemplo: Resto = Soma2 - Multiplica2

Se o resultado (RESTO) for igual a 0 ou igual a 1 o segundo digito
do CGC devera ser igual a 0.
Exemplo: Se Resto = 1 entao Dig2 e igual a 0
         Se Resto = 0 entao Dig2 e igual a 0

Se o resultado (RESTO) for maior que 1 entao deve-se subtrair o resultado
(RESTO) de 11 para conseguir o segundo digito verificador.
Exemplo: Se Resto = 8 entao Dig2 igual a ( 11 - 8 ) = 3
Exemplo: Se Resto = 5 entao Dig2 igual a ( 11 - 5 ) = 6


ATENCAO: Para que o CGC seja valido os dois digitos verificadores devem
         conferir.
***************************************************************/
?>