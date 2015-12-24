<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" dir="ltr" lang="pt-BR"><head><title>phpMyAdmin</title>




<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- base href="http://localhost/mysql/" -->
<script language="JavaScript" type="text/javascript">
<!--
    /* added 2004-06-10 by Michael Keck
     *       we need this for Backwards-Compatibility and resolving problems
     *       with non DOM browsers, which may have problems with css 2 (like NC 4)
    */
    var isDOM      = (typeof(document.getElementsByTagName) != 'undefined'
                      && typeof(document.createElement) != 'undefined')
                   ? 1 : 0;
    var isIE4      = (typeof(document.all) != 'undefined'
                      && parseInt(navigator.appVersion) >= 4)
                   ? 1 : 0;
    var isNS4      = (typeof(document.layers) != 'undefined')
                   ? 1 : 0;
    var capable    = (isDOM || isIE4 || isNS4)
                   ? 1 : 0;
    // Uggly fix for Opera and Konqueror 2.2 that are half DOM compliant
    if (capable) {
        if (typeof(window.opera) != 'undefined') {
            var browserName = ' ' + navigator.userAgent.toLowerCase();
            if ((browserName.indexOf('konqueror 7') == 0)) {
                capable = 0;
            }
        } else if (typeof(navigator.userAgent) != 'undefined') {
            var browserName = ' ' + navigator.userAgent.toLowerCase();
            if ((browserName.indexOf('konqueror') > 0) && (browserName.indexOf('konqueror/3') == 0)) {
                capable = 0;
            }
        } // end if... else if...
    } // end if
//    document.writeln('<link rel="stylesheet" type="text/css" href="./css/phpmyadmin.css.php?lang=ptbr-utf-8&amp;js_frame=right&amp;js_isDOM=' + isDOM + '" />');
//-->
</script><!-- link rel="stylesheet" type="text/css" href="sql_arquivos/phpmyadmin.css" -->


    <script type="text/javascript" language="javascript">
    <!--
    // Updates the title of the frameset if possible (ns4 does not allow this)
    if (typeof(parent.document) != 'undefined' && typeof(parent.document) != 'unknown'
        && typeof(parent.document.title) == 'string') {
        parent.document.title = 'localhost >> localhost >> iscos  >> tab03_clientes | phpMyAdmin 2.6.1';
    }

    // js form validation stuff
    var errorMsg0   = 'Faltando valores do form !';
    var errorMsg1   = 'Isto não é um número!';
    var errorMsg2   = ' não é um número de registro valido!';
    var noDropDbMsg = 'O comando "DROP DATABASE" está desabilitado.';
    var confirmMsg  = 'Confirma : ';
    var confirmMsgDropDB  = 'You are about to DESTROY a complete database!';
    //-->
    </script>
    <script src="sql_arquivos/functions.js" type="text/javascript" language="javascript"></script>

        <meta name="OBGZip" content="true"></head><noscript>
    <!-- link rel="stylesheet" type="text/css" href="./css/phpmyadmin.css.php?lang=ptbr-utf-8&amp;js_frame=right" / -->
</noscript><body bgcolor="#f5f5f5">
    <table id="serverinfo" border="0" cellpadding="0" cellspacing="0">
    <tbody><tr>
        <td class="serverinfo">Server:&nbsp;<a href="http://localhost/mysql/main.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci"><img src="sql_arquivos/s_host.png" alt="localhost" border="0" height="16" width="16">localhost</a>
</td>

        <td class="serverinfo"><div></div></td>
            <td class="serverinfo">Banco de Dados:&nbsp;<a href="http://localhost/mysql/db_details_structure.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos"><img src="sql_arquivos/s_db.png" alt="iscos" border="0" height="16" width="16">iscos</a>
</td>

        <td class="serverinfo"><div></div></td>
            <td class="serverinfo">Tabela:&nbsp;<a href="http://localhost/mysql/tbl_properties_structure.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes"><img src="sql_arquivos/s_tbl.png" alt="tab03_clientes" border="0" height="16" width="16">tab03_clientes</a>
</td>

    </tr>
</tbody></table><!-- top menu -->
<table id="topmenu" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody><tr>
        <td class="nav" align="left" nowrap="nowrap" valign="bottom">            <table border="0" cellpadding="0" cellspacing="0"><tbody><tr>                <td nowrap="nowrap"><img src="sql_arquivos/spacer.png" alt="" border="0" height="1" width="2"></td>                <td class="navSpacer"><img src="sql_arquivos/spacer.png" alt="" border="0" height="1" width="1"></td>
        <td class="navNormal" nowrap="nowrap">
            <a href="http://localhost/mysql/tbl_properties_structure.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;goto=tbl_properties.php&amp;back=tbl_properties.php"><img src="sql_arquivos/b_props.png" alt="Structure" align="middle" border="0" height="16" hspace="2" width="16">Structure</a>
        </td>
        <td class="navSpacer"><img src="sql_arquivos/spacer.png" alt="" border="0" height="1" width="1"></td>
        <td class="navActive" nowrap="nowrap">
            <a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;goto=tbl_properties.php&amp;back=tbl_properties.php&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60&amp;pos=0"><img src="sql_arquivos/b_browse.png" alt="Visualiza" align="middle" border="0" height="16" hspace="2" width="16">Visualiza</a>
        </td>
        <td class="navSpacer"><img src="sql_arquivos/spacer.png" alt="" border="0" height="1" width="1"></td>
        <td class="navNormal" nowrap="nowrap">
            <a href="http://localhost/mysql/tbl_properties.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;goto=tbl_properties.php&amp;back=tbl_properties.php"><img src="sql_arquivos/b_sql.png" alt="SQL" align="middle" border="0" height="16" hspace="2" width="16">SQL</a>
        </td>
        <td class="navSpacer"><img src="sql_arquivos/spacer.png" alt="" border="0" height="1" width="1"></td>
        <td class="navNormal" nowrap="nowrap">
            <a href="http://localhost/mysql/tbl_select.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;goto=tbl_properties.php&amp;back=tbl_properties.php"><img src="sql_arquivos/b_search.png" alt="Search" align="middle" border="0" height="16" hspace="2" width="16">Search</a>
        </td>
        <td class="navSpacer"><img src="sql_arquivos/spacer.png" alt="" border="0" height="1" width="1"></td>
        <td class="navNormal" nowrap="nowrap">
            <a href="http://localhost/mysql/tbl_change.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;goto=tbl_properties.php&amp;back=tbl_properties.php"><img src="sql_arquivos/b_insrow.png" alt="Insere" align="middle" border="0" height="16" hspace="2" width="16">Insere</a>
        </td>
        <td class="navSpacer"><img src="sql_arquivos/spacer.png" alt="" border="0" height="1" width="1"></td>
        <td class="navNormal" nowrap="nowrap">
            <a href="http://localhost/mysql/tbl_properties_export.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;goto=tbl_properties.php&amp;back=tbl_properties.php&amp;single_table=true"><img src="sql_arquivos/b_tblexport.png" alt="Export" align="middle" border="0" height="16" hspace="2" width="16">Export</a>
        </td>
        <td class="navSpacer"><img src="sql_arquivos/spacer.png" alt="" border="0" height="1" width="1"></td>
        <td class="navNormal" nowrap="nowrap">
            <a href="http://localhost/mysql/tbl_properties_operations.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;goto=tbl_properties.php&amp;back=tbl_properties.php"><img src="sql_arquivos/b_tblops.png" alt="Operations" align="middle" border="0" height="16" hspace="2" width="16">Operations</a>
        </td>
        <td class="navSpacer"><img src="sql_arquivos/spacer.png" alt="" border="0" height="1" width="1"></td>
        <td class="navDrop" nowrap="nowrap">
            <a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;goto=tbl_properties.php&amp;back=tbl_properties.php&amp;sql_query=TRUNCATE+TABLE+%60tab03_clientes%60&amp;zero_rows=Tabela+tab03_clientes+foi+esvaziada" onclick="return confirmLink(this, 'TRUNCATE TABLE `tab03_clientes`')"><img src="sql_arquivos/b_empty.png" alt="Limpa" align="middle" border="0" height="16" hspace="2" width="16">Limpa</a>
        </td>
        <td class="navSpacer"><img src="sql_arquivos/spacer.png" alt="" border="0" height="1" width="1"></td>
        <td class="navDrop" nowrap="nowrap">
            <a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;goto=tbl_properties.php&amp;back=tbl_properties.php&amp;reload=1&amp;purge=1&amp;sql_query=DROP+TABLE+%60tab03_clientes%60&amp;zero_rows=Tabela+tab03_clientes+foi+deletada" onclick="return confirmLink(this, 'DROP TABLE `tab03_clientes`')"><img src="sql_arquivos/b_deltbl.png" alt="Elimina" align="middle" border="0" height="16" hspace="2" width="16">Elimina</a>
        </td>
        <td class="navSpacer"><img src="sql_arquivos/spacer.png" alt="" border="0" height="1" width="1"></td>
                <td nowrap="nowrap"><img src="sql_arquivos/spacer.png" alt="" border="0" height="1" width="2"></td>            </tr></tbody></table>
        </td>
    </tr>
