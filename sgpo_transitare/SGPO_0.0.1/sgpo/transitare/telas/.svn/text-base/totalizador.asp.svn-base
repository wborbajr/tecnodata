<%@LANGUAGE="VBSCRIPT" CODEPAGE="1252"%>
<!--#include file="../Connections/portal.asp" -->
<%
Dim Recordset1__MMColParam
Recordset1__MMColParam = "1"
If (Session("MM_UserAuthorization") <> "") Then 
  Recordset1__MMColParam = Session("MM_UserAuthorization")
End If
%>
<%
Dim Recordset1
Dim Recordset1_numRows

Set Recordset1 = Server.CreateObject("ADODB.Recordset")
Recordset1.ActiveConnection = MM_portal_STRING
Recordset1.Source = "SELECT * FROM portald_portal.aluno_cfc_fidel WHERE CodCfc = " + Replace(Recordset1__MMColParam, "'", "''") + ""
Recordset1.CursorType = 0
Recordset1.CursorLocation = 2
Recordset1.LockType = 1
Recordset1.Open()

Recordset1_numRows = 0
%>
<%
Dim Recordset2__MMColParam
Recordset2__MMColParam = "1"
If (Session("MM_UserAuthentication") <> "") Then 
  Recordset2__MMColParam = Session("MM_UserAuthentication")
End If
%>
<%
Dim Recordset2
Dim Recordset2_numRows

Set Recordset2 = Server.CreateObject("ADODB.Recordset")
Recordset2.ActiveConnection = MM_portal_STRING
Recordset2.Source = "SELECT * FROM portald_portal.transitare WHERE CodCfc = " + Replace(Recordset2__MMColParam, "'", "''") + ""
Recordset2.CursorType = 0
Recordset2.CursorLocation = 2
Recordset2.LockType = 1
Recordset2.Open()

Recordset2_numRows = 0
%>
<%
'  *** Recordset Stats, Move To Record, and Go To Record: declare stats variables

Dim Recordset1_total
Dim Recordset1_first
Dim Recordset1_last

' set the record count
Recordset1_total = Recordset1.RecordCount

' set the number of rows displayed on this page
If (Recordset1_numRows < 0) Then
  Recordset1_numRows = Recordset1_total
Elseif (Recordset1_numRows = 0) Then
  Recordset1_numRows = 1
End If

' set the first and last displayed record
Recordset1_first = 1
Recordset1_last  = Recordset1_first + Recordset1_numRows - 1

' if we have the correct record count, check the other stats
If (Recordset1_total <> -1) Then
  If (Recordset1_first > Recordset1_total) Then
    Recordset1_first = Recordset1_total
  End If
  If (Recordset1_last > Recordset1_total) Then
    Recordset1_last = Recordset1_total
  End If
  If (Recordset1_numRows > Recordset1_total) Then
    Recordset1_numRows = Recordset1_total
  End If
End If
%>

<%
' *** Recordset Stats: if we don't know the record count, manually count them

If (Recordset1_total = -1) Then

  ' count the total records by iterating through the recordset
  Recordset1_total=0
  While (Not Recordset1.EOF)
    Recordset1_total = Recordset1_total + 1
    Recordset1.MoveNext
  Wend

  ' reset the cursor to the beginning
  If (Recordset1.CursorType > 0) Then
    Recordset1.MoveFirst
  Else
    Recordset1.Requery
  End If

  ' set the number of rows displayed on this page
  If (Recordset1_numRows < 0 Or Recordset1_numRows > Recordset1_total) Then
    Recordset1_numRows = Recordset1_total
  End If

  ' set the first and last displayed record
  Recordset1_first = 1
  Recordset1_last = Recordset1_first + Recordset1_numRows - 1
  
  If (Recordset1_first > Recordset1_total) Then
    Recordset1_first = Recordset1_total
  End If
  If (Recordset1_last > Recordset1_total) Then
    Recordset1_last = Recordset1_total
  End If

End If
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/portaltemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Portal do Trânsito</title>
<!-- InstanceEndEditable -->
<link href="../css/estrutura2.css" rel="stylesheet" type="text/css" />

<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>

