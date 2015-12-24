<?php
//Portuguese (Brazil)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Brazilian Portuguese translation of Pivot lang file
// Created by: Cl�bio C. Felix | email: clebiofelix (at) yahoo (dot) com (dot) br | www.tradblogs.com.br/voznodeserto/
// Latest Update: [v1.40.x '---'] Cl�bio C. Felix | 01.12.2006

// allow for different encoding for non-western languages
$encoding="iso-8859-1";
$langname="pt";


//		General		\\
$lang['general'] = array (
	'yes' => 'Sim',	//affirmative
	'no' => 'N�o',		//negative
    'continue' => 'Continuar', //proceed
	'go' => 'Avan�ar!',	//proceed

	'minlevel' => 'Voc� n�o possui permiss�o para acessar esta �rea de Pivot',
	'email' => 'Email',
	'url' => 'URL',
	'further_options' => "Op��es avan�adas",
	'basic_view' => "Visualiza��o b�sica",
	'basic_view_desc' => "Visualizar somente os campos mais comuns",
	'extended_view' => "Visualiza��o extendida",
	'extended_view_desc' => "Visualizar todos os campos edit�veis",
	'toggle_view' => "Alternar entre visualiza��o b�sica e extendida",
	'select' => "Selecionar",
	'cancel' => "Cancelar",
	'delete' => 'Apagar',
    'approve' => 'Aprovar',
	'edit' => 'Editar',
	'welcome' => "Bem-vindo ao %build%.",
	'write' => "Escrever",
	'write_open_error' => "Erro de escrita. N�o foi poss�vel abrir arquivo para edi��o",
	'write_write_error' => "Erro de escrita. N�o foi poss�vel escrever/salvar para arquivo",
	'done' => "Finalizado!",
	'shortcuts' => "Atalhos",
	'cantdelete' => "Voc� n�o tem permiss�o para excluir a entrada %title%!",
	'cantdothat' => "Voc� n�o tem permiss�o para esta a��o com a entrada %title%!",
	'cantdeletelast' => "Voc� n�o pode excluir a �ltima entrada. Voc� deve primeiro, postar uma nova entrada antes de excluir esta entrada",
	'more' => "Mais",
	'all' => "Tudo",
);


$lang['userlevels'] = array (
		'SuperAdministrador', 'Administrador', 'Avan�ado', 'Normal', 'Moblogger'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin,
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'zero', 'um', 'dois', 'tr�s', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove', 'dez', 'onze', 'doze', 'treze', 'quatorze', 'quinze', 'dezesseis',
);


$lang['months'] = array (
	'Janeiro', 'Fevereiro', 'Mar�o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
);


$lang['months_abbr'] = array (
	'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'
);


$lang['days'] = array (
	'Domingo', 'Segunda', 'Ter�a', 'Quarta', 'Quinta', 'Sexta', 'S�bado'
);


$lang['days_abbr'] = array (
	'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'
);


$lang['days_calendar'] = array (
	'D', 'S', 'T', 'Q', 'Q', 'S', 'S'
);


$lang['datetime_words'] = array (
	'Ano', 'M�s', 'Semana', 'Dia', 'Hora', 'Minuto', 'Segundo'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Login',
	'name' => 'Usu�rio',
	'pass' => 'Senha',
	'remember' => 'Relembrar',
	'rchoice' => array (
		'0' => 'Nada',
		'1' => 'Meu Usu�rio e Senha',
		'2' => 'Desejo permanecer logado'
	),
	'delete_cookies_desc' => 'Se voc� tem certeza que seu nome de usu�rio e sua senha est�o corretos, mas est� <br />tendo problemas para logar-se, voc� pode tentar excluir os cookies deste dom�nio:',
	'delete_cookies' => 'Excluir cookies',
	'retry' => 'Usu�rio e/ou senha incorretos',
	'banned' => 'Voc� falhou em 10 tentativas de acesso. Como resultado, este IP est� bloqueado para tentativas de login durante 12 horas.',

);


//		Main Bar		\\
$lang['userbar'] = array (
	'main' => 'Menu Geral',
	'entries' => 'Entradas',
	'submit' => 'Nova entrada',
	'comments' => 'Coment�rios',
	'trackbacks' => 'Trackbacks',
	'modify' => 'Modificar Entradas',
	'userinfo' => 'Minhas Informa��es',
	'u_settings' => 'Minhas Op��es',
	'u_marklet' => 'Favoritos',
	'files' => 'Gerenciar M�dias',
	'upload' => 'Enviar arquivos',
	'stats' => 'Estat�sticas',
	'admin' => 'Administra��o',

	'main_title' => 'Menu Geral do Pivot',
	'entries_title' => 'Menu de Entradas',
	'submit_title' => 'Nova Entrada',
	'comments_title' => 'Editar ou Excluir Coment�rios',
	'trackbacks_title' => 'Editar ou excluir Trackbacks',
	'modify_title' => 'Modificar Entrada',
	'userinfo_title' => 'Visualizar minhas informa��es pessoais',
	'u_settings_title' => 'Editar minhas op��es pessoais',
	'u_marklet_title' => 'Criar Favoritos',
	'files_title' => 'Gerenciar e Enviar M�dias',
	'upload_title' => 'Enviar Arquivos',
	'uploaded_success' => 'O Arquivo foi enviado',
	'stats_title' => 'Visualizar Logs e Estat�sticas.',
	'updatetitles_title' => 'Visualizar Logs e Estat�sticas.',
	'admin_title' => 'Menu de Administra��o',
	'recent_entries' => 'Entradas Recentes',
	'recent_comments' => 'Coment�rios Recentes',
	'moderate_comments' => 'Moderar Coment�rios',
    'moderate_comments_desc' => 'Existe(m) %1 coment�rio(s) aguardando aprova��o.',
    'moderate_nocomments_desc' => 'N�o existem coment�rios aguardando aprova��o.',
	'moderate_autoapprove' => 'Aprovar imediatamente os coment�rios destes Visitantes Registrados no futuro.',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	'seeusers' => 'Usu�rios',
    'seecommusers' => 'Visitantes Registrados',
	'seeconfig' => 'Configura��o',
	'filemappings' => 'Mapa dos Arquivos',
	'templates' => 'Templates (Modelos)',
	'maintenance' => 'Manuten��o',
	'regen' => 'Reconstruir Todos os Arquivos',
	'blogs' => 'Weblogs',
	'categories' => 'Categorias',
	'verifydb' => 'Verificar a Base de Dados',
	'buildindex' => 'Reconstruir o �ndice',
	'buildsearchindex' => 'Reconstruir o �ndice de Busca',
	'buildfrontpage' => 'Reconstruir as P�ginas Iniciais',
	'sendping' => 'Enviar Pings',
	'backup' => 'Backup',
	'description' => 'Descri��o',
	'conversion' => 'Convers�o',
	'seeusers_title' => 'Criar, editar e excluir usu�rios',
    'seecommusers_title' => "Visualizar e editar Visitantes Registrados",
	'userfields' => 'Campos de informa��o do usu�rio',
	'userfields_title' => 'Criar, editar e excluir Campos de Informa��o do Usu�rio',
	'seeconfig_title' => 'Editar o Arquivo de Configura��o',
	'filemappings_title' => 'Vis�o geral dos arquivos que s�o criados neste site pelos Weblogs deste Pivot',
	'templates_title' => 'Criar, editar e excluir Templates (modelos)',
	'maintenance_title' => 'Executar rotinas de manuten��o nos arquivos de Pivot',
	'regen_title' => 'Reconstruir os arquivos e hist�ricos que Pivot gera',
	'blogs_title' => 'Criar, editar e excluir Weblogs',
	'blogs_edit_title' => 'Editar op��es de Weblog para ',
	'categories_title' => 'Criar, editar e excluir Categorias',
	'verifydb_title' => 'Verificar a integridade da sua Base de Dados',
	'buildindex_title' => 'Reconstruir o �ndice da sua Base de Dados',
	'buildsearchindex_title' => 'Reconstruir o �ndice de Busca, para permitir busca nas entradas',
	'buildfrontpage_title' => 'Reconstruir a P�gina Inicial, �ltimos arquivos e arquivos RSS para cada weblog.',
	'backup_title' => 'Criar um Backup das suas entradas',
    'backup_db' => "Backup da Base de Dados",
    'backup_db_desc' => "Isto ir� permitir fazer download de um arquivo ZIP contendo sua Base de Dados (com todas as suas Entradas)",
	'backup_config' => 'Backup dos arquivos de configura��o',
	'backup_config_desc' => 'Isso ir� permitir fazer download de um arquivo ZIP com seus arquivos de configura��o.',
	'ipblocks' => 'IP\'s bloqueados',
	'ipblocks_title' => 'Visualizar e editar os endere�os de IP bloqueados.',
	'ipblocks_stored' => 'Os endere�os de IP foram salvos.',
	'ipblocks_store' => 'Salvar estes endere�os de IP',
	'ignoreddomains' => 'Dom�nios Ignorados',
	'ignoreddomains_title' => 'Visualizar e Editar os Dom�nios Ignorados.',
	'ignoreddomains_stored' => 'Os Dom�nios Ignorados foram registrados.',
	'ignoreddomains_store' => 'Salve estes Dom�nios Ignorados',
	'ignoreddomains_asterisk' => 'Itens marcados com um asterisco ( * ) ser�o usados somente para bloquear refer�ncias. Todos os outros itens ser�o usados para bloquear refer�ncias, coment�rios e trackbacks de forma igual.',
	'ignoreddomains_global' => 'Express�es bloqueadas de forma global.',
	'ignoreddomains_global_desc' => 'Al�m das Express�es Bloqueadas mencionadas acima, voc� tamb�m pode usar uma lista atualizadat que seu Pivot pode descarregar do servidor Pivotlog.net. Atualmente essa lista cont�m as seguintes frases:',
	'ignoreddomains_global_empty' => 'A lista de Express�es Globais est� vazia',
	'ignoreddomains_global_update' => 'Atualize a lista de Express�es Globais desde Pivotlog.net',
	'ignoreddomains_global_delete' => 'Remova a lista de Express�es Globais',
	'ignoreddomains_global_success' => 'A lista de Express�es Globais foi armazenada.',
	'ignoreddomains_global_failed' => 'A lista de Express�es Globais n�o pode ser armazenada. Favor tentar novamente mais tarde!',
	'ignoreddomains_global_deleted' => 'As Express�es Globais foram exclu�das.',
	'fileexplore' => 'Explorador de arquivos',
	'fileexplore_title' => 'Visualizar arquivos (tanto de texto como da Base de Dados)',
	'sendping_title' => 'Enviar pings para rastreadores de atualiza��o.',
	'buildindex_start' => 'Construindo o �ndice agora. Este processo pode demorar um pouco, por favor n�o o interrompa.',
	'buildsearchindex_start' => 'Construindo o �ndice agora. Este processo pode demorar um pouco, por favor n�o o interrompa.',
	'buildindex_finished' => 'Finalizado! A gera��o do �ndice demorou %num% segundos',

	'filemappings_desc' => 'Abaixo voc� pode ver uma vis�o geral de cada Weblog nesta instala��o de Pivot, junto com os arquivos que s�o criados por Pivot e os Templates (modelos) que s�o usados para criar estes arquivos. Isto pode tamb�m ser muito �til ao localizar problemas com a cria��o dos arquivos',
	
	'debug' => 'Abrir janela de Depura��o (Debug)',

	'latest_pivot_news' => "Not�cias recentes de Pivot",
	'remove_setup_header' => "O script de instala��o Pivot est� presente",
	'remove_setup' => "O script de instala��o 'pivot-setup.php' ainda est� presente na pasta principal. Cuidado, este � um potencial risco de seguran�a. � aconselh�vel remover isto, ou renome�-lo, de forma que n�o possa ser executado por pessoas com m�s inten��es.",
	'magic_quotes_header' => "Op��o 'Magic quotes' ativa",
	'magic_quotes' => "Seu servidor possui uma op��o PHP chamada 'Magic quotes'. Isto pode fazer Pivot funcionar com menor perfomance. Veja em <a href='http://www.pivotlog.net/docs/doku.php?id=servers_with_magic_quotes'>this page</a> como remediar essa situa��o.",
	'register_globals_header' => "Op��o 'Register Globals' ativa",
	'register_globals' => "Seu servidor possui a op��o 'register globals' ativa. Esta � uma op��o potencialmente insegura, e voc� deve realmente tentar resolver isto desativando-a. Para remediar esta situa��o, veja em '<a href='http://www.pivotlog.net/docs/doku.php?id=servers_with_register_globals'>Servers with register_globals</a>' na documenta��o de Pivot.",
	'spamprotection' => "Prote��o Anti-Spam",
	'spamprotection_title' => "Vis�o Geral das v�rias ferramentas para manter seus weblogs livres de spam",
	'spamconfig' => "Configura��o Anti-Spam",
	'spamconfig_title' => "Configure ferramentas Anti-Spam (como HashCash e SpamQuiz).",
	'seespamconfig_title' => 'Configure ferramentas Anti-Spam',
	'spamwasher' => 'Limpador de Spam',
	'spamwasher_title' => 'Procure por spams, e exclua todos eles de suas entradas e trackbacks.',
	'spamlog' => "Spam Log",
	'spamlog_title' => "Visualizar e Reinicializar o Spam Log.",
	'viewspamlog_title' => "Visualizando o Spam Log",
);


