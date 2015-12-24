<%@LANGUAGE="VBSCRIPT"%>
<!--#include virtual="/Connections/portal.asp" -->
<%
' *** Edit Operations: declare variables

Dim MM_editAction
Dim MM_abortEdit
Dim MM_editQuery
Dim MM_editCmd

Dim MM_editConnection
Dim MM_editTable
Dim MM_editRedirectUrl
Dim MM_editColumn
Dim MM_recordId

Dim MM_fieldsStr
Dim MM_columnsStr
Dim MM_fields
Dim MM_columns
Dim MM_typeArray
Dim MM_formVal
Dim MM_delim
Dim MM_altVal
Dim MM_emptyVal
Dim MM_i

MM_editAction = CStr(Request.ServerVariables("SCRIPT_NAME"))
If (Request.QueryString <> "") Then
  MM_editAction = MM_editAction & "?" & Server.HTMLEncode(Request.QueryString)
End If

' boolean to abort record edit
MM_abortEdit = false

' query string to execute
MM_editQuery = ""
%>
<%
' *** Insert Record: set variables

If (CStr(Request("MM_insert")) = "form1") Then

  MM_editConnection = MM_portal_STRING
  MM_editTable = "portald_portal.transitare"
  MM_editRedirectUrl = "http://www.portaldotransito.com.br/cfcs/cfccorreto.asp"
  MM_fieldsStr  = "NomeCfc|value|EnderecoCfc|value|CidadeCfc|value|CepCfc|value|CnpjCfc|value|FoneCfc|value|EmailCfc|value|Responsavel|value|LoginCfc|value|SenhaCfc|value|ValorCfc|value"
  MM_columnsStr = "NomeCfc|',none,''|EnderecoCfc|',none,''|CidadeCfc|',none,''|CepCfc|',none,''|CnpjCfc|',none,''|FoneCfc|',none,''|EmailCfc|',none,''|Responsavel|',none,''|LoginCfc|',none,''|SenhaCfc|',none,''|ValorCfc|none,none,NULL"

  ' create the MM_fields and MM_columns arrays
  MM_fields = Split(MM_fieldsStr, "|")
  MM_columns = Split(MM_columnsStr, "|")
  
  ' set the form values
  For MM_i = LBound(MM_fields) To UBound(MM_fields) Step 2
    MM_fields(MM_i+1) = CStr(Request.Form(MM_fields(MM_i)))
  Next

  ' append the query string to the redirect URL
  If (MM_editRedirectUrl <> "" And Request.QueryString <> "") Then
    If (InStr(1, MM_editRedirectUrl, "?", vbTextCompare) = 0 And Request.QueryString <> "") Then
      MM_editRedirectUrl = MM_editRedirectUrl & "?" & Request.QueryString
    Else
      MM_editRedirectUrl = MM_editRedirectUrl & "&" & Request.QueryString
    End If
  End If

End If
%>
<%
' *** Insert Record: construct a sql insert statement and execute it

Dim MM_tableValues
Dim MM_dbValues

If (CStr(Request("MM_insert")) <> "") Then

  ' create the sql insert statement
  MM_tableValues = ""
  MM_dbValues = ""
  For MM_i = LBound(MM_fields) To UBound(MM_fields) Step 2
    MM_formVal = MM_fields(MM_i+1)
    MM_typeArray = Split(MM_columns(MM_i+1),",")
    MM_delim = MM_typeArray(0)
    If (MM_delim = "none") Then MM_delim = ""
    MM_altVal = MM_typeArray(1)
    If (MM_altVal = "none") Then MM_altVal = ""
    MM_emptyVal = MM_typeArray(2)
    If (MM_emptyVal = "none") Then MM_emptyVal = ""
    If (MM_formVal = "") Then
      MM_formVal = MM_emptyVal
    Else
      If (MM_altVal <> "") Then
        MM_formVal = MM_altVal
      ElseIf (MM_delim = "'") Then  ' escape quotes
        MM_formVal = "'" & Replace(MM_formVal,"'","''") & "'"
      Else
        MM_formVal = MM_delim + MM_formVal + MM_delim
      End If
    End If
    If (MM_i <> LBound(MM_fields)) Then
      MM_tableValues = MM_tableValues & ","
      MM_dbValues = MM_dbValues & ","
    End If
    MM_tableValues = MM_tableValues & MM_columns(MM_i)
    MM_dbValues = MM_dbValues & MM_formVal
  Next
  MM_editQuery = "insert into " & MM_editTable & " (" & MM_tableValues & ") values (" & MM_dbValues & ")"

  If (Not MM_abortEdit) Then
    ' execute the insert
    Set MM_editCmd = Server.CreateObject("ADODB.Command")
    MM_editCmd.ActiveConnection = MM_editConnection
    MM_editCmd.CommandText = MM_editQuery
    MM_editCmd.Execute
    MM_editCmd.ActiveConnection.Close

    If (MM_editRedirectUrl <> "") Then
      Response.Redirect(MM_editRedirectUrl)
    End If
  End If

End If
%>
<%
Dim Recordset1
Dim Recordset1_numRows

Set Recordset1 = Server.CreateObject("ADODB.Recordset")
Recordset1.ActiveConnection = MM_portal_STRING
Recordset1.Source = "SELECT * FROM portald_portal.transitare"
Recordset1.CursorType = 0
Recordset1.CursorLocation = 2
Recordset1.LockType = 1
Recordset1.Open()

Recordset1_numRows = 0
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
      <table width="100%" class="conteudo">
              <tr>
                <td><h2>Projeto TRANSITARE </h2></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"><div align="center" class="box3">Cadastro de CFCs </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center">
                    <form id="form1" name="form1" method="post" action="<%=MM_editAction%>">
                      <table width="400" border="0" align="center">
                        <tr>
                          <td width="157"><div align="right">Nome:</div></td>
                          <td width="233"><label>
                            <input name="NomeCfc2" type="text" id="NomeCfc2" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><div align="right">Endere&ccedil;o:</div></td>
                          <td><label>
                            <input name="EnderecoCfc2" type="text" id="EnderecoCfc2" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><div align="right">Cidade:</div></td>
                          <td><label>
                            <input name="CidadeCfc2" type="text" id="CidadeCfc2" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><div align="right">CEP:</div></td>
                          <td><label>
                            <input name="CepCfc2" type="text" id="CepCfc2" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><div align="right">CNPJ:</div></td>
                          <td><label>
                            <input name="CnpjCfc2" type="text" id="CnpjCfc2" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><div align="right">Fone:</div></td>
                          <td><label>
                            <input name="FoneCfc2" type="text" id="FoneCfc2" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><div align="right">E-Mail:</div></td>
                          <td><label>
                            <input name="EmailCfc2" type="text" id="EmailCfc2" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><div align="right">Respons&aacute;vel:</div></td>
                          <td><label>
                            <input name="Responsavel2" type="text" id="Responsavel2" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><div align="right">Login:</div></td>
                          <td><label>
                            <input name="LoginCfc2" type="text" id="LoginCfc2" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><div align="right">Senha:</div></td>
                          <td><label>
                            <input name="SenhaCfc2" type="text" id="SenhaCfc2" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><div align="right">Valor Apostila </div></td>
                          <td><label>
                            <input name="ValorCfc2" type="text" id="ValorCfc2" />
                          </label></td>
                        </tr>
                        <tr>
                          <td colspan="2"><label>
                              <div align="center">
                                <input type="submit" name="Submit2" value="Enviar" />
                              </div>
                            </label></td>
                        </tr>
                      </table>
                      <input type="hidden" name="MM_insert2" value="form1" />
                    </form>
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