</tbody></table>

<br>

<script type="text/javascript" language="javascript1.2">
<!--
if (typeof(document.getElementById) != 'undefined'
    && typeof(window.parent.frames['nav']) != 'undefined'
    && typeof(window.parent.frames['nav'].document) != 'undefined' && typeof(window.parent.frames['nav'].document) != 'unknown'
    && (window.parent.frames['nav'].document.getElementById('tbl_25aa3662737a44dec92a42b08b08ce75'))
    && typeof(window.parent.frames['nav'].document.getElementById('tbl_25aa3662737a44dec92a42b08b08ce75')) != 'undefined'
    && typeof(window.parent.frames['nav'].document.getElementById('tbl_25aa3662737a44dec92a42b08b08ce75').title) == 'string') {
    window.parent.frames['nav'].document.getElementById('tbl_25aa3662737a44dec92a42b08b08ce75').title = '(835 Colunas)';
}
//-->
</script>

<br>
<div align="left">
    <table border="0" cellpadding="5" cellspacing="1">
    <tbody><tr>
        <th bgcolor="#d3dce3">
            <b>Mostrando registros  0 - 29 (835 total, Query took 0.1166 sec)</b>
        </th>
    </tr>

    <tr>
        <td bgcolor="#e5e5e5">

            <b>comando SQL:</b>&nbsp;<br>
            <span class="syntax"><span class="syntax_alpha syntax_alpha_reservedWord">SELECT</span>  <span class="syntax_punct">*</span> <br><span class="syntax_alpha syntax_alpha_reservedWord">FROM</span>  <span class="syntax_quote syntax_quote_backtick">`tab03_clientes`</span> <br><span class="syntax_alpha syntax_alpha_reservedWord">LIMIT</span> <span class="syntax_digit syntax_digit_integer">0</span> <span class="syntax_punct syntax_punct_listsep">,</span> <span class="syntax_digit syntax_digit_integer">30</span></span>
        </td>
    </tr>
    <tr><td align="center" bgcolor="#e5e5e5">&nbsp;[<a href="http://localhost/mysql/tbl_properties.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60&amp;show_query=1#querybox" onclick="focus_querywindow('SELECT+%2A+FROM+%60tab03_clientes%60'); return false;">Edita</a>]&nbsp;[<a href="http://localhost/mysql/read_dump.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;sql_query=EXPLAIN+SELECT+%2A+FROM+%60tab03_clientes%60">Explain SQL</a>]&nbsp;[<a href="http://localhost/mysql/read_dump.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;show_query=1&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60&amp;show_as_php=1">Create PHP Code</a>]&nbsp;[<a href="http://localhost/mysql/read_dump.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;show_query=1&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60">Refresh</a>]</td></tr>

    </tbody></table>
</div><br>

<!-- Navigation bar -->
<table border="0" cellpadding="2" cellspacing="0">
<tbody><tr>

<td>
    &nbsp;&nbsp;&nbsp;
</td>
<td align="center">
    <form action="sql.php" method="post" onsubmit="return (checkFormElementInRange(this, 'session_max_rows', 1) && checkFormElementInRange(this, 'pos', 0, 834))">
        <input name="lang" value="ptbr-utf-8" type="hidden">
<input name="server" value="1" type="hidden">
<input name="collation_connection" value="utf8_general_ci" type="hidden">
<input name="db" value="iscos" type="hidden">
<input name="table" value="tab03_clientes" type="hidden">
        <input name="sql_query" value="SELECT+%2A+FROM+%60tab03_clientes%60" type="hidden">
        <input name="goto" value="tbl_properties_structure.php" type="hidden">
        <input name="dontlimitchars" value="0" type="hidden">
        <input name="navig" value="Mostrar :" type="submit">
        <input name="session_max_rows" size="3" value="30" class="textfield" onfocus="this.select()" type="text">
        colunas começando de
        <input name="pos" size="6" value="30" class="textfield" onfocus="this.select()" type="text">
        <br>
        no modo
            <select name="disp_direction">
                <option value="horizontal" selected="selected">horizontal</option>
                <option value="horizontalflipped">horizontal (rotated headers)</option>
                <option value="vertical">vertical</option>
            </select>
            e repetindo cabeçalhos após
            <input size="3" name="repeat_cells" value="100" class="textfield" type="text">
            células
    </form>
</td>
<td>
    &nbsp;&nbsp;&nbsp;
</td>

<td>
    <form action="sql.php" method="post">
        <input name="lang" value="ptbr-utf-8" type="hidden">