$lang['templates'] = array (
	'rollback' => 'Reverter altera��es',
	'create_template' => 'Criar template (modelo)',
	'create_template_info' => 'Criar um Pivot template "do zero"',
	'no_comment' => 'sem coment�rio',
	'comment' => 'Coment�rio*',
	'comment_note' => '(*Nota: Coment�rios s� podem ser salvos na <b>primeira vez</b> que se salva mudan�as ou cria��o)',
	'create' => 'Criar template (modelo)',
	'editing' => 'Editando',
	'filename' => 'Nome do arquivo',
	'save_changes' => 'Salvar Mudan�as!',
	'save_template' => 'Salvar template!',
	'aux_template' => 'Template Auxiliar',
	'sub_template' => 'Subtemplate',
	'standard_template' => 'Normal template',
	'feed_template' => 'Feed template',
	'css_template' => 'Arquivo CSS',
	'txt_template' => 'Arquivo Text',
	'php_template' => 'Arquivo PHP',
);


//		Maintenace		\\
$lang['maint'] = array (
	'title' => 'Manuten��o',
	'gen_arc_title' => 'Gerar Hist�rico', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Recriar todos os seus Hist�ricos', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Verificar arquivos XML', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Verificar (e reparar se necess�rio) a integridade dos arquivos XML', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Backup',
	'backup_text' => 'Criar um Backup de todos os arquivos essenciais do Pivot',
);


//		Spam Protection		\\
$lang['spam'] = array (
	'hc_options' => 'Op��es para HashCash',
	'hc' => 'Usar HashCash',
	'hc_desc' => "HashCash � o mais poderoso e completamente invis�vel Anti-Spam dispon�vel. Ele precisa do Javascript ativo no browser do usu�rio. Se isto � inaceit�vel pra voc�, ent�o n�o o ative.",
	'sq_options' => 'Op��es para SpamQuiz',
	'sq' => 'Usar SpamQuiz',
	'sq_desc' => "Antes de enviar um coment�rio, seus visitantes ter�o que responder corretamente uma simples pergunta que todos conhe�am a resposta. Isto barra completamente rob�s de spam autom�ticos, porque cada dono de blog ir� escolher algo diferente.",
	'sq_question' => 'Pergunta',
	'sq_question_desc' => "Exemplo: Quais s�o as duas primeiras letras da palavra 'spam'?",
	'sq_answer' => 'Resposta',
	'sq_answer_desc' => 'Exemplo: <b>sp</b>',
	'sq_explain' => 'Explica��o',
	'sq_explain_desc' => 'Exemplo: Para prevenir spams autom�ticos nos coment�rios, n�s precisamos que voc� responda esta simples e tola pergunta',
	'sq_days' => 'Limite de dias',
	'sq_days_desc' => 'Ative SpamQuiz somente para entradas mais velhas que esta quantidade de dias. Normalmente spams autom�ticos em coment�rios s�o enviados somente para entradas antigas e ent�o pode n�o ser necess�rio incomodar seus visitantes regulares (que comentam por ex.: dentro de at� uma semana).',
	'ht_options' => 'Op��es para Trackback R�gido',
	'ht' => 'Usar Trackback R�gido',
	'ht_desc' => "Trackback R�gido � uma poderosa prote��o Anti-Spam. Ele precisa do Javascript ativo no browser do usu�rio. Se isto � inaceit�vel pra voc�, ent�o n�o o ative.",
	'tburl_gen' => 'Clique para gerar uma URL de trackback',
	'tburl_gen_note' => 'Nota: A URL gerada � v�lida somente por 15 min e o javascript ativo � necess�rio!',
	'tburl_gen_javascript' => 'Favor ativar Javascript para gerar uma URL de trackback',
	'enable_js_comm' => "Favor ativar Javascript (e recarregar esta p�gina) para adicionar qualquer coment�rio.",
	'empty_log' => 'Spam Log est� vazio.',
	'reset_log' => 'Reinicializar Spam Log',
	'reset_log_done' => 'Spam Log reinicializado',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Exibir as �ltimas",
	'20ref' => "20 refer�ncias",
	'50ref' => "50 refer�ncias",
	'allref' => "todas as refer�ncias",
	'showunblocked' => "exibir somente as linhas n�o bloqueadas",
	'showall' => "exibir bloqueadas e n�o-bloqueadas",
	'updateref' => "Capturar os t�tulos das p�ginas de refer�ncia",
	'hostaddress' => 'Endere�o-Dom�nio (endere�o-ip)',
	'whichpage' => 'Qual p�gina',

	'getting' => 'Capturando novos t�tulos',
	'awhile' => 'Este processo pode demorar um pouco, favor n�o interromper.',
	'firstpass' => 'Primeiro passo',
	'secondpass' => 'Segundo passo',
	'nowuptodate' => 'Seu mapa refer�ncia-t�tulo foi atualizado.',
	'finished' => 'Finalizado',
);