<body>

<div id="geral">
	<div id="colunas">
  		<div id="menu">
  		  <ul>
            <h1><a href="../index.asp" class="logo">Portal do Tr&acirc;nsito</a></h1>
  		    <li>
              <h3 class="informacoes">INFORMA&Ccedil;&Otilde;ES</h3>
	        </li>
  		    <li><a href="../index.asp">Home</a></li>
  		    <li><a href="../noticias">Not&iacute;cias</a></li>
  		    <li><a href="../busca.asp">Busca de Not&iacute;cias</a></li>
  		    <li><a href="../especialista">Palavra do Especialista</a></li>
  		    <li><a href="http://www.blogdotransito.com.br" target="_blank">Blog do Tr&acirc;nsito</a></li>
  		    <li><a href="../radio">R&aacute;dio Tr&acirc;nsito </a></li>
			<li><a href="../legislacao">Legisla&ccedil;&atilde;o</a></li>
  		    <li><a href="../estatisticas">Estat&iacute;stica</a></li>
  		    <li><a href="../curiosidades">Curiosidade</a></li>
  		    <li><a href="../cfcs">CFCs / Auto-Escolas</a></li>
  		    <li><a href="../fidelizado">CFCs Indicados</a></li>
  		    <li><a href="../eventos">Eventos</a></li>
  		    <li><a href="../educacao">Educa&ccedil;&atilde;o de Tr&acirc;nsito</a></li>
  		    <li><a href="../campanhas">Campanhas de Tr&acirc;nsito</a></li>
  		    <li><a href="../motociclistas">Motocicletas</a></li>
  		    <li><a href="../busca">Busca</a></li>
  		    <li>
              <h3 class="servicos">SERVI&Ccedil;OS</h3>
	        </li>
  		    <li><a href="../condicaoestradas">Condi&ccedil;&otilde;es de Estradas</a></li>
  		    <li><a href="../mapas">Mapas e Rotas </a></li>
  		    <li><a href="../dicas">Dicas para Viagem </a></li>
  		    <li><a href="../seguranca">Dicas de Seguran&ccedil;a </a></li>
  		    <li><a href="../detrans">Multas/Informa&ccedil;&otilde;es</a></li>
  		    <li><a href="../furtos">Carros Roubados </a></li>
  		    <li><a href="../informacoes">Informa&ccedil;&otilde;es &Uacute;teis </a></li>
  		    <li><a href="../cursos">Cursos</a></li>
  		    <li><a href="../simulados">Testes Simulados </a></li>
  		    <li><a href="../duvidas/tiraduvidas.asp">Tira d&uacute;vidas </a></li>
  		    <li><a href="../links">Links de Tr&acirc;nsito </a></li>
  		    <li>
              <h3 class="transitare">TRANSITARE</h3>
	        </li>
  		    <li><a href="../cfcs/login.asp">Login CFC </a></li>
  		    <li><a href="../cfcs/login.asp">Login ALUNO </a></li>
  		    <li>
              <h3 class="entretenimento">ENTRETENIMENTO</h3>
	        </li>
  		    <li><a href="../games">Games Educativos </a></li>
  		    <li><a href="../videos">V&iacute;deos </a></li>
  		    <li><a href="../humor">Humor </a></li>
  		    <li><a href="../charges">Charges </a></li>
  		    <li><a href="../fotos">Fotos </a></li>
  		    <li>
              <h3 class="produtos">PRODUTOS</h3>
	        </li>
  		    <li><a href="http://www.tecnodatacfc.com.br/loja/" target="_blank">Produtos para CFCs </a></li>
	      </ul>
  		</div>
		
    <div id="conteudo"><img src="../img/topo.jpg" alt="Not&iacute;cias, Legisla&ccedil;&atilde;o, Simulados, Testes, Sinaliza&ccedil;&atilde;o, tudo sobre o tr&acirc;nsito" width="618" height="95" border="0" usemap="#Map" />