<input name="server" value="1" type="hidden">
<input name="collation_connection" value="utf8_general_ci" type="hidden">
<input name="db" value="iscos" type="hidden">
<input name="table" value="tab03_clientes" type="hidden">
        <input name="sql_query" value="SELECT+%2A+FROM+%60tab03_clientes%60" type="hidden">
        <input name="pos" value="30" type="hidden">
        <input name="session_max_rows" value="30" type="hidden">
        <input name="disp_direction" value="horizontal" type="hidden">
        <input name="repeat_cells" value="100" type="hidden">
        <input name="goto" value="tbl_properties_structure.php" type="hidden">
        <input name="dontlimitchars" value="0" type="hidden">
        <input name="navig" value="&nbsp;&gt;&nbsp;" title="Próximo" type="submit">
    </form>
</td>
<td>
    <form action="sql.php" method="post" onsubmit="return true">
        <input name="lang" value="ptbr-utf-8" type="hidden">
<input name="server" value="1" type="hidden">
<input name="collation_connection" value="utf8_general_ci" type="hidden">
<input name="db" value="iscos" type="hidden">
<input name="table" value="tab03_clientes" type="hidden">
        <input name="sql_query" value="SELECT+%2A+FROM+%60tab03_clientes%60" type="hidden">
        <input name="pos" value="810" type="hidden">
        <input name="session_max_rows" value="30" type="hidden">
        <input name="disp_direction" value="horizontal" type="hidden">
        <input name="repeat_cells" value="100" type="hidden">
        <input name="goto" value="tbl_properties_structure.php" type="hidden">
        <input name="dontlimitchars" value="0" type="hidden">
        <input name="navig" value="&gt;&gt;" title="Fim" type="submit">
    </form>
</td>
           <td>
       &nbsp;&nbsp;&nbsp;
   </td>
   <td>
                <form>
        <br>Page number:<select name="goToPage" onchange="goToUrl(this, 'sql.php?sql_query=SELECT+%2A+FROM+%60tab03_clientes%60&session_max_rows=30&disp_direction=horizontal&repeat_cells=100&goto=tbl_properties_structure.php&dontlimitchars=0&lang=ptbr-utf-8&server=1&collation_connection=utf8_general_ci&db=iscos&table=tab03_clientes&');">
                <option selected="selected" style="font-weight: bold;" value="0">1</option>
                <option value="30">2</option>
                <option value="60">3</option>
                <option value="90">4</option>
                <option value="120">5</option>
                <option value="150">6</option>
                <option value="180">7</option>
                <option value="210">8</option>
                <option value="240">9</option>
                <option value="270">10</option>
                <option value="300">11</option>
                <option value="330">12</option>
                <option value="360">13</option>
                <option value="390">14</option>
                <option value="420">15</option>
                <option value="450">16</option>
                <option value="480">17</option>
                <option value="510">18</option>
                <option value="540">19</option>
                <option value="570">20</option>
                <option value="600">21</option>
                <option value="630">22</option>
                <option value="660">23</option>
                <option value="690">24</option>
                <option value="720">25</option>
                <option value="750">26</option>
                <option value="780">27</option>
                <option value="810">28</option>
 </select>        </form>
    </td>

</tr>
</tbody></table>


<form action="sql.php" method="post">
                    <input name="lang" value="ptbr-utf-8" type="hidden">
                    <input name="server" value="1" type="hidden">
                    <input name="collation_connection" value="utf8_general_ci" type="hidden">
                    <input name="db" value="iscos" type="hidden">
                    <input name="table" value="tab03_clientes" type="hidden">
<input name="pos" value="0" type="hidden">
<input name="session_max_rows" value="30" type="hidden">
<input name="disp_direction" value="horizontal" type="hidden">
<input name="repeat_cells" value="100" type="hidden">
<input name="dontlimitchars" value="0" type="hidden">
Sort by key: <select name="sql_query">
<option value="SELECT * FROM `tab03_clientes`  ORDER BY `tab03_cpf` ASC , `tab03_nome` ASC , `tab03_cidade` ASC , `tab03_uf` ASC">tab03_cpf (Ascendente)</option>
<option value="SELECT * FROM `tab03_clientes`  ORDER BY `tab03_cpf` DESC , `tab03_nome` DESC , `tab03_cidade` DESC , `tab03_uf` DESC">tab03_cpf (Descendente)</option>
<option value="SELECT * FROM `tab03_clientes` " selected="selected">Nenhum</option>
</select>&nbsp;
<input value="Executa" type="submit">
</form>
<form method="post" action="tbl_row_delete.php" name="rowsDeleteForm">
    <input name="lang" value="ptbr-utf-8" type="hidden">
    <input name="server" value="1" type="hidden">
    <input name="collation_connection" value="utf8_general_ci" type="hidden">
    <input name="db" value="iscos" type="hidden">
    <input name="table" value="tab03_clientes" type="hidden">
<input name="disp_direction" value="horizontal" type="hidden">
<input name="repeat_cells" value="100" type="hidden">
<input name="goto" value="sql.php" type="hidden">
<input name="dontlimitchars" value="0" type="hidden">
<!-- Results table -->
<table id="table_results" border="0" cellpadding="2" cellspacing="1">
<!-- Results table headers -->
<tbody><tr>


<th class="td" colspan="3" align="center">
    <a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60&amp;pos=0&amp;session_max_rows=30&amp;pos=0&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;goto=tbl_properties_structure.php&amp;dontlimitchars=1">
        <img src="sql_arquivos/s_fulltext.png" alt="Textos completos" title="Textos completos" border="0" height="20" width="50"></a>
</th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_orddesp%60+ASC" title="Ordena">tab03_orddesp</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_cpf%60+ASC" title="Ordena">tab03_cpf</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_nome%60+ASC" title="Ordena">tab03_nome</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_rg%60+ASC" title="Ordena">tab03_rg</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_fones%60+ASC" title="Ordena">tab03_fones</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_endereco%60+ASC" title="Ordena">tab03_endereco</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_nr%60+ASC" title="Ordena">tab03_nr</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_complemento%60+ASC" title="Ordena">tab03_complemento</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_bairro%60+ASC" title="Ordena">tab03_bairro</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_cep%60+ASC" title="Ordena">tab03_cep</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_cidade%60+ASC" title="Ordena">tab03_cidade</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_uf%60+ASC" title="Ordena">tab03_uf</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_site%60+ASC" title="Ordena">tab03_site</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_email%60+ASC" title="Ordena">tab03_email</a></div>
    </th>

<th>
        <div class="nowrap"><a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60++ORDER+BY+%60tab03_obs%60+ASC" title="Ordena">tab03_obs</a></div>
    </th>

</tr>

<!-- Results table body -->