//		User Info		\\
$lang['userinfo'] = array (
	'editfields' => 'Editar Campos do Usu�rio',
	'desc_editfields' => 'Editar os campos que os usu�rios podem usar para descrever a si mesmos',
	'username' => 'Usu�rio',
	'pass1' => 'Senha',
	'pass2' => 'Senha (confirmar)',
	'email' => 'E-mail',
	'nickname' => 'Nickname (Apelido)',
    'url' => 'URL',
    'verified' => 'Verificado',
    'verified_desc' => 'Verificar esta Conta de Visitante para o usu�rio.',
    'disabled' => 'Desabilitado',
    'disabled_desc' => 'Desabilitar esta Conta de Visitante (assim, coment�rios n�o poder�o ser feitos com este nome).',
	'userlevel' => 'N�vel do Usu�rio',
	'userlevel_desc' => 'O N�vel do Usu�rio ir� determinar que tipos de a��es este usu�rio pode realizar em Pivot.',
	'language' => 'Idioma',
	'lastlogin' => '�ltimo Login',
    'users' => 'Usu�rios',
    'commusers' => 'Visitantes Registrados',
    'editcommuser' => 'Editar Visitante Registrado',
	'edituser' => 'Editar usu�rio',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => 'Editar informa��es do usu�rio',
	'selfreg' => 'Auto-Cadastro',
	'newuser' => 'Criar Novo Usu�rio',
	'desc_newuser' => 'Criar uma nova conta de acesso para Pivot, permitindo postar entradas para um Weblog.',
	'newuser_button' => 'Criar',
	'edituser_button' => 'Alterar',
	'pass_too_short' => 'A senha deve ter um m�nimo de 4 caracteres.',
	'pass_equal_name' => 'A Senha n�o pode ser igual ao Nome de Usu�rio.',
	'pass_dont_match' => 'Senhas n�o coincidem',
	'username_in_use' => 'Este nome de usu�rio j� existe, crie outro',
	'username_too_short' => 'Nomes necessitam ter um m�nimo de 3 caracteres',
	'username_not_valid' => 'Nomes de usu�rio podem conter somente caracteres alfanum�ricos (A-Z, 0-9) e undeline (_).',
	'not_good_email' => 'Este n�o � um endere�o de e-mail v�lido',
	'c_admin_title' => 'Confirme a cria��o de um Administrador',
	'c_admin_message' => 'Um '.$lang['userlevels']['1'].' tem acesso total em Pivot, pode editar todas as entradas, todos os coment�rios e mudar qualquer op��o. Voc� est� seguro que gostaria de fazer %s um '.$lang['userlevels']['1'].'?',
);


