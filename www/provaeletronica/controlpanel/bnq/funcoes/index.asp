<!--
---------------------------------------------------------------------------------------------
| Desenvolvido por:                                                                         |
|    inMídia Web Productions															    |
|    www.inmidiaweb.com.br   													            |
|                           													            |
| Programação:															                    |
|   Jean Sartor															                    |
|                           													            |
| Design Gráfico:															                |
|   Rafael Minoli															                |
---------------------------------------------------------------------------------------------
-->

<!--#include file="includes/connection.asp"-->

<% Response.Buffer=True %>


<%
     Dim intSessionId
        intSessionId = Session.SessionID

     Dim intTotOnLine
       intTotOnLine = Application("intTotOnLine")

     Dim intTotUser
       intTotUser= Application("intTotUser")
%>


<%

     Dim TblDestaques, TblVisitas, TblCategorias
     Dim objConn, objRS, strQ, strConn, browser, historico, datahoje
     Server.ScriptTimeOut = 100000
     Const adOpenKeyset = 1
     Const adLockOptimistic = 3
     Set objConn = Server.CreateObject("ADODB.Connection")
     Set objRS = Server.CreateObject("ADODB.Recordset")
     objConn.ConnectionString = strConn
     objConn.Open strConn
     pagina = "HOME"
     ip = Request.ServerVariables("REMOTE_ADDR")
     browser = Request.ServerVariables("HTTP_USER_AGENT") 
     historico = Request.ServerVariables("HTTP_REFERER")
     data = date
     hora = time
     set TblVisitas = ObjConn.Execute ("INSERT INTO tbl_visitas(pagina,ip,browser,historico,data,hora) VALUES ('" & pagina & "','" & ip & "','" & browser & "','" & historico & "','" & data & "','" & hora & "')")
     set TblDestaques = ObjConn.Execute ("SELECT * FROM tbl_produtos WHERE status = 'destaque'")

%>


<link href="img/negocie.css" rel="stylesheet" type="text/css">
<title>Negocie Comigo - A Grande Vitrine da Web</title>
<script language="JavaScript" type="text/JavaScript">
<!--


function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" class="borda_laterais">
  <tr>
    <td>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" background="img/fundo.gif">
      <tr>
        <td height="22" align="center" nowrap onClick=mClk(this) onMouseOver="mOvr(this,'#A0B780')" 
                onMouseOut="mOut(this,'')"> <a name="topo"></a><a href="#" class="link_menu_cima">Negocie Comigo</a></td>
        <td height="22" align="center" nowrap onClick=mClk(this) onMouseOver="mOvr(this,'#A0B780')" 
                onMouseOut="mOut(this,'')"> <a href="#" class="link_menu_cima">Negociante Seguro</a></td>
        <td height="22" align="center" nowrap onClick=mClk(this) onMouseOver="mOvr(this,'#A0B780')" 
                onMouseOut="mOut(this,'')"> <a href="#" class="link_menu_cima">Encontre Comigo</a></td>
        <td height="22" align="center" nowrap onClick=mClk(this) onMouseOver="mOvr(this,'#A0B780')" 
                onMouseOut="mOut(this,'')"> <a href="#" class="link_menu_cima">Velhos Amigos</a></td>
        <td height="22" align="center" nowrap onClick=mClk(this) onMouseOver="mOvr(this,'#A0B780')" 
                onMouseOut="mOut(this,'')"> <a href="#" class="link_menu_cima">Pro-Finding</a></td>
        <td height="22" align="center" nowrap onClick=mClk(this) onMouseOver="mOvr(this,'#A0B780')" 
                onMouseOut="mOut(this,'')"> <a href="#" class="link_menu_cima">Ca&ccedil;ador de Aluguel</a></td>
      </tr>
    </table>    </td>
  </tr>