<tr onmouseover="setPointer(this, 0, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 0, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 0, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#ffcc99" valign="top" width="16">
        <input id="id_rows_to_delete0" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2740530426900%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27CARLOS+CESAR+DE+OLIVEIRA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%271.997.757-9%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413592626%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+ALBERICO+FLORES+BUENO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27203%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27B+ALTO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782840170%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete0','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2740530426900%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27CARLOS+CESAR+DE+OLIVEIRA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%271.997.757-9%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413592626%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+ALBERICO+FLORES+BUENO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27203%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27B+ALTO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782840170%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#ffcc99" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#ffcc99" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" class="nowrap" align="right" bgcolor="#ffcc99" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">40530426900</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">CARLOS CESAR DE OLIVEIRA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">1.997.757-9/PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">0413592626</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">R ALBERICO FLORES BUENO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">203</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">B ALTO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">82840170</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete0');" bgcolor="#ffcc99" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 1, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 1, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 1, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#ffcc99" valign="top" width="16">
        <input id="id_rows_to_delete1" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2759834617968%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27JULIO+CESAR+MELECH%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%274.111.825-3%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+DONA+BARBARA+CID%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27230%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27APTO01%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27UBERABA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781580130%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete1','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2759834617968%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27JULIO+CESAR+MELECH%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%274.111.825-3%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+DONA+BARBARA+CID%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27230%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27APTO01%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27UBERABA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781580130%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#ffcc99" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#ffcc99" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" class="nowrap" align="right" bgcolor="#ffcc99" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">59834617968</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">JULIO CESAR MELECH</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">4.111.825-3/PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">R DONA BARBARA CID</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">230</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">APTO01</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">UBERABA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">81580130</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete1');" bgcolor="#ffcc99" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 2, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 2, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 2, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete2" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2701584674938%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27MARCOS+ROBERTO+DO+PRADO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%276.356.801-5%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413329272%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+NESTOR+VICTOR%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27863%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27A+VERDE%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2780620400%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete2','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2701584674938%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27MARCOS+ROBERTO+DO+PRADO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%276.356.801-5%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413329272%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+NESTOR+VICTOR%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27863%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27A+VERDE%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2780620400%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">01584674938</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">MARCOS ROBERTO DO PRADO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">6.356.801-5/PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">0413329272</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">R NESTOR VICTOR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">863</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">A VERDE</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">80620400</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete2');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 3, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 3, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 3, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete3" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2721660573904%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27ALDORI+HENNING%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%276.168.365-8%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413671382%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+JORN+ALCEU+CHICHORRO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27671%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27B+ALTO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782820290%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete3','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2721660573904%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27ALDORI+HENNING%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%276.168.365-8%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413671382%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+JORN+ALCEU+CHICHORRO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27671%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27B+ALTO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782820290%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">21660573904</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">ALDORI HENNING</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">6.168.365-8/PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">0413671382</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">R JORN ALCEU CHICHORRO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">671</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">B ALTO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">82820290</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete3');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 4, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 4, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 4, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete4" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2780337306000177%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27IRMAOS+PASSAURA+%26+CIA+LTDA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413762920%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27AV+MARECHAL+FLORIANO+PEIXOTO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27BOQUEIRAO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781730000%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete4','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2780337306000177%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27IRMAOS+PASSAURA+%26+CIA+LTDA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413762920%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27AV+MARECHAL+FLORIANO+PEIXOTO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27BOQUEIRAO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781730000%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">80337306000177</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">IRMAOS PASSAURA &amp; CIA LTDA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">0413762920</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">AV MARECHAL FLORIANO PEIXOTO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">BOQUEIRAO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">81730000</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete4');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 5, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 5, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 5, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete5" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2723425610910%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27JUAREZ+BAPTISTEL+DO+PRADO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+GUILHERME+MARCONCIN%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%2739%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27UBERABA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781570410%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete5','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2723425610910%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27JUAREZ+BAPTISTEL+DO+PRADO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+GUILHERME+MARCONCIN%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%2739%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27UBERABA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781570410%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">23425610910</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">JUAREZ BAPTISTEL DO PRADO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">R GUILHERME MARCONCIN</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">39</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">UBERABA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">81570410</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete5');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 6, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 6, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 6, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete6" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2700306878968%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27JUAREZ+ARANTES%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27269.882-0%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270412619360%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+MATEUS+LEME%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%271666%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27AP501%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27C+CIVICO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2780530010%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete6','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2700306878968%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27JUAREZ+ARANTES%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27269.882-0%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270412619360%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+MATEUS+LEME%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%271666%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27AP501%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27C+CIVICO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2780530010%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">00306878968</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">JUAREZ ARANTES</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">269.882-0/PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">0412619360</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">R MATEUS LEME</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">1666</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">AP501</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">C CIVICO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">80530010</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete6');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 7, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 7, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 7, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete7" name="rows_to_delete[+%60tab03_orddesp%60+%3D+022+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2702868952852%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27ANTONIO+GOMES+SEVERINO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%271.210.419%2FMG%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+JOAQUIM+S+DE+OLIVEIRA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27407%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27CENTRO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2711950000%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CAJATI%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27SP%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete7','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+022+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2702868952852%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27ANTONIO+GOMES+SEVERINO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%271.210.419%2FMG%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+JOAQUIM+S+DE+OLIVEIRA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27407%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27CENTRO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2711950000%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CAJATI%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27SP%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">022</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">02868952852</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">ANTONIO GOMES SEVERINO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">1.210.419/MG</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">R JOAQUIM S DE OLIVEIRA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">407</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">CENTRO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">11950000</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">CAJATI</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">SP</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete7');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 8, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 8, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 8, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete8" name="rows_to_delete[+%60tab03_orddesp%60+%3D+021+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2747544244849%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27OSMAR+BOISA+CASTILHO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%277.446.227%2FSP%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+HUMAITA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27327%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27CENTRO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2787200000%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CIANORTE%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete8','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+021+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2747544244849%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27OSMAR+BOISA+CASTILHO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%277.446.227%2FSP%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+HUMAITA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27327%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27CENTRO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2787200000%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CIANORTE%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">021</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">47544244849</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">OSMAR BOISA CASTILHO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">7.446.227/SP</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">R HUMAITA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">327</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">CENTRO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">87200000</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">CIANORTE</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete8');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 9, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 9, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 9, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete9" name="rows_to_delete[+%60tab03_orddesp%60+%3D+021+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2755676154934%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27CLEUZEMER+SORENE+UHLENDORF+O+SCHOVINDER%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%271.225.363%2FSC%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27AV+BUENOS+AIRES%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%272340%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27CENTRO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27PORTO+VELHO%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27RO%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete9','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+021+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2755676154934%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27CLEUZEMER+SORENE+UHLENDORF+O+SCHOVINDER%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%271.225.363%2FSC%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27AV+BUENOS+AIRES%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%272340%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27CENTRO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27PORTO+VELHO%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27RO%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">021</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">55676154934</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">CLEUZEMER SORENE UHLENDORF O SCHOVINDER</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">1.225.363/SC</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">AV BUENOS AIRES</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">2340</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">CENTRO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">PORTO VELHO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">RO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete9');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 10, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 10, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 10, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete10" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2711679000900%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27ALCIDES+RIEDI%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27934.739%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270412565674%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+HENRIQUE+CORREIA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27982%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27B+ALTO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782840270%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete10','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2711679000900%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27ALCIDES+RIEDI%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27934.739%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270412565674%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+HENRIQUE+CORREIA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27982%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27B+ALTO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782840270%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">11679000900</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">ALCIDES RIEDI</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">934.739/PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">0412565674</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">R HENRIQUE CORREIA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">982</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">B ALTO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">82840270</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete10');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 11, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 11, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 11, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete11" name="rows_to_delete[+%60tab03_orddesp%60+%3D+004+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2722490388991%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27ZAQUEU+MOARIS+NETO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%271.669.253-4%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+HERMINIA+ZANETTO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27548%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27XAXIM%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781710270%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete11','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+004+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2722490388991%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27ZAQUEU+MOARIS+NETO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%271.669.253-4%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+HERMINIA+ZANETTO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27548%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27XAXIM%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781710270%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">004</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">22490388991</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">ZAQUEU MOARIS NETO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">1.669.253-4/PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">R HERMINIA ZANETTO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">548</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">XAXIM</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">81710270</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete11');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 12, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 12, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 12, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete12" name="rows_to_delete[+%60tab03_orddesp%60+%3D+012+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2705905664900%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27ALCEU+CUNICO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+ANGELO+CUNICO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%2719%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27BARREIRINHA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782220350%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete12','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+012+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2705905664900%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27ALCEU+CUNICO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+ANGELO+CUNICO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%2719%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27BARREIRINHA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782220350%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">012</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">05905664900</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">ALCEU CUNICO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">R ANGELO CUNICO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">19</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">BARREIRINHA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">82220350</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete12');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 13, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 13, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 13, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete13" name="rows_to_delete[+%60tab03_orddesp%60+%3D+008+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2781692691000133%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27KEADAEK+COM+DE+PRODUTOS+AGROP+LTDA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27AV+ANITA+GARIBALDI%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%271623%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27AHU%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782200530%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete13','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+008+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2781692691000133%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27KEADAEK+COM+DE+PRODUTOS+AGROP+LTDA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27AV+ANITA+GARIBALDI%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%271623%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27AHU%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782200530%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">008</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">81692691000133</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">KEADAEK COM DE PRODUTOS AGROP LTDA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">AV ANITA GARIBALDI</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">1623</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">AHU</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">82200530</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete13');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 14, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 14, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 14, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete14" name="rows_to_delete[+%60tab03_orddesp%60+%3D+012+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2728260678934%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27JEOVA+DE+OLIVEIRA+SILVA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+MATO+GROSSO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27S%2FN%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27CENTRO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2785980000%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27GUAIRA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete14','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+012+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2728260678934%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27JEOVA+DE+OLIVEIRA+SILVA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+MATO+GROSSO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27S%2FN%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27CENTRO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2785980000%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27GUAIRA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">012</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">28260678934</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">JEOVA DE OLIVEIRA SILVA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">R MATO GROSSO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">S/N</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">CENTRO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">85980000</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">GUAIRA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete14');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 15, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 15, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 15, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete15" name="rows_to_delete[+%60tab03_orddesp%60+%3D+013+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2705934761900%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27MIGUEL+VITOLDO+NOWACKI%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+SILVESTRE+KALENETZ%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27167%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27TARUMA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782530380%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete15','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+013+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2705934761900%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27MIGUEL+VITOLDO+NOWACKI%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+SILVESTRE+KALENETZ%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27167%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27TARUMA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782530380%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">013</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">05934761900</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">MIGUEL VITOLDO NOWACKI</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">R SILVESTRE KALENETZ</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">167</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">TARUMA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">82530380</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete15');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 16, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 16, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 16, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete16" name="rows_to_delete[+%60tab03_orddesp%60+%3D+009+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2769697728968%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27MARCO+ANTONIO+OVCAR%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+MACAPA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%271039%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27TINGUI%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782620110%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete16','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+009+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2769697728968%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27MARCO+ANTONIO+OVCAR%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+MACAPA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%271039%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27TINGUI%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782620110%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">009</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">69697728968</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">MARCO ANTONIO OVCAR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">R MACAPA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">1039</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">TINGUI</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">82620110</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete16');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 17, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 17, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 17, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete17" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2776273689000190%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27CARGAS+PESADAS+COM+DE+VEICULOS+LTDA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270412487235%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27ROD+BR+116+KM+105.5%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%275200%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27PINHEIRINHO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781690300%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete17','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2776273689000190%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27CARGAS+PESADAS+COM+DE+VEICULOS+LTDA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270412487235%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27ROD+BR+116+KM+105.5%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%275200%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27PINHEIRINHO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781690300%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">76273689000190</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">CARGAS PESADAS COM DE VEICULOS LTDA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">0412487235</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">ROD BR 116 KM 105.5</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">5200</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">PINHEIRINHO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">81690300</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete17');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 18, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 18, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 18, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete18" name="rows_to_delete[+%60tab03_orddesp%60+%3D+006+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2729348803972%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27JOSE+ANTONIO+DOS+SANTOS%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+ESPER+JORGE+CHUERI%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27S%2FN%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27CAJURU%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782920190%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete18','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+006+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2729348803972%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27JOSE+ANTONIO+DOS+SANTOS%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+ESPER+JORGE+CHUERI%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27S%2FN%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27CAJURU%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782920190%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">006</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">29348803972</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">JOSE ANTONIO DOS SANTOS</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">R ESPER JORGE CHUERI</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">S/N</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">CAJURU</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">82920190</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete18');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 19, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 19, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 19, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete19" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2700411154818%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27AUGUSTINHO+PASSAURA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+APUCARANA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27197%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27SIT+CERCADO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781900430%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete19','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2700411154818%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27AUGUSTINHO+PASSAURA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+APUCARANA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27197%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27SIT+CERCADO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781900430%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">00411154818</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">AUGUSTINHO PASSAURA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">R APUCARANA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">197</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">SIT CERCADO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">81900430</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete19');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 20, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 20, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 20, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete20" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2712294322053%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27JOSE+PEDRO+CONTINI%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270412623573%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+CAP+MANOEL+PACHECO+DA+COSTA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27150%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27AHU%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782200500%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete20','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2712294322053%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27JOSE+PEDRO+CONTINI%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270412623573%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+CAP+MANOEL+PACHECO+DA+COSTA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27150%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27AHU%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782200500%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">12294322053</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">JOSE PEDRO CONTINI</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">0412623573</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">R CAP MANOEL PACHECO DA COSTA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">150</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">AHU</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">82200500</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete20');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 21, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 21, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 21, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete21" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2776593508000102%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27COTELI+CONSTRUTORA+TECNICA+LTDA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413224455%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+AFONSO+PENNA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27270%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27TARUMA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782530280%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete21','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2776593508000102%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27COTELI+CONSTRUTORA+TECNICA+LTDA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413224455%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+AFONSO+PENNA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27270%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27TARUMA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782530280%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">76593508000102</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">COTELI CONSTRUTORA TECNICA LTDA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">0413224455</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">R AFONSO PENNA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">270</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">TARUMA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">82530280</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete21');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 22, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 22, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 22, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete22" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2716799011920%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27VICENTE+IANCZKOVSKI%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+PEDRO+DO+ROSARIO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27457%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27VL+M+ROSARIO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2783410380%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27COLOMBO%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete22','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2716799011920%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27VICENTE+IANCZKOVSKI%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+PEDRO+DO+ROSARIO%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27457%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27VL+M+ROSARIO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2783410380%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27COLOMBO%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">16799011920</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">VICENTE IANCZKOVSKI</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">R PEDRO DO ROSARIO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">457</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">VL M ROSARIO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">83410380</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">COLOMBO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete22');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 23, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 23, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 23, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete23" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2701986646807%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27EDINIR+SANTOS+MOTTES%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%2712.717.493%2FSP%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413671314%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+RIO+JAGUARIBE%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27793%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27B+ALTO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782840330%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete23','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2701986646807%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27EDINIR+SANTOS+MOTTES%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%2712.717.493%2FSP%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413671314%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+RIO+JAGUARIBE%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27793%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27B+ALTO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782840330%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">01986646807</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">EDINIR SANTOS MOTTES</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">12.717.493/SP</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">0413671314</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">R RIO JAGUARIBE</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">793</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">B ALTO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">82840330</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete23');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 24, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 24, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 24, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete24" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2732268483991%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27PAULO+MEIRELES+DE+OLIVEIRA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%271.843.115%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413576452%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+HEITOR+BAGGIO+VIDAL%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%271561%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27B+ALTO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782820120%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete24','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2732268483991%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27PAULO+MEIRELES+DE+OLIVEIRA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%271.843.115%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413576452%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+HEITOR+BAGGIO+VIDAL%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%271561%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27B+ALTO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2782820120%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">32268483991</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">PAULO MEIRELES DE OLIVEIRA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">1.843.115/PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">0413576452</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">R HEITOR BAGGIO VIDAL</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">1561</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">B ALTO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">82820120</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete24');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 25, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 25, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 25, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete25" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2709384561991%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27GELSON+JOSE+NICARETA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27474+355388%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+DR+JOAO+COLIN%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%272975%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27AMERICA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2789204002%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27JOINVILLE%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27SC%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete25','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2709384561991%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27GELSON+JOSE+NICARETA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27474+355388%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+DR+JOAO+COLIN%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%272975%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27AMERICA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2789204002%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27JOINVILLE%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27SC%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">09384561991</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">GELSON JOSE NICARETA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">474 355388</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">R DR JOAO COLIN</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">2975</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">AMERICA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">89204002</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">JOINVILLE</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">SC</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete25');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 26, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 26, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 26, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete26" name="rows_to_delete[+%60tab03_orddesp%60+%3D+010+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2747844795972%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27VICENTE+MAFRA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%272%2FR-1.476950%2FSC%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27AV+PAULO+SCHROEDER%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%271319%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27ITAUM%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2789203120%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27JOINVILLE%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27SC%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete26','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+010+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2747844795972%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27VICENTE+MAFRA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%272%2FR-1.476950%2FSC%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27AV+PAULO+SCHROEDER%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%271319%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27ITAUM%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2789203120%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27JOINVILLE%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27SC%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">010</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">47844795972</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">VICENTE MAFRA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">2/R-1.476950/SC</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">AV PAULO SCHROEDER</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">1319</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">ITAUM</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">89203120</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">JOINVILLE</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">SC</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete26');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 27, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 27, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 27, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete27" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2787354861987%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27EGUINALDO+LOURAS+DE+OLIVEIRA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%276.267.772-4%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270412324361%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+ISIDORO+GAIDA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27104%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27JD+GUARUJA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2783407270%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27COLOMBO%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete27','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2787354861987%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27EGUINALDO+LOURAS+DE+OLIVEIRA%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%276.267.772-4%2FPR%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270412324361%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+ISIDORO+GAIDA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27104%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27JD+GUARUJA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2783407270%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27COLOMBO%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">87354861987</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">EGUINALDO LOURAS DE OLIVEIRA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">6.267.772-4/PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">0412324361</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">R ISIDORO GAIDA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">104</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">JD GUARUJA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">83407270</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">COLOMBO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete27');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 28, 'over', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 28, 'out', '#D5D5D5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 28, 'click', '#D5D5D5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
        <input id="id_rows_to_delete28" name="rows_to_delete[+%60tab03_orddesp%60+%3D+012+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2740015149900%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27MARIO+SERGIO+MACHADO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+ARCOVERDE%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27150%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27N+BRASILIA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2789213360%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27JOINVILLE%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27SC%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete28','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+012+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2740015149900%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27MARIO+SERGIO+MACHADO%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%27041%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+ARCOVERDE%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%27150%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27N+BRASILIA%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2789213360%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27JOINVILLE%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27SC%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#d5d5d5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" class="nowrap" align="right" bgcolor="#d5d5d5" valign="top">012</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">40015149900</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">MARIO SERGIO MACHADO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">041</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">R ARCOVERDE</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">150</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">N BRASILIA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">89213360</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">JOINVILLE</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">SC</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete28');" bgcolor="#d5d5d5" valign="top">&nbsp;</td>