//		Config Page		\\
$lang['config'] = array (
	'save' => 'Salvar prefer�ncias',

	'sitename' => 'Nome do Site',
	'defaultlanguage' => 'Idioma padr�o',
	'defaultencoding' => 'Usar codifica��o',
	'defaultencoding_desc' => 'Isto define que codifica��o � usada (como utf-8 ou iso-8859-1). Voc� deve deixar isto em branco, a menos que voc� conhe�a o que est� fazendo. Se voc� deixar isto em branco ser�o usadas as op��es apropriadas dos arquivos de idioma.',
	'defaulttheme' => 'Tema',
	'selfreg' => 'Permitir Auto-Cadastro',
	'selfreg_desc' => "Configurando isto para sim ir� permitir que pessoas registrem-se como (normal) users e ent�o possam postar entradas. (Este n�o � um usu�rio de coment�rio.)",
	'xmlrpc' => 'Permitir XML-RPC',
    'xmlrpc_desc' => 'Configurando esta op��o para sim, torna ativa a possibilidade de voc� postar para seu blog a partir de uma aplica��o de desktop para blogs (usando a MetaWeblog API).',
	'siteurl' => 'URL (endere�o) do Site',
	'header_fileinfo' => 'Informa��es do arquivo',
	'localpath' => 'Diret�rio Local',
	'debug_options' => 'Op��es de depura��o',
	'debug' => 'Modo de depura��o (Debug)',
	'debug_desc' => 'Mostrar esporadicamente informa��es de depura��o, aqui e ali..',
	'log' => 'Arquivos de log',
	'log_desc' => 'Manter arquivos de log para v�rias atividades',

	'unlink' => 'Arquivos sem link',
	'unlink_desc' => 'Algumas inst�ncias de servidores que possuem Safe_Mode (modo seguro) ativo, podem requerer esta op��o. Na maioria dos servidores ela n�o ter� nenhum efeito',
	'chmod' => 'Mudar permiss�es de arquivos para...',
	'chmod_desc' => 'Alguns servidores requerem que os arquivos criados tenham suas permiss�es alteradas (chmodded) de uma maneira espec�fica. Os valores comuns s�o \'0644\' e \'0755\'. N�o mude isto, a menos que conhe�a o que est� fazendo.',
	'header_uploads' => 'Op��es para envio (Upload) de arquivos',
	'upload_path' => 'Diret�rio para envio (upload) de arquivos',
	'upload_accept' => 'Tipos Aceitos',
	'upload_extension' => 'Extens�o padr�o',
	'upload_save_mode' => 'Sobrescrever (substituir)',
	'make_safe' => 'Limpar nome do arquivo',
	'c_upload_save_mode' => 'Incrementar nome do arquivo',
	'max_filesize' => 'Tamanho m�ximo do arquivo',
	'header_datetime' => 'Data/Hor�rio',
	'timeoffset_unit' => 'Unidade de diferen�a de hor�rio',
	'timeoffset' => 'Diferen�a de hor�rio',
	'header_extra' => 'Prefer�ncias diversas',
	'wysiwyg' => 'Usar Editor Visual (Wysiwyg)',
	'wysiwyg_desc' => 'Determinar se o Editor Visual (Wysiwig) est� ativo por padr�o. Usu�rios individuais podem alterar isso em suas prefer�ncias em \'Minhas Informa��es\'.',
	'basic_view' => 'Usar Visualiza��o B�sica',
	'basic_view_desc' => 'Define se \'Nova Entrada\' abre em Visualiza��o B�sica ou Extendida.',
	'def_text_processing' => 'Processamento de Texto Padr�o',
	'text_processing' => 'Processamento de texto',
	'text_processing_desc' => 'Determina o processamento de texto padr�o, quando um usu�rio n�o est� usando o Editor Visual (wysiwyg). \'Converter quebra de linhas\' n�o faz mais do que trasformar quebra de linhas para a tag (marca��o) &lt;br&gt;. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> � um estilo de marca��o (formata��o) poderoso, por�m f�cil de aprender.',
	'none' => 'Nenhum',
	'convert_br' => 'Converter quebras de linha para &lt;br /&gt;',
	'textile' => 'Textile',
	'markdown' => 'Markdown',
	'markdown_smartypants' => 'Markdown e Smartypants',

	'allowed_cats' => 'Categorias Permitidas',
	'allowed_cats_desc' => 'Este usu�rio tem permiss�o para postar nas categorias selecionadas',
	'delete_user' => "Excluir usu�rio",
	'delete_user_desc' => "Voc� pode excluir este usu�rio caso deseje. Todos os seus posts (entradas) ir�o permanecer, mas ele n�o poder� mais logar-se",
	'delete_user_confirm' => 'Voc� est� prestes a remover o acesso para %s. Tem certeza que deseja fazer isso?',
    'delete_commuser' => "Excluir Visitante Registrado",
    'delete_commuser_desc' => "Voc� pode excluir este Visitante Registrado se voc� desejar. Todos os seus coment�rios ir�o permanecer",
    'delete_commuser_confirm' => "Voc� est� prestes a remover a conta de %s. Voc� tem certeza que deseja fazer isto?",
    
	'setup_ping' => 'Configura��o de Ping',
	'ping_use' => 'Ping para rastreadores de atualiza��o',
	'ping_use_desc' => 'Isto determina quando rastreadores de atualiza��o como weblogs.com ser�o automaticamente notificados por Pivot se voc� postar uma Nova Entrada. Servi�os como blogrolling.com dependem destes pings',
	'ping_urls' => 'URL\'s para enviar ping',
	'ping_urls_desc' => 'Voc� pode providenciar v�rias URLs para enviar pings. N�o inclua a parte de protocolo: http:// de outro modo isto n�o ir� funcionar. Apenas coloque cada servidor em uma nova linha, ou separados por um caractere pipe \'|\'. Alguns servidores comuns para enviar pings s�o:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com pinger, o mais usado atualmente)<br /><b>pivotlog.net/pinger</b> (pivotlog pinger, todavia n�o est� ainda operacional)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com pinger)<br /><b>ping.blo.gs</b> (blo.gs pinger)<br />',

	'setup_tb' => 'Configura��es de Trackback',
	'tb_email' => 'Email',
	'tb_email_desc' => 'Caso seja ativado, um email ser� enviado para este endere�o quando um Tracback for adicionado.',

	'new_window' => 'Abra links numa nova janela',
	'emoticons' => 'Usar emoticons',
	'javascript_email' => 'Codificar endere�o de e-mail?',
	'new_window_desc' => 'Determina se todos os links usados em entradas ser�o abertos em uma nova janela do navegador.',

	'mod_rewrite' => 'Use Mod_rewrite (Reescrita)',
	'mod_rewrite_desc' => 'Se voc� usar a op��o do Apache Mod_rewrite (Reescrita), Pivot ir� criar url\'s como www.mysite.com/archive/2003/05/30/nice_weather, no lugar de www.mysite.com/pivot/entry.php?id=134. Nem todos os servidores suportam esta op��o, assim, por favor, leia a sess�o no manual sobre isto.',
	'mod_rewrite_1' => 'Sim, fa�a como /archive/2005/04/28/title_of_entry',
	'mod_rewrite_2' => 'Sim, fa�a como /archive/2005-04-28/title_of_entry',
	'mod_rewrite_3' => 'Sim, fa�a como /entry/1234',
	'mod_rewrite_4' => 'Sim, fa�a como /entry/1234/title_of_entry',

	'search_index' => 'Atualiza��o autom�tica do �ndice de Busca',
	'search_index_desc' => 'Isto ir� determinar se os arquivos do �ndice de Busca ser�o atualizados automaticamente a cada vez que for postada uma nova entrada ou alterada uma existente.',

	'default_allow_comments' => 'Permitir coment�rios como padr�o',
	'default_allow_comments_desc' => 'Determina se as entradas ir�o permitir coment�rios ou n�o.',
	'moderate_comments' => 'Moderar coment�rios',
    'moderate_comments_desc' => 'Determina se os coment�rios dever�o ser aprovados antes deles tornarem-se vis�veis no site.',

    'maxhrefs' => 'N�mero de Links',
    'maxhrefs_desc' => 'N�mero m�ximo de hyperlinks permitidos nos coment�rios. �til para conter spams nos coment�rios. Configure para 0 (zero) para um n�mero ilimitado de links.',
    'rebuild_threshold' => 'Limite de Reconstru��o',
    'rebuild_threshold_desc' => 'Quantidade de segundos reconstruindo entradas, antes do Pivot atualizar a p�gina. O padr�o � 28, mas se voc� tiver problemas com reconstru��o, tente abaixar este n�mero para 10.',
	'default_introduction' => 'Padr�o para Introduc�o/Corpo',
	'default_introduction_desc' => 'Isto ir� determinar os valores padr�es para Introdu��o e Corpo quando um autor escreve uma nova entrada. Normalmente este ser� um par�grafo vazio, o que faz mais sentido.',

	'upload_autothumb'	=> 'Miniaturas autom�ticas',
	'upload_thumb_width' => 'Largura da miniatura',
	'upload_thumb_height' => 'Altura da miniatura',
	'upload_thumb_remote' => 'Script (c�digo) de corte externo',
	'upload_thumb_remote_desc' => 'Se seu servidor n�o possui as bibliotecas necess�rias instaladas para realizar o corte de imagens, voc� pode usar um script de corte externo (remoto).',

	'extensions_header' => 'Diret�rio de extens�es',
	'extensions_desc'   => 'O diret�rio de \'extens�es\' � onde se guardam m�dulos adicionais do Pivot.
		Isto torna a atualiza��o muito mais f�cil. Veja os Docs para mais informa��es.',
	'extensions_path'   => 'Caminho do diret�rio de extens�es',

	'tag_options' => 'Op��es para Tags',
	'tag_cache' => 'Dura��o do Cache',
	'tag_cache_desc' => 'O total (em minutos) que a p�gina Tag � armazenada.',
	'tag_flickr' => 'Exibir imagens Flickr',
	'tag_flickr_desc' => 'Se for ativado para \'sim\', o Pivot ir� trazer imagens fetch com esta tag de from Flickr.com.',
	'tag_flickr_amount' => 'N�mero de imagens',
	'tag_flickr_amount_desc' => 'O total de imagens para trazer de Flickr.',
	'tag_fetcher' => 'Exibir feeds',
	'tag_fetcher_desc' => 'Se for configurado para \'sim\', o Pivot ir� exibir os bot�es para trazer feeds com esta tag de v�rias fontes.',
	'tag_fetcher_amount' => 'N�mero de items',
	'tag_fetcher_amount_desc' => 'O total de itens para trazer de cada fonte',
	'tag_min_font' => 'Tamanho m�nimo',
	'tag_max_font' => 'Tamanho m�ximo',
	'tag_max_font_desc' => 'O tamanho (em pixels) usado para exibir a \'tag nuvem\'. Tags que s�o usadas mais freq�entemente s�o exibidas em uma fonte maior.',

);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'Editar Weblog',
	'edit_blog' => 'Editar Weblogs',
	'new_weblog' => 'Novo Weblog',
	'new_weblog_desc' => 'Adicionar um novo Weblog',
	'del_weblog' => 'Excluir Weblog',
	'del_this_weblog' => 'Excluir este weblog.',
	'create_new' => 'Criar Novo Weblog',
	'subw_heading' => 'Para cada um dos subweblogs que se encontram nos templates, voc� pode configurar que templates eles usam, e tamb�m as categorias que s�o publicadas com eles',
	'create' => 'Finalizar',

	'create_1' => 'Criar / Editar Weblog, passo 1 de 3',
	'create_2' => 'Criar / Editar Weblog, passo 2 de 3',
	'create_3' => 'Criar / Editar Weblog, passo 3 de 3',

	'name' => 'Nome do Weblog',
	'payoff' => 'Descri��o',
	'payoff_desc' => 'Use a descri��o como um sub-t�tulo ou lema curto para seu weblog.',
	'url' => 'Endere�o (URL) para o Weblog',
	'url_desc' => 'Pivot ir� determinar o endere�o (url) de seu weblog se voc� deixar este campo em branco. Se voc� usar seu weblog como parte de um frame (quadros), ou como um \'include\' do lado do servidor, voc� pode usar isto para substituir o padr�o.',
	'index_name' => 'P�gina Inicial (Index)',
	'index_name_desc' => 'O nome do arquivo de �ndice (Index). Normalmente � algo como \'index.html\' ou \'index.php\'.',

	'ssi_prefix' => 'Prefixo SSI',
	'ssi_prefix_desc' => 'Se o seu weblog usa SSI (o que n�o se recomenda), voc� pode usar isto para converter um nome de arquivo do Pivot para um nome de arquivo usado por SSI. Ex.: \'index.shtml?p=\'. Voc� deve deixar isto em branco, a menos que saiba o que est� fazendo.',

	'front_path' => 'Diret�rio da sua P�gina Inicial',
	'front_path_desc' => 'O caminho (relativo ou absoluto) que Pivot ir� usar para criar a P�gina Inicial deste blog.',
	'file_format' => 'Nome do arquivo',
	'entry_heading' => 'Op��es para a Entrada',
	'entry_path' => 'Diret�rio para as Entradas',
	'entry_path_desc' => 'O caminho (relativo ou absoluto) que Pivot ir� usar para criar as p�ginas para Entradas �nicas (se voc� escolher n�o usar \'Entradas ao vivo\')',
	'live_comments' => 'Entradas ao vivo',
	'live_comments_desc' => 'Se voc� usar \'Entradas ao vivo\', Pivot n�o ir� necessitar gerar arquivos para cada entrada �nica. Esta � a op��o recomendada.',
	'readmore' => 'Texto de \'Leia mais\'',
	'readmore_desc' => 'Este texto ser� usado para indicar que h� mais texto nesta entrada do que o exibido na p�gina inicial. Se voc� deixar isto vazio, Pivot ir� usar o padr�o conforme definido pelas prefer�ncias de idioma.',

	'arc_heading' => 'Op��es do Hist�rico',
	'arc_index' => 'Arquivo de �ndice',
	'arc_path' => 'Diret�rio dos arquivos de hist�rico',
	'archive_amount' => 'Tamanho do Arquivo de hist�rico',
	'archive_unit' => 'Tipo do Hist�rico',
	'archive_format' => 'Formato do Hist�rico',
	'archive_none' => 'Sem Hist�ricos',
	'archive_weekly' => 'Hist�ricos semanais',
	'archive_monthly' => 'Hist�ricos mensais',
	'archive_yearly' => 'Hist�ricos anuais',

	'archive_link' => 'Link para o Hist�rico',
	'archive_linkfile' => 'Formato da lista de hist�ricos',
	'archive_order' => 'Ordem do Hist�rico',
	'archive_ascending' => 'Ascendente (mais antigos primeiro)',
	'archive_descending' => 'Descendente (mais novos primeiro)',

	'templates_heading' => 'Templates',
	'frontpage_template' => 'Template da P�gina Inicial',
	'frontpage_template_desc' => 'Este Template determina a apar�ncia da pagina de �ndice (index) deste weblog.',
	'archivepage_template' => 'Template da p�gina de Hist�ricos',
	'archivepage_template_desc' => 'Este Template ir� determinar a apar�ncia dos seus hist�ricos. Pode ser usado o mesmo que se usa em \'Template da P�gina Inicial\'.',
	'entrypage_template' => 'Template das entradas',
	'entrypage_template_desc' => 'Este template determina a apar�ncia das entradas �nicas.',
	'extrapage_template' => 'Template Extra',
	'extrapage_template_desc' => 'Este Template define a apar�ncia que seu Hist�rico e a apar�ncia que \'search.php\' (busca) ir� ter.',

	'shortentry_template' => 'Template das entradas curtas',
	'shortentry_template_desc' => 'Este template determina a apar�ncia de entradas �nicas, quando s�o exibidas dentro do weblog ou dos hist�ricos.',
	'num_entries' => 'N�mero de Entradas',
	'num_entries_desc' => 'O n�mero de entradas que ser� exibida na P�gina Inicial deste subweblog .',
	'offset' => 'Diferen�a',
	'offset_desc' => 'Se a Diferen�a cont�m um n�mero, esta quantidade de entradas ser�o saltadas por ocasi�o da gera��o da P�gina. Voc� pode usar isto para fazer uma lista de \'Entradas recentes\', por exemplo.',
	'comments' => 'Permitir coment�rios?',
	'comments_desc' => 'Determina se os visitantes poder�o deixar coment�rios para as entradas neste subweblog.',

	'publish_cats' => 'Publicar essas categorias',

	'setup_rss_head' => 'Configura��o RSS e Atom',
	'rss_use' => 'Gerar Feeds',
	'rss_use_desc' => 'Isto determina se Pivot ir� gerar automaticamente ou n�o um RSS e um Atom Feed para este weblog.',
	'rss_filename' => 'Nome do arquivo RSS',
	'atom_filename' => 'Nome do arquivo Atom',
	'rss_path' => 'Diret�rio do Feed',
	'rss_path_desc' => 'O caminho relativo ou absoluto para o diret�rio em que Pivot ir� criar os arquivos Feed.',