</table>
<table width="700" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="#FFFFFF" class="borda_todos">
  <tr>
    <td height="100"><div align="center">
		<img src="img/logo.gif" width="201" height="66"></div></td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td width="46%"><table width="100" border="0" align="center" cellpadding="7" cellspacing="3">
          <tr>
            <td nowrap><div align="center"><a href="meunegociecomigo/">Login</a></div></td>
            <td nowrap><div align="center"><a href="cadastro/">Registrar</a></div></td>
            <td nowrap><div align="center"><a href="institucional/ajuda.asp">Ajuda</a></div></td>
          </tr>
        </table></td>
        <td width="54%"><div align="right">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="234" height="60">
              <param name="movie" value="http://cadastro.ig.com.br/images/CENTRAL_CLIENTE/half.swf">
              <param name="quality" value="high">
              <embed src="http://cadastro.ig.com.br/images/CENTRAL_CLIENTE/half.swf" width="234" height="60" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
          </object>
        </div></td>
      </tr>
    </table>    </td>
  </tr>
</table>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" background="img/fundo.gif" class="borda_laterais">
  <tr>
    <td>
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="img/fundo_claro.gif">
<script language=JavaScript class="fonte">
<!--
//===================================================================
function dOvr(ID){divs = document.all.tags("DIV");divs[ID].className = "GlowBranco";}
function dOut(ID){divs = document.all.tags("DIV");divs[ID].className = "";}
function mOvr(src,clrOver){if (!src.contains(event.fromElement)){src.style.cursor = 'hand';src.bgColor = clrOver;}}
function mOut(src,clrIn){if (!src.contains(event.toElement)){src.style.cursor = 'default';src.bgColor = clrIn;}}
function mClk(src) {if(event.srcElement.tagName=='TD'){src.children.tags('A')[0].click();}}
//===================================================================
//Set the colors, first color is same as background, last color is the color it stops at:
//You can have as many colors you want
nColor=new Array('#EFEFEF', '#EEEEEE','#CCCCCC','#999999','#666666','#333333','#000000')
// -->
        </script>
      <tr>
        <td height="22" align="center" onClick=mClk(this) onMouseOver="mOvr(this,'#98AF85')" 
                onMouseOut="mOut(this,'')">          
          <a href="#" class="link_menu">Home</a></div></td>
        <td height="22" align="center" onClick=mClk(this) onMouseOver="mOvr(this,'#98AF85')" 
                onMouseOut="mOut(this,'')">
<a class="link_menu" href="navegar/">Navegar</a></td>
        <td height="22" align="center" onClick=mClk(this) onMouseOver="mOvr(this,'#98AF85')" 
                onMouseOut="mOut(this,'')">
<a class="link_menu" href="querovender/">Quero VENDER</span></a></td>
        <td height="22" align="center" onClick=mClk(this) onMouseOver="mOvr(this,'#98AF85')" 
                onMouseOut="mOut(this,'')">
<a class="link_menu" href="querocomprar/">Quero COMPRAR</a></span><a href="#"></a></td>
        <td height="22" align="center" onClick=mClk(this) onMouseOver="mOvr(this,'#98AF85')" 
                onMouseOut="mOut(this,'')">
<a class="link_menu" href="querotrocar/">Quero TROCAR</a></td>
        <td height="22" align="center" onClick=mClk(this) onMouseOver="mOvr(this,'#98AF85')" 
                onMouseOut="mOut(this,'')">
<a class="link_menu" href="meunegociecomigo/">Meu Negocie Comigo</a></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><em><img src="img/4px.gif" width="4" height="4"></em></td>
  </tr>