</tr>

<tr onmouseover="setPointer(this, 29, 'over', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmouseout="setPointer(this, 29, 'out', '#E5E5E5', '#CCFFCC', '#FFCC99');" onmousedown="setPointer(this, 29, 'click', '#E5E5E5', '#CCFFCC', '#FFCC99');">

    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
        <input id="id_rows_to_delete29" name="rows_to_delete[+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2735769173904%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27DARCI+LEITE%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413622213%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+SERTANEJA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%2739%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27SIT+CERCADO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781900410%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27]" onclick="copyCheckboxesRange('rowsDeleteForm', 'id_rows_to_delete29','l');" value="DELETE+FROM+%60tab03_clientes%60+WHERE+%60tab03_orddesp%60+%3D+001+AND+CONVERT%28%60tab03_cpf%60+USING+utf8%29+%3D+%2735769173904%27+AND+CONVERT%28%60tab03_nome%60+USING+utf8%29+%3D+%27DARCI+LEITE%27+AND+CONVERT%28%60tab03_rg%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_fones%60+USING+utf8%29+%3D+%270413622213%27+AND+CONVERT%28%60tab03_endereco%60+USING+utf8%29+%3D+%27R+SERTANEJA%27+AND+CONVERT%28%60tab03_nr%60+USING+utf8%29+%3D+%2739%27+AND+CONVERT%28%60tab03_complemento%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_bairro%60+USING+utf8%29+%3D+%27SIT+CERCADO%27+AND+CONVERT%28%60tab03_cep%60+USING+utf8%29+%3D+%2781900410%27+AND+CONVERT%28%60tab03_cidade%60+USING+utf8%29+%3D+%27CURITIBA%27+AND+CONVERT%28%60tab03_uf%60+USING+utf8%29+%3D+%27PR%27+AND+CONVERT%28%60tab03_site%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_email%60+USING+utf8%29+%3D+%27%27+AND+CONVERT%28%60tab03_obs%60+USING+utf8%29+%3D+%27%27+LIMIT+1" type="checkbox">
    </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>
    <td align="center" bgcolor="#e5e5e5" valign="top" width="16">
 <dfn title="You should define a primary key for this table.">?</dfn>     </td>

    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" class="nowrap" align="right" bgcolor="#e5e5e5" valign="top">001</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">35769173904</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">DARCI LEITE</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">0413622213</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">R SERTANEJA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">39</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">SIT CERCADO</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">81900410</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">CURITIBA</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">PR</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>
    <td onmousedown="setCheckboxColumn('id_rows_to_delete29');" bgcolor="#e5e5e5" valign="top">&nbsp;</td>

