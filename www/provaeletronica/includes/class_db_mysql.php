<?

//
//  log
//
//  Funções
//    +---- log( Nome do arquivo de log ) // Inicializa o log passando o nome do arquivo
//    +---- addLog( String para insercao, Tipo de mensagem [error, sucess] )  //  Adicionar uma linha ao arquivo de Log
//    +---- show() //  Exibir o conteudo do log
//
//

class log
{
	var $filename; // Caminho e nome do arquivo de log

	# Inicializa o log passando o nome do arquivo 
	function log($filename = NULL) {
		if (!$GLOBALS["nyear"]) 
			$this->filename = date("Y.m.d").".log";
		else{
			$this->filename = $GLOBALS["nyear"].".".mformat(2, $GLOBALS["nmonth"]).".".mformat(2, $GLOBALS["nday"]).".log";
		}
	}
		# Inicializa o log passando o nome do arquivo 

		# Adicionar uma linha ao arquivo de Log 
	function addLog($text, $type) {
		$log_file = @fopen($this->filename, "a+");
		if ($log_file) {
			$log = fread($log_file, filesize($log_file));
			$content = $log;
			$ini = strlen($GLOBALS["REQUEST_URI"]) - 40;
			$content .= "<span class=\"$type\"> - ".
			date("d.m.Y ..... H:m:s")." ..... ".
			str_pad(substr($GLOBALS["REMOTE_ADDR"]." ", 0, 15), 20, ".", STR_PAD_RIGHT)." ".
			str_pad($GLOBALS["user_name"], 25, ".", STR_PAD_RIGHT).
			str_pad(substr($GLOBALS["PHP_SELF"], strrpos($GLOBALS["PHP_SELF"], "/"), strlen($GLOBALS["PHP_SELF"])), 30, ".", STR_PAD_RIGHT)." $text</span><br>\n";
			fputs($log_file, $content);
			fclose($log_file);
		}
	}
	# Adicionar uma linha ao arquivo de Log 

	# Exibir a o conteudo do log
	function show() {
		if ($log_file = @fopen($this->filename, "r")) {
			while (!feof ($log_file)) {
				$buffer = fgets($log_file, 4096);
				if (strpos($buffer, $GLOBALS["nday"].".".mformat(2, $GLOBALS["nmonth"]).".".$GLOBALS["nyear"]) > 1) {
					$buffer = str_replace("\\\"", "\"", $buffer);
					print($buffer);
					flush();
				}
			}
			fclose ($log_file);
		}else{
			print("Erro ao tentar abrir o log \"$this->filename\"");
		}
	}
	# Exibir a o conteudo do log 
} # Final da Classe

//
//  dbConnecta
//
//  Funções
//    +---- halt( msg de erro )
//    +---- connect()
//    +---- query( sql a ser executado )
//    +---- next_record()
//    +---- num_rows()
//    +---- affected_rows()
//    +---- optimize( tabela para optimizar )
//    +---- clean_results()
//    +---- close()
//    +---- populaCombo( tabela, campo1, campo2, condicao, ordem por [campo2] )
//    +---- 
//    +---- 
//    +---- 
//    +---- 
//    +---- 
//
//

class dbConnecta {

//Propiedades
	var $Host = "localhost";						// Hostname del servidor de MySQL
	var $Database = "provaeletronica";	// Nombre Logico de la base de datos en el servidor
	var $User = "tecnodata";						// Usuario de Base de Datos
	var $Password = "@senha";						// Clave del usuario
	var $Link_ID = 0;										// Resultado de mysql_connect()
	var $Query_ID = 0;									// Resultado del ultimo mysql_query()
	var $Record = array();							// Actual mysql_fetch_array()-result
	var $Row;														// Actual numero de fila
	var $Errno = 0;											// Estado de error del query
	var $Error = "";
	
//Metodos
	function halt($msg) {
		echo("<B>Erro no Banco de Dados:</B> $msg<BR>\n");
		echo("<B>Erro no mySQL</B>: $this->Errno ($this->Error)<BR>\n");
		die("Operação Cancelada.");
	}

	function connect() {
		//$this->log = new log("/logs/provaeletronica.log");
		//$this->log->addLog("Erro ao tentar Conexão MySQL com o servidor \"$this->host\"", "error");

		if($this->Link_ID == 0) {
			$this->Link_ID = mysql_connect($this->Host, $this->User,$this->Password);
			if (!$this->Link_ID) {
				$this->halt("Link_ID == false, connect failed");
			}
			$SelectResult = mysql_select_db($this->Database, $this->Link_ID);
			if(!$SelectResult) {
				$this->Errno = mysql_errno($this->Link_ID);
				$this->Error = mysql_error($this->Link_ID);
				$this->halt("Não pode selecionar a Base de Dados <I>".$this->Database."</I>");
			}
		}
		return $this->Link_ID;
	}

	function query($Query_String) {
		$this->connect();
		$this->Query_ID = mysql_query($Query_String,$this->Link_ID);
		$this->Row = 0;
		$this->Errno = mysql_errno();
		$this->Error = mysql_error();
		if (!$this->Query_ID) {
			$this->halt("SQL Inválido: ".$Query_String);
		}
		return $this->Query_ID;
	}

	function next_record() {
		$this->Record = mysql_fetch_array($this->Query_ID);
		$this->Row += 1;
		$this->Errno = mysql_errno();
		$this->Error = mysql_error();
		$stat = is_array($this->Record);
    //if (!$this->Record)//annadida por mi
		if (!$stat) {
			mysql_free_result($this->Query_ID);
			$this->Query_ID = 0;
		}
		return $this->Record;
	}

	function num_rows() {
		return mysql_num_rows($this->Query_ID);
	}

	function affected_rows() {
		return mysql_affected_rows($this->Link_ID);
	}

	function optimize($tbl_name) {
		$this->connect();
		$this->Query_ID = @mysql_query("OPTIMIZE TABLE $tbl_name",$this->Link_ID);
	}

	function clean_results() {
		if($this->Query_ID != 0) mysql_freeresult($this->Query_ID);
	}

	function close() {
		if($this->Link_ID != 0) mysql_close($this->Link_ID);
	}

	function populaCombo($tabela, $campo1, $campo2, $condicao, $ordem){
		$this->result = $this->connect();
		
		$_res = array();
		$i = 0;
		$SQL = "SELECT " . $campo1 . "," . $campo2 . " FROM " . $tabela;
		
		if(!empty($condicao)){
			$SQL .= " WHERE " . $condicao;
		}
		
		if(!empty($ordem)){
			$SQL .= " ORDER BY " . $ordem;
		}
		
		$result=mysql_query($SQL);
			
		while($l = mysql_fetch_array($result)) {
			$_res[$i] = array();
			foreach($l as $campo => $valor) $_res[$i][strtolower($campo)] = $valor;
			$i++;
		}
		
		$this->close();

		return $_res;
	}
	
}
?>