</table>
 <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="borda_todos">
   <tr>
     <td valign="top">       <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td valign="top" background="img/fundo_claro.gif" class="borda_direita"><table width="100%" border="0" cellpadding="0" cellspacing="0">
             <tr>
               <td background="img/fundo.gif" class="fonte_14"><table width="100%" border="0" cellspacing="5" cellpadding="5">
                 <tr>
                   <td><strong>BUSCA</strong></td>
                 </tr>
               </table>                 </td>
              </tr>
             <tr>
               <td><table width="100%" border="0" cellspacing="4" cellpadding="4">
                 <tr>
                   <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                     <tr>
                     <form method="post" name="busca" action="busca/busca.asp">
                       <td>
						<select name="select" id="select4" class="form" size="1">
                           <option selected value="#">Procurar em...</option>
                           <option value="categorias">Categorias</option>
                           <option value="usuarios">Membros</option>
                           <option value="produtos">Produtos</option>
                           <option value="help">Tópico de Ajuda</option>
                       </select></td>
                       <td></td>
                     </tr>
                     <tr>
                       <td colspan="2"><img src="img/5px.gif"></td>
                       </tr>
                     <tr>
                       <td>
						<input name="busca" type="text" id="buscar42" size="18" class="form"></td>
                       <td>
						<a href="javascript:document.busca.submit()">
						<input name="bot_ok42" type="image" src="img/ok.gif" align="middle" width="27" height="19" border="0"></a></td>
						</form>
                     </tr>
                     <tr>
                       <td colspan="2">
						<img src="img/5px.gif" width="5" height="5"></td>
                       </tr>
                     <tr>
                       <td colspan="2"><a href="#" class="link_menor">Busca Avan&ccedil;ada</a></td>
                     </tr>
                     <tr>
                       <td></td>
                       <td></td>
                     </tr>
                   </table></td>
                 </tr>
               </table></td>
              </tr>
           </table>
             <table width="100%" border="0" cellpadding="0" cellspacing="0">
               <tr>
                 <td background="img/fundo.gif" class="fonte_14"><table width="100%" border="0" cellspacing="5" cellpadding="5">
                     <tr>
                       <td><strong>LOGIN</strong></td>
                     </tr>
                 </table></td>
               </tr>
               <tr>
                 <td><table width="100%" border="0" cellspacing="4" cellpadding="4">
                   <tr>
                     <form method="post" name="login" action="meunegociecomigo/login.asp">
                       <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                                      </form>
                   <tr>
                     <td>Login</td>
                     <td></td>
                   </tr>
                   <tr>
                     <td>
						<input name="usuario" type="text" id="buscar223" size="18" class="form"></td>
                     <td></td>
                   </tr>
                   <tr>
                     <td>Senha</td>
                     <td></td>
                   </tr>
                   <tr>
                     <td>
						<input name="senha" type="password" id="buscar24" size="18" class="form"></td>
                     <td><a href="javascript:document.login.submit()">
                       <input name="bot_ok22" type="image" src="img/ok.gif" align="middle" width="27" height="19" border="0">
                     </a></td>
                     </form>
                   </tr>
                 </table></td>
               </tr>
                         <tr>
                           <td><a href="#" class="link_menor">Esqueci a  senha!</a></td>
                         </tr>
                         <tr>
                           <td>
							<img src="img/5px.gif" width="5" height="5"></td>
                          </tr>
                         <tr>
                           <td>
                             <input type="checkbox" name="checkbox2" value="checkbox">
      Lembrar login</td>
                         </tr>
                       
                 </table></td>
        </tr>
     </table>           </td>
           <td width="540" valign="top">
			<table width="100%" border="0" cellpadding="0" cellspacing="5" background="img/fundo_claro.gif">
             <tr>
               <td><div align="center"><strong>Existem </strong>
				<font color="#006600"><strong><%=intTotOnLine%></strong></font><strong> pessoas online e<font color="#006600"> 75.596.327 </font>produtos &agrave; venda ou troca</strong></div></td>
              </tr>
           </table>
             <table width="100%" border="0" cellpadding="5" cellspacing="5">
               <tr>
                 <td><table width="100%" border="0" align="center" cellpadding="5" cellspacing="5">
                   <tr>
                     <td width="20%">
						<img src="img/produtos.gif" width="87" height="75"></td>
                     <td width="80%"> NegocieComigo &eacute; o melhor lugar para Comprar, Vender ou Trocar seus produtos de forma online.</td>
                   </tr>
                 </table>                   </td>
               </tr>
             </table>
             <table width="524" border="0" align="center" cellpadding="5" cellspacing="5" background="img/fundo_claro.gif">
               <tr bordercolor="ffffff">
                 <td width="70%"><div align="center">Registre-se agora para comprar, vender ou trocar GRATUITAMENTE!</div></td>
                 <form action="cadastro/index.asp">
                 <td width="23%"><div align="center">
                    <input name="registro" type="submit" class="botao" value="» | Registrar">
                    </div></td>
                 </form>
               </tr>
             </table>
             <table width="100%" border="0" cellpadding="1" cellspacing="1">
               <tr>
                 <td width="67%" valign="top"><table width="100%" border="0" cellspacing="3" cellpadding="3">
                   <tr>
                     <td height="40" background="img/fundo_cima.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                       <tr>
                         <td width="10">&nbsp;</td>
                         <td><strong><font color="#FFFFFF" size="4">Categorias</font></strong> </td>
                       </tr>
                     </table>                       </td>
                   </tr>
                 </table>                   
                   <table width="100%" border="0" cellpadding="4" cellspacing="4">
                     <tr>
                       <td width="50%">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Arte</a></td>
                       <td width="50%">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Instrumentos Musicais</a></td>
                     </tr>
                     <tr>
                       <td width="50%">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Brinquedos</a></td>
                       <td width="50%"><span class="link_categorias">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">J&oacute;ias e Rel&oacute;gios</a></span></td>
                     </tr>
                     <tr>
                       <td width="50%">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Coisas do Beb&ecirc;</a></td>
                       <td width="50%"><span class="link_categorias">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Livros e CD&acute;s</a></span></td>
                     </tr>
                     <tr>
                       <td width="50%">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Cole&ccedil;&otilde;es</a></td>
                       <td width="50%"><span class="link_categorias">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Material de Constru&ccedil;&atilde;o</a></span></td>
                     </tr>
                     <tr>
                       <td width="50%"><span class="link_categorias">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Eletrodom&eacute;sticos</a></span></td>
                       <td width="50%">
						<img src="img/115.gif" border="0" align="absmiddle"><span class="link_categorias"><a href="#" class="link_categorias">M&oacute;veis e Decora&ccedil;&atilde;o</a></span></td>
                     </tr>
                     <tr>
                       <td width="50%"><span class="link_categorias">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Eletr&ocirc;nicos</a></span></td>
                       <td width="50%">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">&Oacute;tica e Fotografia</a></td>
                     </tr>
                     <tr>
                       <td width="50%"><span class="link_categorias">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Esporte</a></span></td>
                       <td width="50%">
						<img src="img/115.gif" border="0" align="absmiddle"><span class="link_categorias"><a href="#" class="link_categorias">Pesca e Camping</a></span></td>
                     </tr>
                     <tr>
                       <td width="50%">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Im&oacute;veis</a></td>
                       <td width="50%"><span class="link_categorias">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Telefonia</a></span></td>
                     </tr>
                     <tr>
                       <td width="50%">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Industria e Com&eacute;rcio</a></td>
                       <td width="50%"><span class="link_categorias">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Ve&iacute;culos</a></span></td>
                     </tr>
                     <tr>
                       <td width="50%">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Inform&aacute;tica</a></td>
                       <td width="50%"><span class="link_categorias">
						<img src="img/115.gif" border="0" align="absmiddle"><a href="#" class="link_categorias">Vestu&aacute;rios</a></span></td>
                     </tr>
                   </table>
                   <br>
                   <table width="100%" border="0" align="center" cellpadding="5" cellspacing="5">
                     <tr valign="top">
                       <td><span class="link_categorias">
						<img src="img/carro.gif" width="60" height="41" align="middle"></span></td>
                       <td valign="top"><div align="center"><span class="link_categorias"><a href="#">NegocieComigo Motors</a><br>
            Mais de <strong>1.000</strong> carros</span><span class="link_categorias"></span></div></td>
                       <td valign="top"><div align="center"><span class="link_categorias">
						<a href="querocomprar/?preco=1,00">A partir de R$ 1 de reserva</a></span></div></td>
                       <td valign="top"><span class="link_categorias"><a href="#">Lojas</a></span></td>
                     </tr>
                 </table>                 </td>
                 <td width="33%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                   <tr>
                     <td><table width="100%" border="0" cellpadding="3" cellspacing="3">
                       <tr>
                         <td height="40" background="img/fundo_cima.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
                             <td width="10">&nbsp;</td>
                             <td><strong><font color="#FFFFFF">N&atilde;o conhece o NegocieComigo?</font></strong></td>
                           </tr>
                         </table>                           </td>
                       </tr>
                       <tr>
                         <td height="40" background="img/fundo_claro.gif"><table width="100%" border="0" cellpadding="2" cellspacing="2">
                           <tr>
                             <td>&nbsp;</td>
                             <td><a href="#">Como funciona?</a></td>
                           </tr>
                           <tr>
                             <td>&nbsp;</td>
                             <td><a href="#">&Eacute; seguro? </a></td>
                           </tr>
                           <tr>
                             <td>&nbsp;</td>
                             <td><a href="#">Quero me registrar</a></td>
                           </tr>
                         </table></td>
                       </tr>
                     </table>
                     </td>
                   </tr>
                 </table>                   
                   <table width="100%" border="0" cellspacing="5" cellpadding="5">
                     <tr>
                       <td height="40" background="img/fundo_cima.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                         <tr>
                           <td width="10">&nbsp;</td>
                           <td><strong><font color="#FFFFFF">Playstation</font></strong></td>
                         </tr>
                       </table>                         </td>
                     </tr>
                     <tr>
                       <td background="img/fundo_claro.gif">
						<img src="img/playstation.jpg" width="150" height="150">
                           <table width="100%" border="0" cellpadding="0" cellspacing="0">
                             <tr>
                               <td>&nbsp;</td>
                               <td><a href="#">Games</a></td>
                             </tr>
                             <tr>
                               <td>&nbsp;</td>
                               <td><a href="#">Consoles</a></td>
                             </tr>
                             <tr>
                               <td>&nbsp;</td>
                               <td><p><a href="#">Acess&oacute;rios</a></p></td>
                             </tr>
                             <tr>
                               <td>&nbsp;</td>
                               <td><a href="#">+ Mais </a></td>
                             </tr>
                         </table></td>
                     </tr>
                   </table></td>
               </tr>
             </table>             
             <table width="100%" border="0" cellpadding="0" cellspacing="0">
                 <tr>
                   <td width="100%" valign="top" align="center">
					<table width="100%" border="0" cellpadding="7" cellspacing="7" background="img/fundo.gif" bgcolor="cccccc">
                     <tr>
                       <td><div align="center"><span class="link_categorias"><strong class="fonte_14"><font color="#FF0000"><strong class="fonte_14"><font color="#FF0000"><font color="#FFFF00">OFERTAS!</font> &nbsp;&nbsp;&nbsp;</font></strong></font><strong class="fonte_14"><font color="#FF0000"><font color="#FFFF00">OFERTAS!</font> &nbsp;&nbsp;&nbsp;</font></strong></strong><strong class="fonte_14"><font color="#FF0000"><font color="#FFFF00">OFERTAS!</font> &nbsp;&nbsp;&nbsp;</font></strong></span><span class="link_categorias"><strong class="fonte_14"><font color="#FF0000"><font color="#FFFF00">OFERTAS!</font> &nbsp;&nbsp;&nbsp;</font></strong></span><span class="link_categorias"><strong class="fonte_14"><font color="#FF0000"><font color="#FFFF00">OFERTAS!</font> &nbsp;&nbsp;&nbsp;</font></strong></span><span class="link_categorias"><strong class="fonte_14"><font color="#FF0000"><font color="#FFFF00">OFERTAS!</font></font></strong></span></div></td>
                     </tr>
                   </table></td>
                 </tr>
                 <tr>
                   <td width="100%" height="21" align="center" valign="top">                       <table width="100%" border="0" cellpadding="5" cellspacing="5" bgcolor="ffffff">
                     <tr>
                       <td><div align="center">
						<img src="img/foto.gif" alt="Com Foto!" align="absmiddle"> foto 
						<img src="img/local.gif" width="30" height="15" align="absmiddle">&nbsp; localizado na sua &aacute;rea 
						<img src="img/preco.gif" alt="Compre Agora!" width="30" height="18" align="absmiddle">&nbsp;pre&ccedil;o fixo                          
						<img src="img/reserva.gif" align="absmiddle">&nbsp;pre&ccedil;o de reserva 
						<img src="img/semreserva.gif" align="absmiddle">&nbsp;sem reserva </div></td>
                     </tr>
                   </table>
                     <table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="ffffff">
                       <tr background="img/fundo_claro.gif">
                         <td colspan="5"></td>
                       </tr>
                       <tr bgcolor="e9e9e9">
                         <td width="16%"><div align="center"><span class="link_categorias"><strong>Foto</strong></span></div></td>
                         <td width="52%"><p align="center"><span class="link_categorias"><b>T&iacute;tulo</b></span></td>
                         <td width="13%" nowrap>
                          <p align="center"><span class="link_categorias"><b> Pre&ccedil;o</b></span></td>
                         <td width="7%" nowrap>
                          <p align="center"><span class="link_categorias"><b>Oferta</b></span></td>
                         <td width="12%" nowrap><span class="link_categorias"><b>Fechamento</b></span></td>
                       </tr>
                       <tr>