</tr>

</tbody></table>

        &nbsp;&nbsp;<img src="sql_arquivos/arrow_ltr.png" alt="Com marcados:" border="0" height="22" width="38">
        <a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60&amp;pos=0&amp;session_max_rows=30&amp;pos=0&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;goto=tbl_properties_structure.php&amp;dontlimitchars=1&amp;checkall=1" onclick="setCheckboxesRange('rowsDeleteForm', true, 'id_rows_to_delete', 0, '30'); return false;">
            Marcar All</a>
        &nbsp;/&nbsp;
        <a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60&amp;pos=0&amp;session_max_rows=30&amp;pos=0&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;goto=tbl_properties_structure.php&amp;dontlimitchars=1" onclick="setCheckboxesRange('rowsDeleteForm', false, 'id_rows_to_delete', 0, '30'); return false;">
            Desmarca Todos</a>
&nbsp;&nbsp;<i>Com marcados:</i>
<button class="mult_submit" type="submit" name="submit_mult" value="Muda" title="Muda">
<img src="sql_arquivos/b_edit.png" title="Muda" alt="Muda" height="16" width="16">
</button>
<button class="mult_submit" type="submit" name="submit_mult" value="Remove" title="Remove">
<img src="sql_arquivos/b_drop.png" title="Remove" alt="Remove" height="16" width="16">
</button>
<button class="mult_submit" type="submit" name="submit_mult" value="Export" title="Export">
<img src="sql_arquivos/b_tblexport.png" title="Export" alt="Export" height="16" width="16">
</button>