//	'rss_size' => 'Tamanho da entrada Feed',  /* DEPRECATED */
//	'rss_size_desc' => 'O tamanho (em caracteres) para uma entrada em arquivos Feed',  /* DEPRECATED */
	'rss_full' => 'Criar Feeds completos',
	'rss_full_desc' => 'Determina se Pivot ir� criar feeds Atom e RSS completos. Se a op��o for \'N�o\' Pivot ir� Feeds que apenas cont�m descri��es curtas, isto ir� fazer seus Feeds menos �teis.',
	'rss_link' => 'Link do Feed - RSS',
	'rss_link_desc' => 'O link enviado com o Feed, apontando para a p�gina principal. Se deixar em branco, o Pivot ir� enviar o link do �ndice do weblog\'s .',
	'rss_img' => 'Imagem do Feed - RSS',
	'rss_img_desc' => 'Voc� tamb�m pode escolher uma imagem para acompanhar o feed. Alguns leitores ir�o exibir a imagem, junto ocmm o texto do feed. Deixe em branco ou preencha com uma URL completa.',

	'lastcomm_head' => 'Prefer�ncias para os �ltimos Coment�rios',
	'lastcomm_amount' => 'Quantos ser�o exibidos?',
	'lastcomm_length' => 'Tamanho (em caracteres) para cortar',
	'lastcomm_format' => 'Formato',
	'lastcomm_format_desc' => 'Estas prefer�ncias determinam a apar�ncia dos \'�ltimos Coment�rios\' na P�gina Inicial deste weblog.',
	'lastcomm_nofollow' => 'Use \'nofollow\'',
	'lastcomm_nofollow_desc' => 'Para combater os Spams nas Refer�ncias voc� pode escolher a adi��o de um atributo \'rel="nofollow"\' para todos os links em coment�rios e refer�ncias, com isto o spammer n�o ser� ajudado a obter um melhor posi��o (Pagerank) no Google.',

	'lastref_head' => 'Op��es para as �ltimas Refer�ncias',
	'lastref_amount' => 'Quantos ser�o exibidos?',
	'lastref_length' => 'Tamanho (em caracteres) para corte',
	'lastref_format' => 'Formato',
	'lastref_format_desc' => 'Estas op��es determinam a apar�ncia dos \'�ltimos Coment�rios\' na p�gina inicial do weblog.',
	'lastref_graphic' => 'Usar �cones',
	'lastref_graphic_desc' => 'Isto determina se as �ltimas refer�ncias usar�o pequenos �cones para as Ferramentas de Busca mais comuns atrav�s dos quais os visitantes podem chegar.',
	'lastref_redirect' => 'Redirecionar refer�ncias',
	'lastref_redirect_desc' => 'Para combater spam nas refer�ncias voc� pode escolher redirecionar os links externos para refer�ncias, assim, isto n�o ir� ajudar o spammer a ter uma melhor posi��o (Pagerank) no Google.',

	'various_head' => 'V�rias Op��es',
	'emoticons' => 'Usar Emoticons',
	'emoticons_desc' => 'Determina se emoticons como :-) ser�o transformados para o seu equivalente gr�fico.',
	'encode_email_addresses' => 'Codificar endere�os de e-mail',
	'encode_email_addresses_desc' => 'Determina se os endere�os de e-mail ser�o codificados em Javascript, como prote��o contra programas de spam.',
	'target_blank' => 'Abrir nova p�gina',
	'xhtml_workaround' => 'XHTML Workaround (desvio)',
	'target_blank_desc' => 'Se voc� selecionar \'Sim\', todos os links em suas entradas ser�o abertos em uma nova janela do navegador. Caso selecione \'XHTML workaround\', todos os links ir�o ter um atributo rel="external", que n�o ir�o quebrar os XHTML bem formados',
	'search_format' => "Formato dos resultados de busca",
	'search_format_desc' => "Isto especifica a formata��o dos resultados de busca na p�gina de busca. Isto cont�m cinco partes, divididas por uma linha contendo '----': Topo, sum�rio, o in�cio da lista, todos os itens na lista e o fim da lista. Voc� pode encontrar os detalhes mais dif�ceis em <a href='http://pivotlog.net/docs/doku.php?id=working_with_search_results'>documentation</a>.",

	'date_head' => 'Op��es para exibi��o de Data',
	'full_date' => 'Formato completo de Data',
	'full_date_desc' => 'Isto determina o formato (completo) para Data e Hor�rio. Usado normalmente no topo de uma p�gina de entrada �nica',
	'entry_date' => 'Data da Entrada',
	'diff_date' => 'Data Diferente',
	'diff_date_desc' => 'A \'Data Diferente\' � usada normalmente em conjun��o com \'Data da Entrada\'. A Data da Entrada � exibida em cada entrada de seu log, enquanto a Data Diferente � somente exibida se a data difere da entrada anterior.',
	'language' => 'Idioma',
	'language_desc' => 'Isto determina em que idioma as datas e n�meros ser�o exibidos, e tamb�m determina a codifica��o de caracteres da p�gina (como iso-8859-1 ou koi8-r, por exemplo).',

	'comment_head' => 'Op��es para Coment�rios',
	'comment_sendmail' => 'Enviar Email?',
	'comment_sendmail_desc' => 'Ap�s um coment�rio ser introduzido, um email pode ser enviado para os moderadores deste weblog.',
	'comment_emailto' => 'Email para',
	'comment_emailto_desc' => 'Especifica os endere�os de email que ir�o receber a mensagem. Separe m�ltiplos endere�os de email usando v�rgula.',
	'comment_texttolinks' => 'Texto para links',
	'comment_texttolinks_desc' => 'Defina se as URL\'s e endere�os de email dever�o ser \'clic�veis\'.',
	'comment_wrap' => 'Ajustar coment�rios ap�s',
	'comment_wrap_desc' => 'Para prevenir que longas cadeias de caracteres quebrem seu layout, o texto ser� ajustado ap�s o n�mero de caracteres especificado.',
	'comments_text_0' => 'R�tulo para \'nenhum coment�rio\'',
	'comments_text_1' => 'R�tulo para \'um coment�rio\'',
	'comments_text_2' => 'R�tulo para \'X coment�rios\'',
	'comments_text_2_desc' => 'Este texto ser� usado para indicar quantos coment�rios existem. Se voc� deixar isto em branco, Pivot ir� usar o padr�o conforme definido nas prefer�ncias de idioma.',

	'comment_pop' => 'Coment�rios usam Popup (abrem nova janela)?',
	'comment_pop_desc' => 'Determina se as p�ginas com coment�rios (ou \'entrada �nica\') ser�o exibidas em uma nova janela (popup), ou na janela original do navegador.',
	'comment_width' => 'Largura do Popup',
	'comment_height' => 'Altura do Popup',
	'comment_height_desc' => 'Especifique a largura e a altura (em pixels) para o popup de coment�rios.',

	'comment_format' => "Formato para os Coment�rios",
	'comment_format_desc' => "Isto especifica o formato dos coment�rios nas P�ginas Iniciais.",

	'comment_reply' => "Formato de 'resposta..'",
	'comment_reply_desc' => "Isto determina a formata��o do link que os visitantes podem usar para responder em um coment�rio espec�fico.",
	'comment_forward' => "Formato de 'resposta por..'",
	'comment_forward_desc' => "Define a formata��o do texto exibido quando o coment�rio � respondido por um segundo coment�rio.",
	'comment_backward' => "Formato de 'resposta em..'",
	'comment_backward_desc' => "Define a formata��o do texto exibido quando o coment�rio � uma resposta a um coment�rio pr�vio.",

	'comment_textile' => 'Permitir Textile',
	'comment_textile_desc' => 'Se voc� selecionar esta op��o para \'Sim\', os visitantes ter�o permiss�o para usar <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> em seus coment�rios.',
	'save_comment' => 'Registrar Coment�rios',
	'comment_gravatardefault' => 'Gravatar Padr�o',
	'comment_gravatardefault_desc' => 'URL para a imagem padr�o de Gravatar. Iniciar com http://',
	'comment_gravatarhtml' => 'Gravatar HTML',
	'comment_gravatarhtml_desc' => 'HTML para inserir para um gravatar. %img% ser� substitu�da pela URL para a imagem.',
	'comment_gravatarsize' => 'Tamanho do Gravatar',
	'comment_gravatarsize_desc' => 'Tamanho (em pixels) para o gravatar. O padr�o � 48.',

    'trackback_head' => 'Op��es de Trackback',
	'trackback_sendmail' => 'Enviar E-mail?',
	'trackback_sendmail_desc' => 'Ap�s um trackback ser colocado, um e-mail ser� enviado para os mantenedores deste blog.',
	'trackback_emailto' => 'E-mail para',
	'trackback_emailto_desc' => 'Especifique o endere�o de email para quem o email ser� enviado. Em caso de v�rios endere�os separe com uma v�rgula.',
	'trackbacks_text_0' => 'R�tulo para \'sem trackbacks\'',
	'trackbacks_text_1' => 'R�tulo para \'um trackback\'',
	'trackbacks_text_2' => 'R�tulo para \'X trackbacks\'',
	'trackbacks_text_2_desc' => 'Este � o texto usado para indicar quantos trackbacks foram inclu�dos. Se voc� deixar isto em branco, o Pivot ir� usar o padr�o conforme definido pelas op��es de idioma',
	'trackback_pop' => 'Trackbacks em Popup?',
	'trackback_pop_desc' => 'Determina se a p�gina de trackbacks (ou \'Entrada �nica\') ser� exibida em uma janela popup, ou na janela original do navegador.',
	'trackback_width' => 'Largura do Popup',
	'trackback_height' => 'Altura do Popup',
	'trackback_height_desc' => 'Especifique a largura e a altura (em pixels) do popup de trackbacks.',
	'trackback_format' => "Formato de Trackbacks",
	'trackback_format_desc' => "Isto especifica a formata��o dos trackbacks nas p�ginas de entradas.",
	'trackback_link_format' => "Formato do link de Trackback",
        'save_trackback' => 'Registrar Trackback',

	'saved_create' => 'Um novo weblog foi criado.',
	'saved_update' => 'O weblog foi atualizado.',
	'deleted' => 'O weblog foi exclu�do!',
	'confirm_delete' => 'Voc� est� prestes a excluir o weblog %1. Voc� est� certo disso?',

	'blogroll_heading' => 'Prefer�ncias para Blogroll',
	'blogroll_id' => 'N�mero ID do Blogrolling',
	'blogroll_id_desc' => 'Voc� pode opcionalmente incluir um <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> blogroll em seu weblog. Blogrolling � um excelente servi�o para manter uma lista de links, que mostra como eles foram atualizados recentemente. Se voc� n�o deseja isto, apenas ignore este campo de entrada. Se n�o, quando voc� estiver logado em blogrolling.com, v� para \'get code\', l� voc� encontrar� links contendo o seu n�mero ID do blogroll. � alguma coisa como isto: 2ef8b42161020d87223d42ae18191f6d',
	'blogroll_fg' => 'Cor do Texto',
	'blogroll_bg' => 'Cor de Fundo',
	'blogroll_line1' => 'Cor da Linha 1',
	'blogroll_line2' => 'Cor da Linha 2',
	'blogroll_c1' => 'Cor 1',
	'blogroll_c2' => 'Cor 2',
	'blogroll_c3' => 'Cor 3',
	'blogroll_c4' => 'Cor 4',
	'blogroll_c4_desc' => 'Estas cores determinam como ser� a apar�ncia do seu blogroll. Da Cor 1 para a Cor 4 � oferecida uma indica��o visual de como foi recentemente atualizado um link.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Lista completa de pr�-visualiza��o',
	'thumbs' => 'Pr�-visualiza��o de miniaturas',
	'create_thumb' => '(Criar miniatura)',
	'title' => 'Arquivos',
	'thisfile' => 'Enviar um novo arquivo',
	'button' => 'Enviar (upload)',
	'filename' => 'Nome do arquivo',
	'thumbnail' => 'Miniatura',
	'date' => 'Data',
	'filesize' => 'Tamanho (KB)',
	'dimensions' => 'Largura x Altura',
	'delete_title' => 'Excluir imagem',
	'areyousure' => 'Voc� tem certeza que deseja excluir o arquivo %s?',
	'picheader' => 'Excluir esta imagem?',
	'create' => 'criar',
	'edit' => 'editar',

	'insert_image' => 'Inserir uma imagem',
	'insert_image_desc' => 'Para inserir uma imagem, voc� deve enviar (upload) uma imagem, ou escolher uma imagem enviada previamente.',
	'insert_image_popup' => 'Inserir uma Imagem Popup',
	'insert_image_popup_desc' => 'Para criar um popup para uma imagem, voc� deve enviar uma imagem, ou escolher uma imagem enviada previamente. Ent�o selecione um texto ou uma miniatura que ativar� o popup.',
	'choose_upload' => 'enviar',
	'choose_select' => 'ou selecionar',
	'imagename' => 'Nome da imagem',
	'alt_text' => 'Texto alternativo',
	'align' => 'Alinhamento',
	'border' => 'Borda',
	'pixels' => 'pixels',
	'uploaded_as' => 'Seu arquivo foi enviado como \'%s\'.',
	'not_uploaded' => 'Seu arquivo n�o foi enviado, e os seguintes erros ocorreram:',
	'center' => 'Centralizado (por padr�o)',
	'left' => 'Esquerda',
	'right' => 'Direita',
	'inline' => 'Justificado',
	'notice_upload_first' => 'Voc� deve primeiro selecionar ou enviar uma imagem.',
	'select_image' => 'Selecionar imagem',
	'select_file' => 'Selecionar Arquivo',

	'for_popup' => 'Para o popup',
	'use_thumbnail' => 'Usar miniatura',
	'edit_thumbnail' => 'Editar miniatura',
	'use_text' => 'Usar texto',
	'insert_download' => 'Inserir Download',
	'insert_download_desc' => 'Para criar um link para download de arquivo, fa�a o upload do arquivo ou escolha um arquivo j� transferido. Em seguida, selecione um �cone ou texto para o link.',
	'use_icon' => 'Usar �cone',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Inserir link',
	'insert_link_desc' => 'Inserir um link escrevendo uma URL no campo abaixo. Visitantes do seu site ir�o ver o t�tulo, quando posicionarem o ponteiro do mouse sobre o link.',
	'url' => 'URL',
	'title' => 'T�tulo',
	'text' => 'Texto',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Editar quem pode postar para a categoria \'%s\'',
	'name' => 'Nome',
	'users' => 'Usu�rios',
	'make_new' => 'Criar Nova Categoria',
	'create' => 'Criar Categoria',
	'canpost' => 'Selecionar os usu�rios que voc� deseja que tenham permiss�o para postar nesta categoria',
	'same_name' => 'Uma categoria com este nome j� existe',
	'need_name' => 'Esta categoria necessita de um nome',

	'allowed' => 'Permitido',
	'allow' => 'Permitir',
	'denied' => 'Negado',
	'deny' => 'Negar',
	'edit' => 'Editar categoria',

	'delete' => 'Excluir categoria',
	'delete_desc' => 'Selecione \'Sim\', se voc� deseja excluir esta categoria',

	'delete_message' => 'Nesta vers�o de Pivot, somente o nome da categoria ser� exclu�do. Nas pr�ximas vers�es voc� poder� escolher o que fazer com as entradas da categoria que ser� exclu�da.',
	'search_index_newctitle'   => 'Indexar esta categoria',
	'search_index_newcdesc'    => 'Apenas ative \'N�o\' se n�o quiser que os visitantes realizem buscas nessa categoria.',
	'search_index_editcheader' => '�ndice da Categoria',

	'order' => 'Ordenamento',
	'order_desc' => 'Categorias com ordenamento mais baixo aparecer�o no topo da lista. Se voc� mantiver n�meros iguais para todas, elas ser�o ordenadas por ordem alfab�tica.',
	'public' => 'Categoria P�blica',
	'public_desc' => 'Se ativar \'N�o\', essa categoria ser� exibida apenas para visitantes registrados. (apenas p�ginas ao vivo)',
	'hidden' => 'Categoria oculta',
	'hidden_desc' => 'Caso voc� escolha \'Sim\', esta categoria ser� escondida da listagem dos Arquivos/Hist�ricos. (Aplica-se somente para p�ginas Ao Vivo)',

);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Publicar Entrada",
	'preview_entry' => "Pr�-Visualizar Entrada",
	'edit_entry' => "Editar Entrada",
	'edit_entry_desc' => "Editar esta Entrada",

	'first' => 'Primeira',
	'last' => '�ltima',
	'next' => 'Pr�xima',
	'previous' => 'Anterior',

	'jumptopage' => 'Saltar para a p�gina: (%num%)',
	'filteron' => 'Filtrar por (%name%)',
	'filteroff' => 'Cancelar filtro',
	'title' => 'T�tulo',
	'subtitle' => 'Subt�tulo',
	'introduction' => 'Introdu��o',
	'body' => 'Corpo',
	'publish_on' => 'Publicar',
	'status' => 'Status',
	'post_status' => 'Publicar Status',
	'category' => 'Categoria',
	'select_multi_cats' => '(Ctrl-click para selecionar m�ltiplas categorias)',
	'last_edited' => "�ltima modifica��o em",
	'created_on' => "Criada em",
	'date' => 'Data',
	'author' => 'Autor',
	'code' => 'C�digo',
	'comm' => 'Quant.Coment.',
	'track' => 'Quant. Track',
	'name' => 'Nome',
	'allow_comments' => 'Permitir coment�rios',

	'delete_entry' => "Apagar Entrada",
	'delete_entry_desc' => "Apagar Entrada e seus coment�rios ",
	'delete_one_confirm' => "Tem certeza que deseja apagar essa entrada?",
	'delete_multiple_confirm' => "Tem certeza que deseja apagar essas entradas?",

	'convert_lb' => 'Converter quebra de linhas',
	'always_off' => '(Sempre desligado, quando em modo Wysiwyg/Visual)',
	'be_careful' => '(Seja cuidadoso com isto!)',
	'edit_comments' => 'Editar coment�rios',
	'edit_comments_desc' => 'Editar os coment�rios que foram postados para esta entrada',
	'edit_comment' => 'Editar coment�rio',
	'delete_comment' => 'Excluir Coment�rio',
	'report_comment' => 'Informar Coment�rio',
	'edit_trackback' => 'Editar Trackback',
	'edit_trackback_desc' => 'Editar os trackbacks que foram postados para este post',
	'delete_trackback' => 'Excluir Trackback',
	'report_trackback' => 'Informar Trackback',
	'block_single' => 'Bloquear este IP %s',
	'block_range' => 'Bloquear esta faixa de IP %s',
	'unblock_single' => 'Desbloquear este IP %s',
	'unblock_range' => 'Desbloquear esta faixa de IP %s',
	'trackback' => 'Ping de Trackback (Rastreio)',
	'trackback_desc' => 'Enviar pings de Trackback para as seguintes url(s). Para enviar para v�rias urls, coloque cada uma em uma linha separada.',
	'keywords' => 'Palavras-chave',
	'keywords_desc' => 'Use para definir algumas palavras-chave que poder�o ser usadas para busca desta entrada, ou criar uma url simplificada (non-crufty).',
	'vialink' => "Via link",
	'viatitle' => "Via t�tulo",
	'via_desc' => 'Use isso para definir um link para a origem dessa entrada.',
	'entry_catnopost' => 'Voc� n�o tem permiss�o para postar nessa categoria:\'%s\'.',
	'entry_saved_ok' => 'Sua entrada \'%s\' foi salva com sucesso.',
	'entry_ping_sent' => 'Um ping de Trackback (rastreio) foi enviado para \'%s\'.',
	'encoding_warning' =>'Voc� est� escrevendo esta entrada em %s, enquanto ao menos um dos seus weblogs usa outra codifica��o. Para prevenir problemas com isto, voc� deve assegurar-se que todos os usu�rios e weblogs usam a mesma codifica��o.',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'Selecionar todos',
	'c_none' => 'Desmarcar todos',
	'choose' => '- selecione uma op��o -',
	'publish' => 'Mude Status para \'publicada\'',
	'hold' => 'Mude Status para \'Rascunho\'',
	'delete' => 'Excluir',
	'generate' => 'Publicar e gerar',

	'with_checked_entries' => "Com as entradas selecionadas, fa�a:",
	'with_checked_files' => "Com os arquivos selecionados, fa�a:",
	'with_checked_templates' => 'Com os templates selecionados, fa�a:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'N�o foi poss�vel abrir o diret�rio, verifique suas permiss�es.',
	'path_read' => 'N�o foi poss�vel realizar leitura deste diret�rio, verifique suas permiss�es.',
	'path_write' => 'N�o foi poss�vel escrever neste diret�rio, verifique suas permiss�es.',

	'file_open' => 'N�o foi poss�vel abrir o arquivo, verifique suas permiss�es.',
	'file_read' => 'N�o foi poss�vel fazer leitura deste arquivo, verifique suas permiss�es.',
	'file_write' => 'N�o foi poss�vel escrever o arquivo, verifique suas permiss�es.',
	
    'reg_required' => 'Registro necess�rio',
	'entry_404' => 'Esta Entrada n�o existe!',
	'entry_404_desc' => "Esta entrada n�o existe, ou n�o foi publicada ainda.",
	'category_404' => 'Esta Categoria n�o existe',
	'category_404_desc' => "Esta categoria n�o existe, ou n�o foi publicada por qualquer weblog.",
);