<!--
...............................................................................
Início da tabela destaques
...............................................................................
-->
   <%
  While Not TblDestaques.EOF
  
    if DateDiff("d",date(),TblDestaques("fechamento")) >= 0 then
       Response.Write "<a href=querocomprar/detalhe_produto.asp?"&TblDestaques("id")&"><tr style=""Cursor: hand"" onMouseOver=""this.style.background='#FFFFD9'"" onMouseOut=""this.style.background='#FFFFFF'"">"
       Response.Write "<td><img src="&TblDestaques("foto")&" width=90 height=89 hspace=5 vspace=5 border=1></td>"
       Response.Write "</font>"
       Response.Write "<td>"
       Response.Write "<p align=left><span class=link_categorias><strong>"&TblDestaques("titulo")&"</strong></span></td>"
       Response.Write "<font color=#464646>"
       Response.Write "<td>"
       Response.Write "<p align=center>R$ "&TblDestaques("preco")&"</td>"
       Response.Write "<td align=center>"
       Response.Write ""&TblDestaques("oferta")&"</td>"
       Response.Write "<td align=center>"
       if DateDiff("d",date(),TblDestaques("fechamento")) <= 0 then
          Response.Write "Hoje"
       else
       Response.Write ""&DateDiff("d",date(),TblDestaques("fechamento"))&" dia(s)</td>"
       end if
       Response.Write "</tr></a>"
    else
    end if
  
  TblDestaques.Movenext
  Wend