<input name="sql_query" value="SELECT * FROM `tab03_clientes`" type="hidden">
<input name="pos" value="0" type="hidden">
<input name="url_query" value="lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0" type="hidden">
<br>
</form>
<br>

<!-- Navigation bar -->
<table border="0" cellpadding="2" cellspacing="0">
<tbody><tr>

<td>
    &nbsp;&nbsp;&nbsp;
</td>
<td align="center">
    <form action="sql.php" method="post" onsubmit="return (checkFormElementInRange(this, 'session_max_rows', 1) && checkFormElementInRange(this, 'pos', 0, 834))">
        <input name="lang" value="ptbr-utf-8" type="hidden">
<input name="server" value="1" type="hidden">
<input name="collation_connection" value="utf8_general_ci" type="hidden">
<input name="db" value="iscos" type="hidden">
<input name="table" value="tab03_clientes" type="hidden">
        <input name="sql_query" value="SELECT+%2A+FROM+%60tab03_clientes%60" type="hidden">
        <input name="goto" value="tbl_properties_structure.php" type="hidden">
        <input name="dontlimitchars" value="0" type="hidden">
        <input name="navig" value="Mostrar :" type="submit">
        <input name="session_max_rows" size="3" value="30" class="textfield" onfocus="this.select()" type="text">
        colunas começando de
        <input name="pos" size="6" value="30" class="textfield" onfocus="this.select()" type="text">
        <br>
        no modo
            <select name="disp_direction">
                <option value="horizontal" selected="selected">horizontal</option>
                <option value="horizontalflipped">horizontal (rotated headers)</option>
                <option value="vertical">vertical</option>
            </select>
            e repetindo cabeçalhos após
            <input size="3" name="repeat_cells" value="100" class="textfield" type="text">
            células
    </form>
</td>
<td>
    &nbsp;&nbsp;&nbsp;
</td>

<td>
    <form action="sql.php" method="post">
        <input name="lang" value="ptbr-utf-8" type="hidden">
<input name="server" value="1" type="hidden">
<input name="collation_connection" value="utf8_general_ci" type="hidden">
<input name="db" value="iscos" type="hidden">
<input name="table" value="tab03_clientes" type="hidden">
        <input name="sql_query" value="SELECT+%2A+FROM+%60tab03_clientes%60" type="hidden">
        <input name="pos" value="30" type="hidden">
        <input name="session_max_rows" value="30" type="hidden">
        <input name="disp_direction" value="horizontal" type="hidden">
        <input name="repeat_cells" value="100" type="hidden">
        <input name="goto" value="tbl_properties_structure.php" type="hidden">
        <input name="dontlimitchars" value="0" type="hidden">
        <input name="navig" value="&nbsp;&gt;&nbsp;" title="Próximo" type="submit">
    </form>
</td>
<td>
    <form action="sql.php" method="post" onsubmit="return true">
        <input name="lang" value="ptbr-utf-8" type="hidden">
<input name="server" value="1" type="hidden">
<input name="collation_connection" value="utf8_general_ci" type="hidden">
<input name="db" value="iscos" type="hidden">
<input name="table" value="tab03_clientes" type="hidden">
        <input name="sql_query" value="SELECT+%2A+FROM+%60tab03_clientes%60" type="hidden">
        <input name="pos" value="810" type="hidden">
        <input name="session_max_rows" value="30" type="hidden">
        <input name="disp_direction" value="horizontal" type="hidden">
        <input name="repeat_cells" value="100" type="hidden">
        <input name="goto" value="tbl_properties_structure.php" type="hidden">
        <input name="dontlimitchars" value="0" type="hidden">
        <input name="navig" value="&gt;&gt;" title="Fim" type="submit">
    </form>