//		Notices			\\
$lang['notice'] = array (
	'comment_saved' => "O coment�rio foi salvo.",
	'comment_deleted' => "O coment�rio foi exclu�do.",
	'comment_none' => "Esta entrada n�o possui coment�rios.",
	'trackback_saved' => "O Trackback foi salvo.",
	'trackback_deleted' => "O Trackback foi exclu�do.",
	'trackback_none' => "Este post n�o possui trackbacks.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'Vote \'%val%\' nesta entrada',
	'good' => 'Boa',
	'bad' => 'Ruim',
	'already' => 'Voc� j� votou nesta mensagem',
	'register' => 'Seu voto para \'%val%\' foi registrado',
);


$lang['comment'] = array (
	'register' => 'Seu coment�rio foi registrado.',
	'preview' => 'Voc� est� pr�-visualizando seu coment�rio. Assegure-se de clicar em \'Postar coment�rio\' para salv�-lo.',
	'duplicate' => 'Seu coment�rio n�o foi registrado pois ele aparenta ser uma duplicata de um coment�rio anterior',
	'no_name' => 'Voc� deve escrever seu nome (ou um nick) no campo \'Nome\'. Assegure-se de clicar em \'Postar coment�rio\' para registr�-lo permanentemente.',
	'no_comment' => 'Voc� deve escrever algo no campo \'Coment�rio\'. Assegure-se de clicar em \'Postar coment�rio\' para registr�-lo permanentemente.',
	'too_many_hrefs' => 'O limite m�ximo de hyperlinks foi excedido. N�o fa�a spam!!',
	'email_subject_comm' => '[Coment�rio]',
	'email_subject_notify' => '[Notifica��o]',
	'email_posted_comm' => "'%s' postou o seguinte coment�rio",
	'email_comm_on' => "Este � um coment�rio sobre a entrada '%s'",
	'email_allow_comm' => "Permitir este coment�rio",
	'email_delete_comm' => "Excluir este coment�rio",
	'email_view_comm' => "Visualizar este coment�rio",
	'email_edit_comm' => "Editar este coment�rio",
	'email_posted_entry' => "'%s' postou a seguinte entrada",
	'email_view_entry' => "Visualizar esta entrada",
	'email_view_fullentry' => "Visualizar a entrada completa",
	'email_view_settings' => "Visualizar suas Op��es",
	'email_sent_to' => "Este email foi enviado para",
	'email_notified' => "Notifica��es enviadas para",
	'email_posted_tb' => "'%s' postou o seguinte trackback",
	'email_tb_on' => "Este � um trackback na entrada '%s'",
	'email_edit_tb' => "Editar este trackback",
	'email_block_ip' => "Bloquear este IP",
	'notifications' => "notifica��es",
    'oneclickdelete' => "Excluir com um clique.",
    'oneclickreport' => "Informar e excluir com um clique.",
    'moderated' => "Moderado",
    'moderate_queue_on' => "Modera��o de coment�rios est� ativa neste site. Isto significa que seu coment�rio n�o ser� exibido neste site at� ser aprovado por um editor.",
    'moderate_stored' => "Seu coment�rio foi registrado. Mas como a Modera��o de Coment�rios est� ativa, ele estar� esperando a aprova��o de um editor antes de ser exibido.",
    'moderate_waiting' => "Um ou mais coment�rios est�o esperando a aprova��o de um editor."
);