<map name="Map" id="Map">
  <area shape="rect" coords="521,3,603,34" href="http://www.tecnodatacfc.com.br/loja" target="_blank" />
  <area shape="rect" coords="433,2,507,33" href="#" onclick="MM_openBrWindow('../radio/aovivo.htm','radio','width=360,height=175')" />
  <area shape="rect" coords="353,3,417,33" href="http://www.blogdotransito.com.br" target="_blank" />
  <area shape="rect" coords="2,12,240,92" href="http://www.portaldotransito.com.br/" />
<area shape="rect" coords="265,3,348,33" href="http://www.portaldotransito.com.br/noticias/" />
</map>
<!-- InstanceBeginEditable name="EditRegion1" -->

            <table width="100%">
              <tr>
                <td><h2>Projeto TRANSITARE </h2></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"><div align="center" class="box3">Totalizador em R$ </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><strong>Busca pelo per&iacute;odo</strong> 
                  <form id="form1" name="form1" method="post" action="">
                    <select name="select">
                      <option>Janeiro</option>
                      <option>Fevereiro</option>
                      <option>Mar&ccedil;o</option>
                      <option>Abril</option>
                      <option>Maio</option>
                      <option>Junho</option>
                      <option>Julho</option>
                      <option>Agosto</option>
                      <option>Setembro</option>
                      <option>Outubro</option>
                      <option>Novembro</option>
                      <option>Dezembro</option>
                    </select>
                   at&eacute; 
                   <select name="select2">
                     <option>Janeiro</option>
                     <option>Fevereiro</option>
                     <option>Mar&ccedil;o</option>
                     <option>Abril</option>
                     <option>Maio</option>
                     <option>Junho</option>
                     <option>Julho</option>
                     <option>Agosto</option>
                     <option>Setembro</option>
                     <option>Outubro</option>
                     <option>Novembro</option>
                     <option>Dezembro</option>
                   </select> 
                   <input type="submit" name="Submit" value="Buscar" />
                                    </form>                </td>
              </tr>
              <tr>
                <td><div align="center">
                    <table width="300" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><p>
                            <% Response.Write(total)%>
                          </p>
                            <p>
                              <% total = 5.00 * ((Recordset1_total)) %>
                              Total mensal: R$
                              <% Response.write(total) %>
                              ,00 </p></td>
                      </tr>
                    </table>
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
          <!-- InstanceEndEditable --></div>

	  <div id="banners">
			<h1>Portal do Tr&acirc;nsito</h1>
			<h2>Publicidade</h2>
	        <div align="center">
	          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><div align="center"><script type="text/javascript"><!--
google_ad_client = "pub-7112088345510097";
google_ad_width = 120;
google_ad_height = 600;
google_ad_format = "120x600_as";
google_ad_type = "text_image";
//2007-07-11: auto peças, carros, freio, pneus, tunning
google_ad_channel = "0239011643+0897905785+2876501575+4612192965+1036952155";
google_color_border = "ECEEEC";
google_color_bg = "ECEEEC";
google_color_link = "0061A5";
google_color_text = "000000";
google_color_url = "0061A5";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div></td>
                </tr>
              </table>
	        </div>
	  </div>
	</div>

	<div id="rodape">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><div align="center">
                <p><strong>.: Portal do Tr&acirc;nsito - Copyright&reg; 2007 - Todos os direitos reservados :. </strong></p>
                <p><a href="http://www.portaldotransito.com.br/quemsomos/index.asp" class="linkbranco">Quem Somos</a> - <a href="http://www.portaldotransito.com.br/privacidade/index.asp" class="linkbranco">Pol&iacute;tica de Privacidade</a> - <a href="http://www.portaldotransito.com.br/privacidade/index.asp" class="linkbranco">Termos de uso</a> - <a href="http://www.portaldotransito.com.br/questoes_legais.asp" class="linkbranco">Quest&otilde;es Legais</a> - <a href="http://www.portaldotransito.com.br/mapadosite/index.asp" class="linkbranco">Mapa do Site</a></p>
            </div></td>
          </tr>
        </table>
		</div>

</div>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1494369-1";
urchinTracker();
</script>
</body>
<!-- InstanceEnd --></html>
<%
Recordset1.Close()
Set Recordset1 = Nothing
%>
<%
Recordset2.Close()
Set Recordset2 = Nothing
%>