</td>
           <td>
       &nbsp;&nbsp;&nbsp;
   </td>
   <td>
                <form>
        <br>Page number:<select name="goToPage" onchange="goToUrl(this, 'sql.php?sql_query=SELECT+%2A+FROM+%60tab03_clientes%60&session_max_rows=30&disp_direction=horizontal&repeat_cells=100&goto=tbl_properties_structure.php&dontlimitchars=0&lang=ptbr-utf-8&server=1&collation_connection=utf8_general_ci&db=iscos&table=tab03_clientes&');">
                <option selected="selected" style="font-weight: bold;" value="0">1</option>
                <option value="30">2</option>
                <option value="60">3</option>
                <option value="90">4</option>
                <option value="120">5</option>
                <option value="150">6</option>
                <option value="180">7</option>
                <option value="210">8</option>
                <option value="240">9</option>
                <option value="270">10</option>
                <option value="300">11</option>
                <option value="330">12</option>
                <option value="360">13</option>
                <option value="390">14</option>
                <option value="420">15</option>
                <option value="450">16</option>
                <option value="480">17</option>
                <option value="510">18</option>
                <option value="540">19</option>
                <option value="570">20</option>
                <option value="600">21</option>
                <option value="630">22</option>
                <option value="660">23</option>
                <option value="690">24</option>
                <option value="720">25</option>
                <option value="750">26</option>
                <option value="780">27</option>
                <option value="810">28</option>
 </select>        </form>
    </td>

</tr>
</tbody></table>


<hr>
    <!-- Insert a new row -->
    <a href="http://localhost/mysql/tbl_change.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;dontlimitchars=0&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60&amp;goto=sql.php%3Flang%3Dptbr-utf-8%26amp%3Bserver%3D1%26amp%3Bcollation_connection%3Dutf8_general_ci%26amp%3Bdb%3Discos%26amp%3Btable%3Dtab03_clientes%26amp%3Bpos%3D0%26amp%3Bsession_max_rows%3D30%26amp%3Bdisp_direction%3Dhorizontal%26amp%3Brepeat_cells%3D100%26amp%3Bdontlimitchars%3D0%26amp%3Bsql_query%3DSELECT%2B%252A%2BFROM%2B%2560tab03_clientes%2560"><img src="sql_arquivos/b_insrow.png" alt="Insere novo registro" align="middle" border="0" height="16" hspace="2" width="16">Insere novo registro</a>&nbsp;&nbsp;
    <!-- Print view -->
    <a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;printview=1&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60" target="print_view"><img src="sql_arquivos/b_print.png" alt="Visualização para Impressão" align="middle" border="0" height="16" hspace="2" width="16">Visualização para Impressão</a>
    &nbsp;&nbsp;
    <a href="http://localhost/mysql/sql.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;printview=1&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60&amp;dontlimitchars=1" target="print_view"><img src="sql_arquivos/b_print.png" alt="Print view (with full texts)" align="middle" border="0" height="16" hspace="2" width="16">Print view (with full texts)</a>&nbsp;&nbsp;

    <!-- Export -->
    &nbsp;&nbsp;<a href="http://localhost/mysql/tbl_properties_export.php?lang=ptbr-utf-8&amp;server=1&amp;collation_connection=utf8_general_ci&amp;db=iscos&amp;table=tab03_clientes&amp;pos=0&amp;session_max_rows=30&amp;disp_direction=horizontal&amp;repeat_cells=100&amp;printview=1&amp;sql_query=SELECT+%2A+FROM+%60tab03_clientes%60&amp;unlim_num_rows=835&amp;single_table=true"><img src="sql_arquivos/b_tblexport.png" alt="Export" align="middle" border="0" height="16" hspace="2" width="16">Export</a>



<script type="text/javascript">
<!--
    var dbBoxSetupDone = false;
    function dbBoxSetup() {
        if (dbBoxSetupDone != true) {
            if (parent.frames.queryframe && parent.frames.queryframe.document.left && parent.frames.queryframe.document.left.lightm_db) {
                parent.frames.queryframe.document.left.lightm_db.value = 'iscos';
                dbBoxSetupDone = true;
            } else {
                setTimeout("dbBoxSetup();",500);
            }
        }
    }
    if (parent.frames.queryframe && parent.frames.queryframe.document && parent.frames.queryframe.document.queryframeform) {
        parent.frames.queryframe.document.queryframeform.db.value = "iscos";
        parent.frames.queryframe.document.queryframeform.table.value = "tab03_clientes";
    }
    if (parent.frames.queryframe && parent.frames.queryframe.document && parent.frames.queryframe.document.left && parent.frames.queryframe.document.left.lightm_db) {
        selidx = parent.frames.queryframe.document.left.lightm_db.selectedIndex;
        if (parent.frames.queryframe.document.left.lightm_db.options[selidx].value == "iscos") {
            parent.frames.queryframe.document.left.lightm_db.options[selidx].text = "iscos (3)";
        } else {
            parent.frames.queryframe.location.reload();
            setTimeout("dbBoxSetup();",2000);
        }
    }

    function reload_querywindow () {
        if (parent.frames.queryframe && parent.frames.queryframe.querywindow && !parent.frames.queryframe.querywindow.closed && parent.frames.queryframe.querywindow.location) {
                        if (!parent.frames.queryframe.querywindow.document.sqlform.LockFromUpdate || !parent.frames.queryframe.querywindow.document.sqlform.LockFromUpdate.checked) {
                parent.frames.queryframe.querywindow.document.querywindow.db.value = "iscos";
                parent.frames.queryframe.querywindow.document.querywindow.query_history_latest_db.value = "iscos";
                parent.frames.queryframe.querywindow.document.querywindow.table.value = "tab03_clientes";
                parent.frames.queryframe.querywindow.document.querywindow.query_history_latest_table.value = "tab03_clientes";

                parent.frames.queryframe.querywindow.document.querywindow.query_history_latest.value = "SELECT+%2A+FROM+%60tab03_clientes%60";

                parent.frames.queryframe.querywindow.document.querywindow.submit();
            }
                    }
    }

    function focus_querywindow(sql_query) {
        if (parent.frames.queryframe && parent.frames.queryframe.querywindow && !parent.frames.queryframe.querywindow.closed && parent.frames.queryframe.querywindow.location) {
            if (parent.frames.queryframe.querywindow.document.querywindow.querydisplay_tab != 'sql') {
                parent.frames.queryframe.querywindow.document.querywindow.querydisplay_tab.value = "sql";
                parent.frames.queryframe.querywindow.document.querywindow.query_history_latest.value = sql_query;
                parent.frames.queryframe.querywindow.document.querywindow.submit();
                parent.frames.queryframe.querywindow.focus();
            } else {
                parent.frames.queryframe.querywindow.focus();
            }

            return false;
        } else if (parent.frames.queryframe) {
            new_win_url = 'querywindow.php?sql_query=' + sql_query + '&lang=ptbr-utf-8&server=1&collation_connection=utf8_general_ci&db=iscos&table=tab03_clientes';
            parent.frames.queryframe.querywindow=window.open(new_win_url, '','toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=yes,resizable=yes,width=550,height=310');

            if (!parent.frames.queryframe.querywindow.opener) {
               parent.frames.queryframe.querywindow.opener = parent.frames.queryframe;
            }

            // reload_querywindow();
            return false;
        }
    }

    reload_querywindow();

//-->
</script>


</body></html>