$lang['comments_text'] = array (
	'0' => "Nenhum coment�rio",
	'1' => "%num% coment�rio",
	'2' => "%num% coment�rios",
);

$lang['trackbacks_text'] = array (
	'0' => "Nenhum trackback",
	'1' => "%num% trackback",
	'2' => "%num% trackbacks",
);

$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "Arquivos",
	'next_archive' => "Pr�ximo Arquivo",
	'previous_archive' => "Arquivo Anterior",
	'last_comments' => "�ltimos Coment�rios",
	'last_referrers' => "�ltimas Refer�ncias",
	'calendar' => "Calend�rio",
	'links' => "Links",
	'xml_feed' => "XML: RSS Feed",
	'atom_feed' => "XML: Atom Feed",
	'powered_by' => "Powered by",
	'blog_name' => "Nome do Weblog",
	'title' => "T�tulo",
	'excerpt' => "Resumo",
	'name' => "Nome",
	'email' => "Email",
	'url' => "URL",
	'date' => "Data",
	'comment' => "Coment�rio",
	'ip' => "Endere�o IP",
	'yes' => "Sim",
	'no' => "N�o",
	'emoticons' => "Emoticons",
	'emoticons_reference' => 'Abrir refer�ncia para Emoticons',
	'textile' => "Textile",
	'textile_reference' => "Abrir refer�ncia para Textile",
	'post_comment' => "Postar coment�rio",
	'preview_comment' => "Visualizar coment�rio",
	'remember_info' => "Relembrar suas informa��es pessoais?",
	'notify' => "Notificar",
	'notify_yes' => "Sim, envie-me um email quando algu�m responder.",
	'register' => "Registrar seu Nome de Usu�rio/Login",
	'registered' => "Registrado",
	'disclaimer' => "<b>Aviso:</b> Todas as marca��es HTML, exceto &lt;b&gt; and &lt;i&gt; ser�o removidas do seu coment�rio. Voc� pode escrever links simplesmente digitando a URL ou endere�o de e-mail.",
	'search_title' => "Resultados da busca",
	'search' => "Busca!",
	'nomatches' => "Sem resultados para '%name%'. Tente alguma outra palavra.",
	'matches' => "Resultados para '%name%':",
	'about' => "Sobre...",
	'stuff' => "Tecnologias",
	'linkdump' => "Lista de links",
	'discreet' => "Ocultar email",
	'discreet_yes' => "Sim, n�o mostre meu endere�o de email.",
	'moderated' => "Moderado",
    'waiting_moderation' => "Este coment�rio ainda n�o foi moderado.",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Editar campos do usu�rio',
	'edit' => 'Editar',
	'create' => 'Criar',

	'dispname' => 'Exibir nome',
	'intname' => 'Nome interno',
	'intname_desc' => 'O nome interno � o nome deste item tal como ir� aparecer quando voc� indicar ao Pivot para exib�-lo em um template.',
	'size' => 'Tamanho',
	'rows' => 'Linhas',
	'cols' => 'Colunas',
	'maxlen' => 'Largura m�xima',
	'minlevel' => 'N�vel Min. de Usu�rio',
	'filter' => 'Filtrar por',
	'filter_desc' => 'Filtrando por este item, voc� limita os tipos de dados que podem ser usados com ele',
	'no_filter' => 'Nenhum',
	'del_title' => 'Confirmar exclus�o',
	'del_desc' => 'Excluindo este campo de usu�rio (<b>%s</b>) ir� tamb�m destruir todos os dados que estes usu�rios tenham registrado com ele. Qualquer inst�ncia deste campo num template ir� aparecer vazio.',

	'already' => 'Este nome j� se encontra em uso',
	'int' => 'O nome interno deve ter mais de 3 caracteres',
	'short_disp' => 'O nome a ser exibido deve ter mais de 3 caracteres',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Favoritos',
	'bm_add' => 'Adicionar Favoritos.',
	'bm_withlink' => 'Pivot &raquo; Nova',
	'bm_withlink_desc' => 'Este favorito abre uma janela com uma Nova Entrada, que cont�m um link para a p�gina da qual se originou',

	'bm_nolink' => 'Pivot &raquo; Nova',
	'bm_nolink_desc' => 'Este favorito abre uma janela com uma Nova Entrada em branco.',

	'bookmarklets_info' => 'Voc� pode usar Favoritos para rapidamente escrever Novas Entradas com Pivot. Para adicionar Favoritos para o seu Navegar (Browser), use uma das seguintes op��es: (O texto exato varia dependendo do Navegador que voc� est� usando)',
	'bookmarklets_info_1' => 'Clique e arraste o Favorito para a sua barra de \'Links\' ou para seu bot�o de \'Favoritos\'.',
	'bookmarklets_info_2' => 'Clique com o bot�o direito no Favorito e selecione \'Adicionar a Favoritos...\'.',
);