%>
   
<!--
...............................................................................
Fim da tabela destaques
...............................................................................
-->
                       </tr



                       </table></td></tr>
           </table>           </td></tr>
</table>     </td>
   </tr>
 </table>
 <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" class="borda_laterais">
   <tr>
     <td background="img/fundo.gif"><span class="link_categorias">
		<img src="img/3px.gif"></span></td>
   </tr>
   <tr>
     <td>
		<table width="100%" border="0" cellpadding="3" cellspacing="3" background="img/fundo_claro.gif">
       <tr valign="middle">
         <td><div align="center"><span class="link_categorias"><a href="gera.asp?Gerar=Xerife">Xerife</a> 
			<img src="img/xerif.gif" width="18" height="31" align="absmiddle"></span><span class="link_categorias"><a href="gera.asp?Gerar=sugestoes"></a></span></div></td>
         <td><div align="center"><span class="link_categorias">
			<a href="institucional/sugestoes.asp">Sugest&otilde;es?</a> 
			<img src="img/sugestoes.gif" width="31" height="33" align="absmiddle"></span></div></td>
         <td><div align="center"><span class="link_categorias"><strong><a href="gera.asp?Gerar=indique">Indique 
			este site</a></strong></span></div></td>
         <td><div align="center"><span class="link_categorias"><strong><a href="#" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.negociecomigo.com');">Torne este site sua p&aacute;gina principal</a></strong></span></div></td>
         <td>
			<p align="center"><a href="faleconosco/">Fale Conosco</a></td>
         <td><div align="center"><span class="link_categorias"><strong><a href="#topo">Topo</a></strong></span></div></td>
       </tr>
     </table></td>
   </tr>
 </table>
 <table width="700" border="0" align="center" cellpadding="3" cellspacing="3" class="borda_todos">
   <tr>
     <td colspan="2" bgcolor="#FFFFFF">
       <table border="0" align="center" cellpadding="1" cellspacing="2">
         <tr>
           <td height="2"><span class="link_categorias">|</span></td>
           <td height="2" class="fonte_menor"><div align="center"><span class="link_categorias"><b><a href="http://www.negociecomigo.com/index.php">Home</a></b></span></div></td>
           <td valign="top" class="fonte_menor"><div align="center"><span class="link_categorias">|</span></div></td>
           <td background="" class="fonte_menor"><span class="link_categorias">
			<a href="navegar/">Navegar</a> |</span></td>
           <td height="2" background="" class="fonte_menor"><div align="center"><span class="link_categorias"><b> 
			<a title="Clique para anunciar seu produto!" href="querovender/">Quero Vender</a></b></span></div></td>
           <td height="2" background="menu_gifs/menufu_cinza.gif" class="fonte_menor">
             <div align="center"><span class="link_categorias">|</span></div></td>
           <td height="2" background="" class="fonte_menor">
             <div align="center"><span class="link_categorias"><b>
				<a title="Clique para anunciar seu produto!" href="querocomprar/">Quero Comprar</a></b></span></div></td>
           <td height="2" class="fonte_menor">
             <div align="center"><span class="link_categorias">|</span></div></td>
           <td height="2" background="" class="fonte_menor">
             <div ><span class="link_categorias"><b> 
				<a title="Clique para anunciar seu produto!" href="querotrocar/">Quero Trocar</a></b></span></div></td>
           <td><span class="link_categorias">|<b> <a href="meunegociecomigo/">Meu Negocie Comigo</a></b></span></td>
           <td><span class="link_categorias">|</span></td>
         </tr>
       </table>       </td>
   </tr>
   <tr>
     <td colspan="2"><div align="center"><span class="link_categorias">O uso deste site implica na aceita&ccedil;&atilde;o dos 
		<a target="_blank" href="institucional/termos_condicoes.asp">Termos e Condi&ccedil;&otilde;es</a> Gerais do Negociecomigo.com 
		ltda e da <a href="institucional/politicadeprivacidade.asp">
		<span style="font-weight: 400">Pol&iacute;tica de Privacidade</span></a>. <br>
     Copyright &copy; 2004-2005 Negociecomigo.com ltda.</span></div></td>
   </tr>
 </table>
</body>
 </html>