// Accessibility - These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines & 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
// 2004/11/25 =*=*= JM - minor correction for tim
$lang['accessibility'] = array(
	'search_idname'      => 'Busca',
	'search_formname'    => 'Busca por palavras usadas nas entradas deste blog',
	'search_fldname'     => 'Digite o(s) termo(s) de busca aqui:',
	'search_placeholder' => 'Digite os termos de busca',

	'calendar_summary'   => 'Essa tabela representa um calend�rio de entradas do blog com links nas datas com entradas.',
	'calendar_noscript'  => 'Esse calend�rio providencia um meio de acesso �s entradas deste blog',
	/*
	2-letter language code, used to designate the principal language used on the site
	see: http://www.oasis-open.org/cover/iso639a.html
	*/

	'lang' => $langname,
) ;


$lang['snippets_text'] = array (
    'word_plural'     => 'palavras',
    'image_single'    => 'imagem',
    'image_plural'    => 'imagens',
    'download_single' => 'arquivo',
    'download_plural' => 'arquivos',
);

$lang['trackback'] = array (
    'register' => 'Seu trackback foi armazenado.',
    'duplicate' => 'Seu trackback n�o foi armazenado, porque este parece ser a duplicata de um anterior',
    'too_many_hrefs' => 'O n�mero m�ximo de hyperlinks foi excedido. N�o fa�a spam!!',
    'noid'      => 'Sem ID de TrackBack (tb_id)',
    'nourl'     => 'Sem URL (url)',
    'tracked'   => 'Tracked (rastreado)',
    'email_subject' => '[Trackback] Re:',
);

$lang['commentuser'] = array (
    'title'             => 'Login para Usu�rio do Pivot',
    'header'            => 'Login como um visitante registrado',
    'logout'            => 'Log out (Deslogar).',
    'loggedout'         => 'Logged out (Deslogado)',
    'login'             => 'Login',
    'loggedin'          => 'Logged in (Logado)',
    'loggedinas'        => 'Logado como',
    'pass_forgot'       => 'Esqueceu sua senha?',
    'register_new'      => 'Registrar um novo nome de usu�rio.',
    'register'          => 'Registrar como um visitante',
    'register_info'     => 'Preencha a seguinte informa��o. <strong>Assegure-se de fornecer um endere�o de email v�lido</strong>, pois ser� enviado um email de verifica��o para seu endere�o.',
    'pass_note'         => 'Aviso: � poss�vel para o webmaster deste site <br /> visualizar sua senha... portanto <em>N�o</em> use uma senha<br /> que voc� use para outros sites/contas!',
    'show_email'        => 'Mostre meu endere�o de email com os coment�rios',
    'notify'            => 'Notifique-me via email quando forem inclu�das novas entradas',
    'def_notify'        => 'Notifica��o padr�o para respostas',
    'register'          => 'Registrar',
    'pass_invalid'      => 'Senha incorreta',
    'user_disabled'     => 'Usu�rio desabilitado',
    'nouser'            => 'Usu�rio inexistente...',
    'change_info'       => 'Aqui voc� pode mudar suas informa��es.',
    'pref_edit'         => 'Editar suas prefer�ncias',
    'pref_change'       => 'Mudar prefer�ncias',
    'options'           => 'Op��es',
    'user_exists'       => 'Usu�rio j� existente... favor escolher outro nome.',
    'email_note'        => 'Voc� deve fornecer seu endere�o de email, sem isto ser� imposs�vel verificar sua conta. Voc� sempre poder� escolher n�o mostrar seu email para outros visitantes.',
    'stored'            => 'As altera��es foram salvas',
    'verified'          => 'Sua conta foi verificada. Favor logar-se...',
    'not_verified'      => 'Este c�digo parece estar incorreto. Desculpe, mas n�o � poss�vel verificar.',
    'pass_sent'         => 'Sua senha foi enviada para o endere�o de email fornecido..',
    'user_pass_nomatch' => 'Este Nome de Usu�rio e Senha n�o parecem corresponder um ao outro.',
    'user_stored'       => 'Usu�rio registrado!',
    'user_stored_failed' => 'N�o foi poss�vel registrar o novo usu�rio!!',
    'pass_send'         => 'Enviar Senha',
    'pass_send_desc'    => 'Se voc� esqueceu sua senha, preencha seu \'Nome de Usu�rio\' e endere�o de email, e o sistema Pivot ir� enviar sua Senha para seu email. ',
    'oops'              => 'Oops',
    'back'              => 'Voltar para',
    'back_login'        => 'Voltar para login',
    'forgotten_pass_mail' => "Sua senha esquecida para Pivot '%name%' �: \n\n%pass%\n\nFavor n�o esquecer novamente, ok?\n\n Logue-se em sua conta, clicando no seguinte link:\n %link%",
    'registered'        => "Voc� foi cadastrado como um novo usu�rio do Pivot '%s'",
    'reg_confirmation'  => 'Confirma��o de Cadastro',
    'reg_verify_short'  => 'Verifique sua conta',
    'reg_verify_long'   => "Pra verificar sua conta, clique no seguinte link:\n %s",
    'reg_verification'  => 'Verifica��o de email enviada para %s. Favor checar seu email em um minuto para confirmar sua conta.'
);

$lang['tags'] = array (
    'tag'               => "Tag",
    'tags'              => "Tags",
    'tags_in_posting'	=> "Tags usadas nesta postagem",
    'click_for_universe'	=> "Clique para a p�gina local Tag Cosmos. ",
    'localcosmos_description'	=> "Esta � a Tag Cosmos local para este weblog. Quanto maior a tag, mais entradas neste blog s�o relacionadas a ela. As tags s�o ordenadas alfabeticamente. Clique em qualquer tag para descobrir mais.<br/><br/>",
    'tagoverview_header'	=> "Tag vis�o geral para: ",
    'entries_with_tag'	=> "Entradas neste site com ",
    'related_tags'	=> "Tags relacionadas",
    'no_related_tags'	=> "N�o h� tags relacionadas",
    'latest_on'	        => "Mais recente em",
    'flickr_images'	=> "Imagens Flickr para",
    'external_feeds'	=> "Feeds externos para",
    'nothing_on'	=> "Nada em",
    'click_icon'	=> "Clique no �cone para uma lista de links em",
    'on'                => "em",
    'for'               => "para",
    'found_on'	        => "encontrado em",
    'tag_ext_link'      => "Links externos Tagged (marcados):",
    'other_posts_with_tag'	=> "Outras entradas sobre",
    'used_tags'		=> "Tags usadas",
    'suggested_tags' => "Tags sugeridas",
    'insert_tag' => "Inserir uma Tag",
    'insert_tag_desc' => "Inserir uma tag em sua entrada com um link opcional. Voc� pode tamb�m selecionar uma tag da Tag Nuvem (parcial) abaixo."
);

// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

	$groups = count($lang);
	$total = 0;
	foreach ($lang as $langgroup) {
		$total += count($langgroup);
	}
	echo "<h2>Arquivo de idioma correto! (01.12.2006)</h2>";
	echo "Esse arquivo cont�m $groups grupos e um total de $total marca��es.";

}

?>
