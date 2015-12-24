<?php
//Portuguese (Brazil)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Brazilian Portuguese translation of Pivot lang file
// Created by: Clébio C. Felix | email: clebiofelix (at) yahoo (dot) com (dot) br | www.tradblogs.com.br/voznodeserto/
// Latest Update: [v1.40.x '---'] Clébio C. Felix | 01.12.2006

// allow for different encoding for non-western languages
$encoding="iso-8859-1";
$langname="pt";


//		General		\\
$lang['general'] = array (
	'yes' => 'Sim',	//affirmative
	'no' => 'Não',		//negative
    'continue' => 'Continuar', //proceed
	'go' => 'Avançar!',	//proceed

	'minlevel' => 'Você não possui permissão para acessar esta área de Pivot',
	'email' => 'Email',
	'url' => 'URL',
	'further_options' => "Opções avançadas",
	'basic_view' => "Visualização básica",
	'basic_view_desc' => "Visualizar somente os campos mais comuns",
	'extended_view' => "Visualização extendida",
	'extended_view_desc' => "Visualizar todos os campos editáveis",
	'toggle_view' => "Alternar entre visualização básica e extendida",
	'select' => "Selecionar",
	'cancel' => "Cancelar",
	'delete' => 'Apagar',
    'approve' => 'Aprovar',
	'edit' => 'Editar',
	'welcome' => "Bem-vindo ao %build%.",
	'write' => "Escrever",
	'write_open_error' => "Erro de escrita. Não foi possível abrir arquivo para edição",
	'write_write_error' => "Erro de escrita. Não foi possível escrever/salvar para arquivo",
	'done' => "Finalizado!",
	'shortcuts' => "Atalhos",
	'cantdelete' => "Você não tem permissão para excluir a entrada %title%!",
	'cantdothat' => "Você não tem permissão para esta ação com a entrada %title%!",
	'cantdeletelast' => "Você não pode excluir a última entrada. Você deve primeiro, postar uma nova entrada antes de excluir esta entrada",
	'more' => "Mais",
	'all' => "Tudo",
);


$lang['userlevels'] = array (
		'SuperAdministrador', 'Administrador', 'Avançado', 'Normal', 'Moblogger'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin,
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'zero', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove', 'dez', 'onze', 'doze', 'treze', 'quatorze', 'quinze', 'dezesseis',
);


$lang['months'] = array (
	'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
);


$lang['months_abbr'] = array (
	'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'
);


$lang['days'] = array (
	'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'
);


$lang['days_abbr'] = array (
	'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'
);


$lang['days_calendar'] = array (
	'D', 'S', 'T', 'Q', 'Q', 'S', 'S'
);


$lang['datetime_words'] = array (
	'Ano', 'Mês', 'Semana', 'Dia', 'Hora', 'Minuto', 'Segundo'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Login',
	'name' => 'Usuário',
	'pass' => 'Senha',
	'remember' => 'Relembrar',
	'rchoice' => array (
		'0' => 'Nada',
		'1' => 'Meu Usuário e Senha',
		'2' => 'Desejo permanecer logado'
	),
	'delete_cookies_desc' => 'Se você tem certeza que seu nome de usuário e sua senha estão corretos, mas está <br />tendo problemas para logar-se, você pode tentar excluir os cookies deste domínio:',
	'delete_cookies' => 'Excluir cookies',
	'retry' => 'Usuário e/ou senha incorretos',
	'banned' => 'Você falhou em 10 tentativas de acesso. Como resultado, este IP está bloqueado para tentativas de login durante 12 horas.',

);


//		Main Bar		\\
$lang['userbar'] = array (
	'main' => 'Menu Geral',
	'entries' => 'Entradas',
	'submit' => 'Nova entrada',
	'comments' => 'Comentários',
	'trackbacks' => 'Trackbacks',
	'modify' => 'Modificar Entradas',
	'userinfo' => 'Minhas Informações',
	'u_settings' => 'Minhas Opções',
	'u_marklet' => 'Favoritos',
	'files' => 'Gerenciar Mídias',
	'upload' => 'Enviar arquivos',
	'stats' => 'Estatísticas',
	'admin' => 'Administração',

	'main_title' => 'Menu Geral do Pivot',
	'entries_title' => 'Menu de Entradas',
	'submit_title' => 'Nova Entrada',
	'comments_title' => 'Editar ou Excluir Comentários',
	'trackbacks_title' => 'Editar ou excluir Trackbacks',
	'modify_title' => 'Modificar Entrada',
	'userinfo_title' => 'Visualizar minhas informações pessoais',
	'u_settings_title' => 'Editar minhas opções pessoais',
	'u_marklet_title' => 'Criar Favoritos',
	'files_title' => 'Gerenciar e Enviar Mídias',
	'upload_title' => 'Enviar Arquivos',
	'uploaded_success' => 'O Arquivo foi enviado',
	'stats_title' => 'Visualizar Logs e Estatísticas.',
	'updatetitles_title' => 'Visualizar Logs e Estatísticas.',
	'admin_title' => 'Menu de Administração',
	'recent_entries' => 'Entradas Recentes',
	'recent_comments' => 'Comentários Recentes',
	'moderate_comments' => 'Moderar Comentários',
    'moderate_comments_desc' => 'Existe(m) %1 comentário(s) aguardando aprovação.',
    'moderate_nocomments_desc' => 'Não existem comentários aguardando aprovação.',
	'moderate_autoapprove' => 'Aprovar imediatamente os comentários destes Visitantes Registrados no futuro.',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	'seeusers' => 'Usuários',
    'seecommusers' => 'Visitantes Registrados',
	'seeconfig' => 'Configuração',
	'filemappings' => 'Mapa dos Arquivos',
	'templates' => 'Templates (Modelos)',
	'maintenance' => 'Manutenção',
	'regen' => 'Reconstruir Todos os Arquivos',
	'blogs' => 'Weblogs',
	'categories' => 'Categorias',
	'verifydb' => 'Verificar a Base de Dados',
	'buildindex' => 'Reconstruir o Índice',
	'buildsearchindex' => 'Reconstruir o Índice de Busca',
	'buildfrontpage' => 'Reconstruir as Páginas Iniciais',
	'sendping' => 'Enviar Pings',
	'backup' => 'Backup',
	'description' => 'Descrição',
	'conversion' => 'Conversão',
	'seeusers_title' => 'Criar, editar e excluir usuários',
    'seecommusers_title' => "Visualizar e editar Visitantes Registrados",
	'userfields' => 'Campos de informação do usuário',
	'userfields_title' => 'Criar, editar e excluir Campos de Informação do Usuário',
	'seeconfig_title' => 'Editar o Arquivo de Configuração',
	'filemappings_title' => 'Visão geral dos arquivos que são criados neste site pelos Weblogs deste Pivot',
	'templates_title' => 'Criar, editar e excluir Templates (modelos)',
	'maintenance_title' => 'Executar rotinas de manutenção nos arquivos de Pivot',
	'regen_title' => 'Reconstruir os arquivos e históricos que Pivot gera',
	'blogs_title' => 'Criar, editar e excluir Weblogs',
	'blogs_edit_title' => 'Editar opções de Weblog para ',
	'categories_title' => 'Criar, editar e excluir Categorias',
	'verifydb_title' => 'Verificar a integridade da sua Base de Dados',
	'buildindex_title' => 'Reconstruir o Índice da sua Base de Dados',
	'buildsearchindex_title' => 'Reconstruir o Índice de Busca, para permitir busca nas entradas',
	'buildfrontpage_title' => 'Reconstruir a Página Inicial, últimos arquivos e arquivos RSS para cada weblog.',
	'backup_title' => 'Criar um Backup das suas entradas',
    'backup_db' => "Backup da Base de Dados",
    'backup_db_desc' => "Isto irá permitir fazer download de um arquivo ZIP contendo sua Base de Dados (com todas as suas Entradas)",
	'backup_config' => 'Backup dos arquivos de configuração',
	'backup_config_desc' => 'Isso irá permitir fazer download de um arquivo ZIP com seus arquivos de configuração.',
	'ipblocks' => 'IP\'s bloqueados',
	'ipblocks_title' => 'Visualizar e editar os endereços de IP bloqueados.',
	'ipblocks_stored' => 'Os endereços de IP foram salvos.',
	'ipblocks_store' => 'Salvar estes endereços de IP',
	'ignoreddomains' => 'Domínios Ignorados',
	'ignoreddomains_title' => 'Visualizar e Editar os Domínios Ignorados.',
	'ignoreddomains_stored' => 'Os Domínios Ignorados foram registrados.',
	'ignoreddomains_store' => 'Salve estes Domínios Ignorados',
	'ignoreddomains_asterisk' => 'Itens marcados com um asterisco ( * ) serão usados somente para bloquear referências. Todos os outros itens serão usados para bloquear referências, comentários e trackbacks de forma igual.',
	'ignoreddomains_global' => 'Expressões bloqueadas de forma global.',
	'ignoreddomains_global_desc' => 'Além das Expressões Bloqueadas mencionadas acima, você também pode usar uma lista atualizadat que seu Pivot pode descarregar do servidor Pivotlog.net. Atualmente essa lista contém as seguintes frases:',
	'ignoreddomains_global_empty' => 'A lista de Expressões Globais está vazia',
	'ignoreddomains_global_update' => 'Atualize a lista de Expressões Globais desde Pivotlog.net',
	'ignoreddomains_global_delete' => 'Remova a lista de Expressões Globais',
	'ignoreddomains_global_success' => 'A lista de Expressões Globais foi armazenada.',
	'ignoreddomains_global_failed' => 'A lista de Expressões Globais não pode ser armazenada. Favor tentar novamente mais tarde!',
	'ignoreddomains_global_deleted' => 'As Expressões Globais foram excluídas.',
	'fileexplore' => 'Explorador de arquivos',
	'fileexplore_title' => 'Visualizar arquivos (tanto de texto como da Base de Dados)',
	'sendping_title' => 'Enviar pings para rastreadores de atualização.',
	'buildindex_start' => 'Construindo o Índice agora. Este processo pode demorar um pouco, por favor não o interrompa.',
	'buildsearchindex_start' => 'Construindo o Índice agora. Este processo pode demorar um pouco, por favor não o interrompa.',
	'buildindex_finished' => 'Finalizado! A geração do índice demorou %num% segundos',

	'filemappings_desc' => 'Abaixo você pode ver uma visão geral de cada Weblog nesta instalação de Pivot, junto com os arquivos que são criados por Pivot e os Templates (modelos) que são usados para criar estes arquivos. Isto pode também ser muito útil ao localizar problemas com a criação dos arquivos',
	
	'debug' => 'Abrir janela de Depuração (Debug)',

	'latest_pivot_news' => "Notícias recentes de Pivot",
	'remove_setup_header' => "O script de instalação Pivot está presente",
	'remove_setup' => "O script de instalação 'pivot-setup.php' ainda está presente na pasta principal. Cuidado, este é um potencial risco de segurança. É aconselhável remover isto, ou renomeá-lo, de forma que não possa ser executado por pessoas com más intenções.",
	'magic_quotes_header' => "Opção 'Magic quotes' ativa",
	'magic_quotes' => "Seu servidor possui uma opção PHP chamada 'Magic quotes'. Isto pode fazer Pivot funcionar com menor perfomance. Veja em <a href='http://www.pivotlog.net/docs/doku.php?id=servers_with_magic_quotes'>this page</a> como remediar essa situação.",
	'register_globals_header' => "Opção 'Register Globals' ativa",
	'register_globals' => "Seu servidor possui a opção 'register globals' ativa. Esta é uma opção potencialmente insegura, e você deve realmente tentar resolver isto desativando-a. Para remediar esta situação, veja em '<a href='http://www.pivotlog.net/docs/doku.php?id=servers_with_register_globals'>Servers with register_globals</a>' na documentação de Pivot.",
	'spamprotection' => "Proteção Anti-Spam",
	'spamprotection_title' => "Visão Geral das várias ferramentas para manter seus weblogs livres de spam",
	'spamconfig' => "Configuração Anti-Spam",
	'spamconfig_title' => "Configure ferramentas Anti-Spam (como HashCash e SpamQuiz).",
	'seespamconfig_title' => 'Configure ferramentas Anti-Spam',
	'spamwasher' => 'Limpador de Spam',
	'spamwasher_title' => 'Procure por spams, e exclua todos eles de suas entradas e trackbacks.',
	'spamlog' => "Spam Log",
	'spamlog_title' => "Visualizar e Reinicializar o Spam Log.",
	'viewspamlog_title' => "Visualizando o Spam Log",
);


$lang['templates'] = array (
	'rollback' => 'Reverter alterações',
	'create_template' => 'Criar template (modelo)',
	'create_template_info' => 'Criar um Pivot template "do zero"',
	'no_comment' => 'sem comentário',
	'comment' => 'Comentário*',
	'comment_note' => '(*Nota: Comentários só podem ser salvos na <b>primeira vez</b> que se salva mudanças ou criação)',
	'create' => 'Criar template (modelo)',
	'editing' => 'Editando',
	'filename' => 'Nome do arquivo',
	'save_changes' => 'Salvar Mudanças!',
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
	'title' => 'Manutenção',
	'gen_arc_title' => 'Gerar Histórico', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Recriar todos os seus Históricos', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Verificar arquivos XML', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Verificar (e reparar se necessário) a integridade dos arquivos XML', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Backup',
	'backup_text' => 'Criar um Backup de todos os arquivos essenciais do Pivot',
);


//		Spam Protection		\\
$lang['spam'] = array (
	'hc_options' => 'Opções para HashCash',
	'hc' => 'Usar HashCash',
	'hc_desc' => "HashCash é o mais poderoso e completamente invisível Anti-Spam disponível. Ele precisa do Javascript ativo no browser do usuário. Se isto é inaceitável pra você, então não o ative.",
	'sq_options' => 'Opções para SpamQuiz',
	'sq' => 'Usar SpamQuiz',
	'sq_desc' => "Antes de enviar um comentário, seus visitantes terão que responder corretamente uma simples pergunta que todos conheçam a resposta. Isto barra completamente robôs de spam automáticos, porque cada dono de blog irá escolher algo diferente.",
	'sq_question' => 'Pergunta',
	'sq_question_desc' => "Exemplo: Quais são as duas primeiras letras da palavra 'spam'?",
	'sq_answer' => 'Resposta',
	'sq_answer_desc' => 'Exemplo: <b>sp</b>',
	'sq_explain' => 'Explicação',
	'sq_explain_desc' => 'Exemplo: Para prevenir spams automáticos nos comentários, nós precisamos que você responda esta simples e tola pergunta',
	'sq_days' => 'Limite de dias',
	'sq_days_desc' => 'Ative SpamQuiz somente para entradas mais velhas que esta quantidade de dias. Normalmente spams automáticos em comentários são enviados somente para entradas antigas e então pode não ser necessário incomodar seus visitantes regulares (que comentam por ex.: dentro de até uma semana).',
	'ht_options' => 'Opções para Trackback Rígido',
	'ht' => 'Usar Trackback Rígido',
	'ht_desc' => "Trackback Rígido é uma poderosa proteção Anti-Spam. Ele precisa do Javascript ativo no browser do usuário. Se isto é inaceitável pra você, então não o ative.",
	'tburl_gen' => 'Clique para gerar uma URL de trackback',
	'tburl_gen_note' => 'Nota: A URL gerada é válida somente por 15 min e o javascript ativo é necessário!',
	'tburl_gen_javascript' => 'Favor ativar Javascript para gerar uma URL de trackback',
	'enable_js_comm' => "Favor ativar Javascript (e recarregar esta página) para adicionar qualquer comentário.",
	'empty_log' => 'Spam Log está vazio.',
	'reset_log' => 'Reinicializar Spam Log',
	'reset_log_done' => 'Spam Log reinicializado',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Exibir as últimas",
	'20ref' => "20 referências",
	'50ref' => "50 referências",
	'allref' => "todas as referências",
	'showunblocked' => "exibir somente as linhas não bloqueadas",
	'showall' => "exibir bloqueadas e não-bloqueadas",
	'updateref' => "Capturar os títulos das páginas de referência",
	'hostaddress' => 'Endereço-Domínio (endereço-ip)',
	'whichpage' => 'Qual página',

	'getting' => 'Capturando novos títulos',
	'awhile' => 'Este processo pode demorar um pouco, favor não interromper.',
	'firstpass' => 'Primeiro passo',
	'secondpass' => 'Segundo passo',
	'nowuptodate' => 'Seu mapa referência-título foi atualizado.',
	'finished' => 'Finalizado',
);


//		User Info		\\
$lang['userinfo'] = array (
	'editfields' => 'Editar Campos do Usuário',
	'desc_editfields' => 'Editar os campos que os usuários podem usar para descrever a si mesmos',
	'username' => 'Usuário',
	'pass1' => 'Senha',
	'pass2' => 'Senha (confirmar)',
	'email' => 'E-mail',
	'nickname' => 'Nickname (Apelido)',
    'url' => 'URL',
    'verified' => 'Verificado',
    'verified_desc' => 'Verificar esta Conta de Visitante para o usuário.',
    'disabled' => 'Desabilitado',
    'disabled_desc' => 'Desabilitar esta Conta de Visitante (assim, comentários não poderão ser feitos com este nome).',
	'userlevel' => 'Nível do Usuário',
	'userlevel_desc' => 'O Nível do Usuário irá determinar que tipos de ações este usuário pode realizar em Pivot.',
	'language' => 'Idioma',
	'lastlogin' => 'Último Login',
    'users' => 'Usuários',
    'commusers' => 'Visitantes Registrados',
    'editcommuser' => 'Editar Visitante Registrado',
	'edituser' => 'Editar usuário',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => 'Editar informações do usuário',
	'selfreg' => 'Auto-Cadastro',
	'newuser' => 'Criar Novo Usuário',
	'desc_newuser' => 'Criar uma nova conta de acesso para Pivot, permitindo postar entradas para um Weblog.',
	'newuser_button' => 'Criar',
	'edituser_button' => 'Alterar',
	'pass_too_short' => 'A senha deve ter um mínimo de 4 caracteres.',
	'pass_equal_name' => 'A Senha não pode ser igual ao Nome de Usuário.',
	'pass_dont_match' => 'Senhas não coincidem',
	'username_in_use' => 'Este nome de usuário já existe, crie outro',
	'username_too_short' => 'Nomes necessitam ter um mínimo de 3 caracteres',
	'username_not_valid' => 'Nomes de usuário podem conter somente caracteres alfanuméricos (A-Z, 0-9) e undeline (_).',
	'not_good_email' => 'Este não é um endereço de e-mail válido',
	'c_admin_title' => 'Confirme a criação de um Administrador',
	'c_admin_message' => 'Um '.$lang['userlevels']['1'].' tem acesso total em Pivot, pode editar todas as entradas, todos os comentários e mudar qualquer opção. Você está seguro que gostaria de fazer %s um '.$lang['userlevels']['1'].'?',
);


//		Config Page		\\
$lang['config'] = array (
	'save' => 'Salvar preferências',

	'sitename' => 'Nome do Site',
	'defaultlanguage' => 'Idioma padrão',
	'defaultencoding' => 'Usar codificação',
	'defaultencoding_desc' => 'Isto define que codificação é usada (como utf-8 ou iso-8859-1). Você deve deixar isto em branco, a menos que você conheça o que está fazendo. Se você deixar isto em branco serão usadas as opções apropriadas dos arquivos de idioma.',
	'defaulttheme' => 'Tema',
	'selfreg' => 'Permitir Auto-Cadastro',
	'selfreg_desc' => "Configurando isto para sim irá permitir que pessoas registrem-se como (normal) users e então possam postar entradas. (Este não é um usuário de comentário.)",
	'xmlrpc' => 'Permitir XML-RPC',
    'xmlrpc_desc' => 'Configurando esta opção para sim, torna ativa a possibilidade de você postar para seu blog a partir de uma aplicação de desktop para blogs (usando a MetaWeblog API).',
	'siteurl' => 'URL (endereço) do Site',
	'header_fileinfo' => 'Informações do arquivo',
	'localpath' => 'Diretório Local',
	'debug_options' => 'Opções de depuração',
	'debug' => 'Modo de depuração (Debug)',
	'debug_desc' => 'Mostrar esporadicamente informações de depuração, aqui e ali..',
	'log' => 'Arquivos de log',
	'log_desc' => 'Manter arquivos de log para várias atividades',

	'unlink' => 'Arquivos sem link',
	'unlink_desc' => 'Algumas instâncias de servidores que possuem Safe_Mode (modo seguro) ativo, podem requerer esta opção. Na maioria dos servidores ela não terá nenhum efeito',
	'chmod' => 'Mudar permissões de arquivos para...',
	'chmod_desc' => 'Alguns servidores requerem que os arquivos criados tenham suas permissões alteradas (chmodded) de uma maneira específica. Os valores comuns são \'0644\' e \'0755\'. Não mude isto, a menos que conheça o que está fazendo.',
	'header_uploads' => 'Opções para envio (Upload) de arquivos',
	'upload_path' => 'Diretório para envio (upload) de arquivos',
	'upload_accept' => 'Tipos Aceitos',
	'upload_extension' => 'Extensão padrão',
	'upload_save_mode' => 'Sobrescrever (substituir)',
	'make_safe' => 'Limpar nome do arquivo',
	'c_upload_save_mode' => 'Incrementar nome do arquivo',
	'max_filesize' => 'Tamanho máximo do arquivo',
	'header_datetime' => 'Data/Horário',
	'timeoffset_unit' => 'Unidade de diferença de horário',
	'timeoffset' => 'Diferença de horário',
	'header_extra' => 'Preferências diversas',
	'wysiwyg' => 'Usar Editor Visual (Wysiwyg)',
	'wysiwyg_desc' => 'Determinar se o Editor Visual (Wysiwig) está ativo por padrão. Usuários individuais podem alterar isso em suas preferências em \'Minhas Informações\'.',
	'basic_view' => 'Usar Visualização Básica',
	'basic_view_desc' => 'Define se \'Nova Entrada\' abre em Visualização Básica ou Extendida.',
	'def_text_processing' => 'Processamento de Texto Padrão',
	'text_processing' => 'Processamento de texto',
	'text_processing_desc' => 'Determina o processamento de texto padrão, quando um usuário não está usando o Editor Visual (wysiwyg). \'Converter quebra de linhas\' não faz mais do que trasformar quebra de linhas para a tag (marcação) &lt;br&gt;. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> é um estilo de marcação (formatação) poderoso, porém fácil de aprender.',
	'none' => 'Nenhum',
	'convert_br' => 'Converter quebras de linha para &lt;br /&gt;',
	'textile' => 'Textile',
	'markdown' => 'Markdown',
	'markdown_smartypants' => 'Markdown e Smartypants',

	'allowed_cats' => 'Categorias Permitidas',
	'allowed_cats_desc' => 'Este usuário tem permissão para postar nas categorias selecionadas',
	'delete_user' => "Excluir usuário",
	'delete_user_desc' => "Você pode excluir este usuário caso deseje. Todos os seus posts (entradas) irão permanecer, mas ele não poderá mais logar-se",
	'delete_user_confirm' => 'Você está prestes a remover o acesso para %s. Tem certeza que deseja fazer isso?',
    'delete_commuser' => "Excluir Visitante Registrado",
    'delete_commuser_desc' => "Você pode excluir este Visitante Registrado se você desejar. Todos os seus comentários irão permanecer",
    'delete_commuser_confirm' => "Você está prestes a remover a conta de %s. Você tem certeza que deseja fazer isto?",
    
	'setup_ping' => 'Configuração de Ping',
	'ping_use' => 'Ping para rastreadores de atualização',
	'ping_use_desc' => 'Isto determina quando rastreadores de atualização como weblogs.com serão automaticamente notificados por Pivot se você postar uma Nova Entrada. Serviços como blogrolling.com dependem destes pings',
	'ping_urls' => 'URL\'s para enviar ping',
	'ping_urls_desc' => 'Você pode providenciar várias URLs para enviar pings. Não inclua a parte de protocolo: http:// de outro modo isto não irá funcionar. Apenas coloque cada servidor em uma nova linha, ou separados por um caractere pipe \'|\'. Alguns servidores comuns para enviar pings são:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com pinger, o mais usado atualmente)<br /><b>pivotlog.net/pinger</b> (pivotlog pinger, todavia não está ainda operacional)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com pinger)<br /><b>ping.blo.gs</b> (blo.gs pinger)<br />',

	'setup_tb' => 'Configurações de Trackback',
	'tb_email' => 'Email',
	'tb_email_desc' => 'Caso seja ativado, um email será enviado para este endereço quando um Tracback for adicionado.',

	'new_window' => 'Abra links numa nova janela',
	'emoticons' => 'Usar emoticons',
	'javascript_email' => 'Codificar endereço de e-mail?',
	'new_window_desc' => 'Determina se todos os links usados em entradas serão abertos em uma nova janela do navegador.',

	'mod_rewrite' => 'Use Mod_rewrite (Reescrita)',
	'mod_rewrite_desc' => 'Se você usar a opção do Apache Mod_rewrite (Reescrita), Pivot irá criar url\'s como www.mysite.com/archive/2003/05/30/nice_weather, no lugar de www.mysite.com/pivot/entry.php?id=134. Nem todos os servidores suportam esta opção, assim, por favor, leia a sessão no manual sobre isto.',
	'mod_rewrite_1' => 'Sim, faça como /archive/2005/04/28/title_of_entry',
	'mod_rewrite_2' => 'Sim, faça como /archive/2005-04-28/title_of_entry',
	'mod_rewrite_3' => 'Sim, faça como /entry/1234',
	'mod_rewrite_4' => 'Sim, faça como /entry/1234/title_of_entry',

	'search_index' => 'Atualização automática do Índice de Busca',
	'search_index_desc' => 'Isto irá determinar se os arquivos do Índice de Busca serão atualizados automaticamente a cada vez que for postada uma nova entrada ou alterada uma existente.',

	'default_allow_comments' => 'Permitir comentários como padrão',
	'default_allow_comments_desc' => 'Determina se as entradas irão permitir comentários ou não.',
	'moderate_comments' => 'Moderar comentários',
    'moderate_comments_desc' => 'Determina se os comentários deverão ser aprovados antes deles tornarem-se visíveis no site.',

    'maxhrefs' => 'Número de Links',
    'maxhrefs_desc' => 'Número máximo de hyperlinks permitidos nos comentários. Útil para conter spams nos comentários. Configure para 0 (zero) para um número ilimitado de links.',
    'rebuild_threshold' => 'Limite de Reconstrução',
    'rebuild_threshold_desc' => 'Quantidade de segundos reconstruindo entradas, antes do Pivot atualizar a página. O padrão é 28, mas se você tiver problemas com reconstrução, tente abaixar este número para 10.',
	'default_introduction' => 'Padrão para Introducão/Corpo',
	'default_introduction_desc' => 'Isto irá determinar os valores padrões para Introdução e Corpo quando um autor escreve uma nova entrada. Normalmente este será um parágrafo vazio, o que faz mais sentido.',

	'upload_autothumb'	=> 'Miniaturas automáticas',
	'upload_thumb_width' => 'Largura da miniatura',
	'upload_thumb_height' => 'Altura da miniatura',
	'upload_thumb_remote' => 'Script (código) de corte externo',
	'upload_thumb_remote_desc' => 'Se seu servidor não possui as bibliotecas necessárias instaladas para realizar o corte de imagens, você pode usar um script de corte externo (remoto).',

	'extensions_header' => 'Diretório de extensões',
	'extensions_desc'   => 'O diretório de \'extensões\' é onde se guardam módulos adicionais do Pivot.
		Isto torna a atualização muito mais fácil. Veja os Docs para mais informações.',
	'extensions_path'   => 'Caminho do diretório de extensões',

	'tag_options' => 'Opções para Tags',
	'tag_cache' => 'Duração do Cache',
	'tag_cache_desc' => 'O total (em minutos) que a página Tag é armazenada.',
	'tag_flickr' => 'Exibir imagens Flickr',
	'tag_flickr_desc' => 'Se for ativado para \'sim\', o Pivot irá trazer imagens fetch com esta tag de from Flickr.com.',
	'tag_flickr_amount' => 'Número de imagens',
	'tag_flickr_amount_desc' => 'O total de imagens para trazer de Flickr.',
	'tag_fetcher' => 'Exibir feeds',
	'tag_fetcher_desc' => 'Se for configurado para \'sim\', o Pivot irá exibir os botões para trazer feeds com esta tag de várias fontes.',
	'tag_fetcher_amount' => 'Número de items',
	'tag_fetcher_amount_desc' => 'O total de itens para trazer de cada fonte',
	'tag_min_font' => 'Tamanho mínimo',
	'tag_max_font' => 'Tamanho máximo',
	'tag_max_font_desc' => 'O tamanho (em pixels) usado para exibir a \'tag nuvem\'. Tags que são usadas mais freqüentemente são exibidas em uma fonte maior.',

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
	'subw_heading' => 'Para cada um dos subweblogs que se encontram nos templates, você pode configurar que templates eles usam, e também as categorias que são publicadas com eles',
	'create' => 'Finalizar',

	'create_1' => 'Criar / Editar Weblog, passo 1 de 3',
	'create_2' => 'Criar / Editar Weblog, passo 2 de 3',
	'create_3' => 'Criar / Editar Weblog, passo 3 de 3',

	'name' => 'Nome do Weblog',
	'payoff' => 'Descrição',
	'payoff_desc' => 'Use a descrição como um sub-título ou lema curto para seu weblog.',
	'url' => 'Endereço (URL) para o Weblog',
	'url_desc' => 'Pivot irá determinar o endereço (url) de seu weblog se você deixar este campo em branco. Se você usar seu weblog como parte de um frame (quadros), ou como um \'include\' do lado do servidor, você pode usar isto para substituir o padrão.',
	'index_name' => 'Página Inicial (Index)',
	'index_name_desc' => 'O nome do arquivo de índice (Index). Normalmente é algo como \'index.html\' ou \'index.php\'.',

	'ssi_prefix' => 'Prefixo SSI',
	'ssi_prefix_desc' => 'Se o seu weblog usa SSI (o que não se recomenda), você pode usar isto para converter um nome de arquivo do Pivot para um nome de arquivo usado por SSI. Ex.: \'index.shtml?p=\'. Você deve deixar isto em branco, a menos que saiba o que está fazendo.',

	'front_path' => 'Diretório da sua Página Inicial',
	'front_path_desc' => 'O caminho (relativo ou absoluto) que Pivot irá usar para criar a Página Inicial deste blog.',
	'file_format' => 'Nome do arquivo',
	'entry_heading' => 'Opções para a Entrada',
	'entry_path' => 'Diretório para as Entradas',
	'entry_path_desc' => 'O caminho (relativo ou absoluto) que Pivot irá usar para criar as páginas para Entradas Únicas (se você escolher não usar \'Entradas ao vivo\')',
	'live_comments' => 'Entradas ao vivo',
	'live_comments_desc' => 'Se você usar \'Entradas ao vivo\', Pivot não irá necessitar gerar arquivos para cada entrada única. Esta é a opção recomendada.',
	'readmore' => 'Texto de \'Leia mais\'',
	'readmore_desc' => 'Este texto será usado para indicar que há mais texto nesta entrada do que o exibido na página inicial. Se você deixar isto vazio, Pivot irá usar o padrão conforme definido pelas preferências de idioma.',

	'arc_heading' => 'Opções do Histórico',
	'arc_index' => 'Arquivo de índice',
	'arc_path' => 'Diretório dos arquivos de histórico',
	'archive_amount' => 'Tamanho do Arquivo de histórico',
	'archive_unit' => 'Tipo do Histórico',
	'archive_format' => 'Formato do Histórico',
	'archive_none' => 'Sem Históricos',
	'archive_weekly' => 'Históricos semanais',
	'archive_monthly' => 'Históricos mensais',
	'archive_yearly' => 'Históricos anuais',

	'archive_link' => 'Link para o Histórico',
	'archive_linkfile' => 'Formato da lista de históricos',
	'archive_order' => 'Ordem do Histórico',
	'archive_ascending' => 'Ascendente (mais antigos primeiro)',
	'archive_descending' => 'Descendente (mais novos primeiro)',

	'templates_heading' => 'Templates',
	'frontpage_template' => 'Template da Página Inicial',
	'frontpage_template_desc' => 'Este Template determina a aparência da pagina de índice (index) deste weblog.',
	'archivepage_template' => 'Template da página de Históricos',
	'archivepage_template_desc' => 'Este Template irá determinar a aparência dos seus históricos. Pode ser usado o mesmo que se usa em \'Template da Página Inicial\'.',
	'entrypage_template' => 'Template das entradas',
	'entrypage_template_desc' => 'Este template determina a aparência das entradas únicas.',
	'extrapage_template' => 'Template Extra',
	'extrapage_template_desc' => 'Este Template define a aparência que seu Histórico e a aparência que \'search.php\' (busca) irá ter.',

	'shortentry_template' => 'Template das entradas curtas',
	'shortentry_template_desc' => 'Este template determina a aparência de entradas únicas, quando são exibidas dentro do weblog ou dos históricos.',
	'num_entries' => 'Número de Entradas',
	'num_entries_desc' => 'O número de entradas que será exibida na Página Inicial deste subweblog .',
	'offset' => 'Diferença',
	'offset_desc' => 'Se a Diferença contém um número, esta quantidade de entradas serão saltadas por ocasião da geração da Página. Você pode usar isto para fazer uma lista de \'Entradas recentes\', por exemplo.',
	'comments' => 'Permitir comentários?',
	'comments_desc' => 'Determina se os visitantes poderão deixar comentários para as entradas neste subweblog.',

	'publish_cats' => 'Publicar essas categorias',

	'setup_rss_head' => 'Configuração RSS e Atom',
	'rss_use' => 'Gerar Feeds',
	'rss_use_desc' => 'Isto determina se Pivot irá gerar automaticamente ou não um RSS e um Atom Feed para este weblog.',
	'rss_filename' => 'Nome do arquivo RSS',
	'atom_filename' => 'Nome do arquivo Atom',
	'rss_path' => 'Diretório do Feed',
	'rss_path_desc' => 'O caminho relativo ou absoluto para o diretório em que Pivot irá criar os arquivos Feed.',
//	'rss_size' => 'Tamanho da entrada Feed',  /* DEPRECATED */
//	'rss_size_desc' => 'O tamanho (em caracteres) para uma entrada em arquivos Feed',  /* DEPRECATED */
	'rss_full' => 'Criar Feeds completos',
	'rss_full_desc' => 'Determina se Pivot irá criar feeds Atom e RSS completos. Se a opção for \'Não\' Pivot irá Feeds que apenas contém descrições curtas, isto irá fazer seus Feeds menos úteis.',
	'rss_link' => 'Link do Feed - RSS',
	'rss_link_desc' => 'O link enviado com o Feed, apontando para a página principal. Se deixar em branco, o Pivot irá enviar o link do índice do weblog\'s .',
	'rss_img' => 'Imagem do Feed - RSS',
	'rss_img_desc' => 'Você também pode escolher uma imagem para acompanhar o feed. Alguns leitores irão exibir a imagem, junto ocmm o texto do feed. Deixe em branco ou preencha com uma URL completa.',

	'lastcomm_head' => 'Preferências para os Últimos Comentários',
	'lastcomm_amount' => 'Quantos serão exibidos?',
	'lastcomm_length' => 'Tamanho (em caracteres) para cortar',
	'lastcomm_format' => 'Formato',
	'lastcomm_format_desc' => 'Estas preferências determinam a aparência dos \'Últimos Comentários\' na Página Inicial deste weblog.',
	'lastcomm_nofollow' => 'Use \'nofollow\'',
	'lastcomm_nofollow_desc' => 'Para combater os Spams nas Referências você pode escolher a adição de um atributo \'rel="nofollow"\' para todos os links em comentários e referências, com isto o spammer não será ajudado a obter um melhor posição (Pagerank) no Google.',

	'lastref_head' => 'Opções para as Últimas Referências',
	'lastref_amount' => 'Quantos serão exibidos?',
	'lastref_length' => 'Tamanho (em caracteres) para corte',
	'lastref_format' => 'Formato',
	'lastref_format_desc' => 'Estas opções determinam a aparência dos \'Últimos Comentários\' na página inicial do weblog.',
	'lastref_graphic' => 'Usar ícones',
	'lastref_graphic_desc' => 'Isto determina se as últimas referências usarão pequenos ícones para as Ferramentas de Busca mais comuns através dos quais os visitantes podem chegar.',
	'lastref_redirect' => 'Redirecionar referências',
	'lastref_redirect_desc' => 'Para combater spam nas referências você pode escolher redirecionar os links externos para referências, assim, isto não irá ajudar o spammer a ter uma melhor posição (Pagerank) no Google.',

	'various_head' => 'Várias Opções',
	'emoticons' => 'Usar Emoticons',
	'emoticons_desc' => 'Determina se emoticons como :-) serão transformados para o seu equivalente gráfico.',
	'encode_email_addresses' => 'Codificar endereços de e-mail',
	'encode_email_addresses_desc' => 'Determina se os endereços de e-mail serão codificados em Javascript, como proteção contra programas de spam.',
	'target_blank' => 'Abrir nova página',
	'xhtml_workaround' => 'XHTML Workaround (desvio)',
	'target_blank_desc' => 'Se você selecionar \'Sim\', todos os links em suas entradas serão abertos em uma nova janela do navegador. Caso selecione \'XHTML workaround\', todos os links irão ter um atributo rel="external", que não irão quebrar os XHTML bem formados',
	'search_format' => "Formato dos resultados de busca",
	'search_format_desc' => "Isto especifica a formatação dos resultados de busca na página de busca. Isto contêm cinco partes, divididas por uma linha contendo '----': Topo, sumário, o início da lista, todos os itens na lista e o fim da lista. Você pode encontrar os detalhes mais difíceis em <a href='http://pivotlog.net/docs/doku.php?id=working_with_search_results'>documentation</a>.",

	'date_head' => 'Opções para exibição de Data',
	'full_date' => 'Formato completo de Data',
	'full_date_desc' => 'Isto determina o formato (completo) para Data e Horário. Usado normalmente no topo de uma página de entrada única',
	'entry_date' => 'Data da Entrada',
	'diff_date' => 'Data Diferente',
	'diff_date_desc' => 'A \'Data Diferente\' é usada normalmente em conjunção com \'Data da Entrada\'. A Data da Entrada é exibida em cada entrada de seu log, enquanto a Data Diferente é somente exibida se a data difere da entrada anterior.',
	'language' => 'Idioma',
	'language_desc' => 'Isto determina em que idioma as datas e números serão exibidos, e também determina a codificação de caracteres da página (como iso-8859-1 ou koi8-r, por exemplo).',

	'comment_head' => 'Opções para Comentários',
	'comment_sendmail' => 'Enviar Email?',
	'comment_sendmail_desc' => 'Após um comentário ser introduzido, um email pode ser enviado para os moderadores deste weblog.',
	'comment_emailto' => 'Email para',
	'comment_emailto_desc' => 'Especifica os endereços de email que irão receber a mensagem. Separe múltiplos endereços de email usando vírgula.',
	'comment_texttolinks' => 'Texto para links',
	'comment_texttolinks_desc' => 'Defina se as URL\'s e endereços de email deverão ser \'clicáveis\'.',
	'comment_wrap' => 'Ajustar comentários após',
	'comment_wrap_desc' => 'Para prevenir que longas cadeias de caracteres quebrem seu layout, o texto será ajustado após o número de caracteres especificado.',
	'comments_text_0' => 'Rótulo para \'nenhum comentário\'',
	'comments_text_1' => 'Rótulo para \'um comentário\'',
	'comments_text_2' => 'Rótulo para \'X comentários\'',
	'comments_text_2_desc' => 'Este texto será usado para indicar quantos comentários existem. Se você deixar isto em branco, Pivot irá usar o padrão conforme definido nas preferências de idioma.',

	'comment_pop' => 'Comentários usam Popup (abrem nova janela)?',
	'comment_pop_desc' => 'Determina se as páginas com comentários (ou \'entrada única\') serão exibidas em uma nova janela (popup), ou na janela original do navegador.',
	'comment_width' => 'Largura do Popup',
	'comment_height' => 'Altura do Popup',
	'comment_height_desc' => 'Especifique a largura e a altura (em pixels) para o popup de comentários.',

	'comment_format' => "Formato para os Comentários",
	'comment_format_desc' => "Isto especifica o formato dos comentários nas Páginas Iniciais.",

	'comment_reply' => "Formato de 'resposta..'",
	'comment_reply_desc' => "Isto determina a formatação do link que os visitantes podem usar para responder em um comentário específico.",
	'comment_forward' => "Formato de 'resposta por..'",
	'comment_forward_desc' => "Define a formatação do texto exibido quando o comentário é respondido por um segundo comentário.",
	'comment_backward' => "Formato de 'resposta em..'",
	'comment_backward_desc' => "Define a formatação do texto exibido quando o comentário é uma resposta a um comentário prévio.",

	'comment_textile' => 'Permitir Textile',
	'comment_textile_desc' => 'Se você selecionar esta opção para \'Sim\', os visitantes terão permissão para usar <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> em seus comentários.',
	'save_comment' => 'Registrar Comentários',
	'comment_gravatardefault' => 'Gravatar Padrão',
	'comment_gravatardefault_desc' => 'URL para a imagem padrão de Gravatar. Iniciar com http://',
	'comment_gravatarhtml' => 'Gravatar HTML',
	'comment_gravatarhtml_desc' => 'HTML para inserir para um gravatar. %img% será substituída pela URL para a imagem.',
	'comment_gravatarsize' => 'Tamanho do Gravatar',
	'comment_gravatarsize_desc' => 'Tamanho (em pixels) para o gravatar. O padrão é 48.',

    'trackback_head' => 'Opções de Trackback',
	'trackback_sendmail' => 'Enviar E-mail?',
	'trackback_sendmail_desc' => 'Após um trackback ser colocado, um e-mail será enviado para os mantenedores deste blog.',
	'trackback_emailto' => 'E-mail para',
	'trackback_emailto_desc' => 'Especifique o endereço de email para quem o email será enviado. Em caso de vários endereços separe com uma vírgula.',
	'trackbacks_text_0' => 'Rótulo para \'sem trackbacks\'',
	'trackbacks_text_1' => 'Rótulo para \'um trackback\'',
	'trackbacks_text_2' => 'Rótulo para \'X trackbacks\'',
	'trackbacks_text_2_desc' => 'Este é o texto usado para indicar quantos trackbacks foram incluídos. Se você deixar isto em branco, o Pivot irá usar o padrão conforme definido pelas opções de idioma',
	'trackback_pop' => 'Trackbacks em Popup?',
	'trackback_pop_desc' => 'Determina se a página de trackbacks (ou \'Entrada ùnica\') será exibida em uma janela popup, ou na janela original do navegador.',
	'trackback_width' => 'Largura do Popup',
	'trackback_height' => 'Altura do Popup',
	'trackback_height_desc' => 'Especifique a largura e a altura (em pixels) do popup de trackbacks.',
	'trackback_format' => "Formato de Trackbacks",
	'trackback_format_desc' => "Isto especifica a formatação dos trackbacks nas páginas de entradas.",
	'trackback_link_format' => "Formato do link de Trackback",
        'save_trackback' => 'Registrar Trackback',

	'saved_create' => 'Um novo weblog foi criado.',
	'saved_update' => 'O weblog foi atualizado.',
	'deleted' => 'O weblog foi excluído!',
	'confirm_delete' => 'Você está prestes a excluir o weblog %1. Você está certo disso?',

	'blogroll_heading' => 'Preferências para Blogroll',
	'blogroll_id' => 'Número ID do Blogrolling',
	'blogroll_id_desc' => 'Você pode opcionalmente incluir um <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> blogroll em seu weblog. Blogrolling é um excelente serviço para manter uma lista de links, que mostra como eles foram atualizados recentemente. Se você não deseja isto, apenas ignore este campo de entrada. Se não, quando você estiver logado em blogrolling.com, vá para \'get code\', lá você encontrará links contendo o seu número ID do blogroll. É alguma coisa como isto: 2ef8b42161020d87223d42ae18191f6d',
	'blogroll_fg' => 'Cor do Texto',
	'blogroll_bg' => 'Cor de Fundo',
	'blogroll_line1' => 'Cor da Linha 1',
	'blogroll_line2' => 'Cor da Linha 2',
	'blogroll_c1' => 'Cor 1',
	'blogroll_c2' => 'Cor 2',
	'blogroll_c3' => 'Cor 3',
	'blogroll_c4' => 'Cor 4',
	'blogroll_c4_desc' => 'Estas cores determinam como será a aparência do seu blogroll. Da Cor 1 para a Cor 4 é oferecida uma indicação visual de como foi recentemente atualizado um link.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Lista completa de pré-visualização',
	'thumbs' => 'Pré-visualização de miniaturas',
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
	'areyousure' => 'Você tem certeza que deseja excluir o arquivo %s?',
	'picheader' => 'Excluir esta imagem?',
	'create' => 'criar',
	'edit' => 'editar',

	'insert_image' => 'Inserir uma imagem',
	'insert_image_desc' => 'Para inserir uma imagem, você deve enviar (upload) uma imagem, ou escolher uma imagem enviada previamente.',
	'insert_image_popup' => 'Inserir uma Imagem Popup',
	'insert_image_popup_desc' => 'Para criar um popup para uma imagem, você deve enviar uma imagem, ou escolher uma imagem enviada previamente. Então selecione um texto ou uma miniatura que ativará o popup.',
	'choose_upload' => 'enviar',
	'choose_select' => 'ou selecionar',
	'imagename' => 'Nome da imagem',
	'alt_text' => 'Texto alternativo',
	'align' => 'Alinhamento',
	'border' => 'Borda',
	'pixels' => 'pixels',
	'uploaded_as' => 'Seu arquivo foi enviado como \'%s\'.',
	'not_uploaded' => 'Seu arquivo não foi enviado, e os seguintes erros ocorreram:',
	'center' => 'Centralizado (por padrão)',
	'left' => 'Esquerda',
	'right' => 'Direita',
	'inline' => 'Justificado',
	'notice_upload_first' => 'Você deve primeiro selecionar ou enviar uma imagem.',
	'select_image' => 'Selecionar imagem',
	'select_file' => 'Selecionar Arquivo',

	'for_popup' => 'Para o popup',
	'use_thumbnail' => 'Usar miniatura',
	'edit_thumbnail' => 'Editar miniatura',
	'use_text' => 'Usar texto',
	'insert_download' => 'Inserir Download',
	'insert_download_desc' => 'Para criar um link para download de arquivo, faça o upload do arquivo ou escolha um arquivo já transferido. Em seguida, selecione um ícone ou texto para o link.',
	'use_icon' => 'Usar ícone',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Inserir link',
	'insert_link_desc' => 'Inserir um link escrevendo uma URL no campo abaixo. Visitantes do seu site irão ver o título, quando posicionarem o ponteiro do mouse sobre o link.',
	'url' => 'URL',
	'title' => 'Título',
	'text' => 'Texto',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Editar quem pode postar para a categoria \'%s\'',
	'name' => 'Nome',
	'users' => 'Usuários',
	'make_new' => 'Criar Nova Categoria',
	'create' => 'Criar Categoria',
	'canpost' => 'Selecionar os usuários que você deseja que tenham permissão para postar nesta categoria',
	'same_name' => 'Uma categoria com este nome já existe',
	'need_name' => 'Esta categoria necessita de um nome',

	'allowed' => 'Permitido',
	'allow' => 'Permitir',
	'denied' => 'Negado',
	'deny' => 'Negar',
	'edit' => 'Editar categoria',

	'delete' => 'Excluir categoria',
	'delete_desc' => 'Selecione \'Sim\', se você deseja excluir esta categoria',

	'delete_message' => 'Nesta versão de Pivot, somente o nome da categoria será excluído. Nas próximas versões você poderá escolher o que fazer com as entradas da categoria que será excluída.',
	'search_index_newctitle'   => 'Indexar esta categoria',
	'search_index_newcdesc'    => 'Apenas ative \'Não\' se não quiser que os visitantes realizem buscas nessa categoria.',
	'search_index_editcheader' => 'Índice da Categoria',

	'order' => 'Ordenamento',
	'order_desc' => 'Categorias com ordenamento mais baixo aparecerão no topo da lista. Se você mantiver números iguais para todas, elas serão ordenadas por ordem alfabética.',
	'public' => 'Categoria Pública',
	'public_desc' => 'Se ativar \'Não\', essa categoria será exibida apenas para visitantes registrados. (apenas páginas ao vivo)',
	'hidden' => 'Categoria oculta',
	'hidden_desc' => 'Caso você escolha \'Sim\', esta categoria será escondida da listagem dos Arquivos/Históricos. (Aplica-se somente para páginas Ao Vivo)',

);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Publicar Entrada",
	'preview_entry' => "Pré-Visualizar Entrada",
	'edit_entry' => "Editar Entrada",
	'edit_entry_desc' => "Editar esta Entrada",

	'first' => 'Primeira',
	'last' => 'Última',
	'next' => 'Próxima',
	'previous' => 'Anterior',

	'jumptopage' => 'Saltar para a página: (%num%)',
	'filteron' => 'Filtrar por (%name%)',
	'filteroff' => 'Cancelar filtro',
	'title' => 'Título',
	'subtitle' => 'Subtítulo',
	'introduction' => 'Introdução',
	'body' => 'Corpo',
	'publish_on' => 'Publicar',
	'status' => 'Status',
	'post_status' => 'Publicar Status',
	'category' => 'Categoria',
	'select_multi_cats' => '(Ctrl-click para selecionar múltiplas categorias)',
	'last_edited' => "Última modificação em",
	'created_on' => "Criada em",
	'date' => 'Data',
	'author' => 'Autor',
	'code' => 'Código',
	'comm' => 'Quant.Coment.',
	'track' => 'Quant. Track',
	'name' => 'Nome',
	'allow_comments' => 'Permitir comentários',

	'delete_entry' => "Apagar Entrada",
	'delete_entry_desc' => "Apagar Entrada e seus comentários ",
	'delete_one_confirm' => "Tem certeza que deseja apagar essa entrada?",
	'delete_multiple_confirm' => "Tem certeza que deseja apagar essas entradas?",

	'convert_lb' => 'Converter quebra de linhas',
	'always_off' => '(Sempre desligado, quando em modo Wysiwyg/Visual)',
	'be_careful' => '(Seja cuidadoso com isto!)',
	'edit_comments' => 'Editar comentários',
	'edit_comments_desc' => 'Editar os comentários que foram postados para esta entrada',
	'edit_comment' => 'Editar comentário',
	'delete_comment' => 'Excluir Comentário',
	'report_comment' => 'Informar Comentário',
	'edit_trackback' => 'Editar Trackback',
	'edit_trackback_desc' => 'Editar os trackbacks que foram postados para este post',
	'delete_trackback' => 'Excluir Trackback',
	'report_trackback' => 'Informar Trackback',
	'block_single' => 'Bloquear este IP %s',
	'block_range' => 'Bloquear esta faixa de IP %s',
	'unblock_single' => 'Desbloquear este IP %s',
	'unblock_range' => 'Desbloquear esta faixa de IP %s',
	'trackback' => 'Ping de Trackback (Rastreio)',
	'trackback_desc' => 'Enviar pings de Trackback para as seguintes url(s). Para enviar para várias urls, coloque cada uma em uma linha separada.',
	'keywords' => 'Palavras-chave',
	'keywords_desc' => 'Use para definir algumas palavras-chave que poderão ser usadas para busca desta entrada, ou criar uma url simplificada (non-crufty).',
	'vialink' => "Via link",
	'viatitle' => "Via título",
	'via_desc' => 'Use isso para definir um link para a origem dessa entrada.',
	'entry_catnopost' => 'Você não tem permissão para postar nessa categoria:\'%s\'.',
	'entry_saved_ok' => 'Sua entrada \'%s\' foi salva com sucesso.',
	'entry_ping_sent' => 'Um ping de Trackback (rastreio) foi enviado para \'%s\'.',
	'encoding_warning' =>'Você está escrevendo esta entrada em %s, enquanto ao menos um dos seus weblogs usa outra codificação. Para prevenir problemas com isto, você deve assegurar-se que todos os usuários e weblogs usam a mesma codificação.',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'Selecionar todos',
	'c_none' => 'Desmarcar todos',
	'choose' => '- selecione uma opção -',
	'publish' => 'Mude Status para \'publicada\'',
	'hold' => 'Mude Status para \'Rascunho\'',
	'delete' => 'Excluir',
	'generate' => 'Publicar e gerar',

	'with_checked_entries' => "Com as entradas selecionadas, faça:",
	'with_checked_files' => "Com os arquivos selecionados, faça:",
	'with_checked_templates' => 'Com os templates selecionados, faça:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'Não foi possível abrir o diretório, verifique suas permissões.',
	'path_read' => 'Não foi possível realizar leitura deste diretório, verifique suas permissões.',
	'path_write' => 'Não foi possível escrever neste diretório, verifique suas permissões.',

	'file_open' => 'Não foi possível abrir o arquivo, verifique suas permissões.',
	'file_read' => 'Não foi possível fazer leitura deste arquivo, verifique suas permissões.',
	'file_write' => 'Não foi possível escrever o arquivo, verifique suas permissões.',
	
    'reg_required' => 'Registro necessário',
	'entry_404' => 'Esta Entrada não existe!',
	'entry_404_desc' => "Esta entrada não existe, ou não foi publicada ainda.",
	'category_404' => 'Esta Categoria não existe',
	'category_404_desc' => "Esta categoria não existe, ou não foi publicada por qualquer weblog.",
);


//		Notices			\\
$lang['notice'] = array (
	'comment_saved' => "O comentário foi salvo.",
	'comment_deleted' => "O comentário foi excluído.",
	'comment_none' => "Esta entrada não possui comentários.",
	'trackback_saved' => "O Trackback foi salvo.",
	'trackback_deleted' => "O Trackback foi excluído.",
	'trackback_none' => "Este post não possui trackbacks.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'Vote \'%val%\' nesta entrada',
	'good' => 'Boa',
	'bad' => 'Ruim',
	'already' => 'Você já votou nesta mensagem',
	'register' => 'Seu voto para \'%val%\' foi registrado',
);


$lang['comment'] = array (
	'register' => 'Seu comentário foi registrado.',
	'preview' => 'Você está pré-visualizando seu comentário. Assegure-se de clicar em \'Postar comentário\' para salvá-lo.',
	'duplicate' => 'Seu comentário não foi registrado pois ele aparenta ser uma duplicata de um comentário anterior',
	'no_name' => 'Você deve escrever seu nome (ou um nick) no campo \'Nome\'. Assegure-se de clicar em \'Postar comentário\' para registrá-lo permanentemente.',
	'no_comment' => 'Você deve escrever algo no campo \'Comentário\'. Assegure-se de clicar em \'Postar comentário\' para registrá-lo permanentemente.',
	'too_many_hrefs' => 'O limite máximo de hyperlinks foi excedido. Não faça spam!!',
	'email_subject_comm' => '[Comentário]',
	'email_subject_notify' => '[Notificação]',
	'email_posted_comm' => "'%s' postou o seguinte comentário",
	'email_comm_on' => "Este é um comentário sobre a entrada '%s'",
	'email_allow_comm' => "Permitir este comentário",
	'email_delete_comm' => "Excluir este comentário",
	'email_view_comm' => "Visualizar este comentário",
	'email_edit_comm' => "Editar este comentário",
	'email_posted_entry' => "'%s' postou a seguinte entrada",
	'email_view_entry' => "Visualizar esta entrada",
	'email_view_fullentry' => "Visualizar a entrada completa",
	'email_view_settings' => "Visualizar suas Opções",
	'email_sent_to' => "Este email foi enviado para",
	'email_notified' => "Notificações enviadas para",
	'email_posted_tb' => "'%s' postou o seguinte trackback",
	'email_tb_on' => "Este é um trackback na entrada '%s'",
	'email_edit_tb' => "Editar este trackback",
	'email_block_ip' => "Bloquear este IP",
	'notifications' => "notificações",
    'oneclickdelete' => "Excluir com um clique.",
    'oneclickreport' => "Informar e excluir com um clique.",
    'moderated' => "Moderado",
    'moderate_queue_on' => "Moderação de comentários está ativa neste site. Isto significa que seu comentário não será exibido neste site até ser aprovado por um editor.",
    'moderate_stored' => "Seu comentário foi registrado. Mas como a Moderação de Comentários está ativa, ele estará esperando a aprovação de um editor antes de ser exibido.",
    'moderate_waiting' => "Um ou mais comentários estão esperando a aprovação de um editor."
);


$lang['comments_text'] = array (
	'0' => "Nenhum comentário",
	'1' => "%num% comentário",
	'2' => "%num% comentários",
);

$lang['trackbacks_text'] = array (
	'0' => "Nenhum trackback",
	'1' => "%num% trackback",
	'2' => "%num% trackbacks",
);

$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "Arquivos",
	'next_archive' => "Próximo Arquivo",
	'previous_archive' => "Arquivo Anterior",
	'last_comments' => "Últimos Comentários",
	'last_referrers' => "Últimas Referências",
	'calendar' => "Calendário",
	'links' => "Links",
	'xml_feed' => "XML: RSS Feed",
	'atom_feed' => "XML: Atom Feed",
	'powered_by' => "Powered by",
	'blog_name' => "Nome do Weblog",
	'title' => "Título",
	'excerpt' => "Resumo",
	'name' => "Nome",
	'email' => "Email",
	'url' => "URL",
	'date' => "Data",
	'comment' => "Comentário",
	'ip' => "Endereço IP",
	'yes' => "Sim",
	'no' => "Não",
	'emoticons' => "Emoticons",
	'emoticons_reference' => 'Abrir referência para Emoticons',
	'textile' => "Textile",
	'textile_reference' => "Abrir referência para Textile",
	'post_comment' => "Postar comentário",
	'preview_comment' => "Visualizar comentário",
	'remember_info' => "Relembrar suas informações pessoais?",
	'notify' => "Notificar",
	'notify_yes' => "Sim, envie-me um email quando alguém responder.",
	'register' => "Registrar seu Nome de Usuário/Login",
	'registered' => "Registrado",
	'disclaimer' => "<b>Aviso:</b> Todas as marcações HTML, exceto &lt;b&gt; and &lt;i&gt; serão removidas do seu comentário. Você pode escrever links simplesmente digitando a URL ou endereço de e-mail.",
	'search_title' => "Resultados da busca",
	'search' => "Busca!",
	'nomatches' => "Sem resultados para '%name%'. Tente alguma outra palavra.",
	'matches' => "Resultados para '%name%':",
	'about' => "Sobre...",
	'stuff' => "Tecnologias",
	'linkdump' => "Lista de links",
	'discreet' => "Ocultar email",
	'discreet_yes' => "Sim, não mostre meu endereço de email.",
	'moderated' => "Moderado",
    'waiting_moderation' => "Este comentário ainda não foi moderado.",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Editar campos do usuário',
	'edit' => 'Editar',
	'create' => 'Criar',

	'dispname' => 'Exibir nome',
	'intname' => 'Nome interno',
	'intname_desc' => 'O nome interno é o nome deste item tal como irá aparecer quando você indicar ao Pivot para exibí-lo em um template.',
	'size' => 'Tamanho',
	'rows' => 'Linhas',
	'cols' => 'Colunas',
	'maxlen' => 'Largura máxima',
	'minlevel' => 'Nível Min. de Usuário',
	'filter' => 'Filtrar por',
	'filter_desc' => 'Filtrando por este item, você limita os tipos de dados que podem ser usados com ele',
	'no_filter' => 'Nenhum',
	'del_title' => 'Confirmar exclusão',
	'del_desc' => 'Excluindo este campo de usuário (<b>%s</b>) irá também destruir todos os dados que estes usuários tenham registrado com ele. Qualquer instância deste campo num template irá aparecer vazio.',

	'already' => 'Este nome já se encontra em uso',
	'int' => 'O nome interno deve ter mais de 3 caracteres',
	'short_disp' => 'O nome a ser exibido deve ter mais de 3 caracteres',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Favoritos',
	'bm_add' => 'Adicionar Favoritos.',
	'bm_withlink' => 'Pivot &raquo; Nova',
	'bm_withlink_desc' => 'Este favorito abre uma janela com uma Nova Entrada, que contém um link para a página da qual se originou',

	'bm_nolink' => 'Pivot &raquo; Nova',
	'bm_nolink_desc' => 'Este favorito abre uma janela com uma Nova Entrada em branco.',

	'bookmarklets_info' => 'Você pode usar Favoritos para rapidamente escrever Novas Entradas com Pivot. Para adicionar Favoritos para o seu Navegar (Browser), use uma das seguintes opções: (O texto exato varia dependendo do Navegador que você está usando)',
	'bookmarklets_info_1' => 'Clique e arraste o Favorito para a sua barra de \'Links\' ou para seu botão de \'Favoritos\'.',
	'bookmarklets_info_2' => 'Clique com o botão direito no Favorito e selecione \'Adicionar a Favoritos...\'.',
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

	'calendar_summary'   => 'Essa tabela representa um calendário de entradas do blog com links nas datas com entradas.',
	'calendar_noscript'  => 'Esse calendário providencia um meio de acesso às entradas deste blog',
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
    'duplicate' => 'Seu trackback não foi armazenado, porque este parece ser a duplicata de um anterior',
    'too_many_hrefs' => 'O número máximo de hyperlinks foi excedido. Não faça spam!!',
    'noid'      => 'Sem ID de TrackBack (tb_id)',
    'nourl'     => 'Sem URL (url)',
    'tracked'   => 'Tracked (rastreado)',
    'email_subject' => '[Trackback] Re:',
);

$lang['commentuser'] = array (
    'title'             => 'Login para Usuário do Pivot',
    'header'            => 'Login como um visitante registrado',
    'logout'            => 'Log out (Deslogar).',
    'loggedout'         => 'Logged out (Deslogado)',
    'login'             => 'Login',
    'loggedin'          => 'Logged in (Logado)',
    'loggedinas'        => 'Logado como',
    'pass_forgot'       => 'Esqueceu sua senha?',
    'register_new'      => 'Registrar um novo nome de usuário.',
    'register'          => 'Registrar como um visitante',
    'register_info'     => 'Preencha a seguinte informação. <strong>Assegure-se de fornecer um endereço de email válido</strong>, pois será enviado um email de verificação para seu endereço.',
    'pass_note'         => 'Aviso: É possível para o webmaster deste site <br /> visualizar sua senha... portanto <em>Não</em> use uma senha<br /> que você use para outros sites/contas!',
    'show_email'        => 'Mostre meu endereço de email com os comentários',
    'notify'            => 'Notifique-me via email quando forem incluídas novas entradas',
    'def_notify'        => 'Notificação padrão para respostas',
    'register'          => 'Registrar',
    'pass_invalid'      => 'Senha incorreta',
    'user_disabled'     => 'Usuário desabilitado',
    'nouser'            => 'Usuário inexistente...',
    'change_info'       => 'Aqui você pode mudar suas informações.',
    'pref_edit'         => 'Editar suas preferências',
    'pref_change'       => 'Mudar preferências',
    'options'           => 'Opções',
    'user_exists'       => 'Usuário já existente... favor escolher outro nome.',
    'email_note'        => 'Você deve fornecer seu endereço de email, sem isto será impossível verificar sua conta. Você sempre poderá escolher não mostrar seu email para outros visitantes.',
    'stored'            => 'As alterações foram salvas',
    'verified'          => 'Sua conta foi verificada. Favor logar-se...',
    'not_verified'      => 'Este código parece estar incorreto. Desculpe, mas não é possível verificar.',
    'pass_sent'         => 'Sua senha foi enviada para o endereço de email fornecido..',
    'user_pass_nomatch' => 'Este Nome de Usuário e Senha não parecem corresponder um ao outro.',
    'user_stored'       => 'Usuário registrado!',
    'user_stored_failed' => 'Não foi possível registrar o novo usuário!!',
    'pass_send'         => 'Enviar Senha',
    'pass_send_desc'    => 'Se você esqueceu sua senha, preencha seu \'Nome de Usuário\' e endereço de email, e o sistema Pivot irá enviar sua Senha para seu email. ',
    'oops'              => 'Oops',
    'back'              => 'Voltar para',
    'back_login'        => 'Voltar para login',
    'forgotten_pass_mail' => "Sua senha esquecida para Pivot '%name%' é: \n\n%pass%\n\nFavor não esquecer novamente, ok?\n\n Logue-se em sua conta, clicando no seguinte link:\n %link%",
    'registered'        => "Você foi cadastrado como um novo usuário do Pivot '%s'",
    'reg_confirmation'  => 'Confirmação de Cadastro',
    'reg_verify_short'  => 'Verifique sua conta',
    'reg_verify_long'   => "Pra verificar sua conta, clique no seguinte link:\n %s",
    'reg_verification'  => 'Verificação de email enviada para %s. Favor checar seu email em um minuto para confirmar sua conta.'
);

$lang['tags'] = array (
    'tag'               => "Tag",
    'tags'              => "Tags",
    'tags_in_posting'	=> "Tags usadas nesta postagem",
    'click_for_universe'	=> "Clique para a página local Tag Cosmos. ",
    'localcosmos_description'	=> "Esta é a Tag Cosmos local para este weblog. Quanto maior a tag, mais entradas neste blog são relacionadas a ela. As tags são ordenadas alfabeticamente. Clique em qualquer tag para descobrir mais.<br/><br/>",
    'tagoverview_header'	=> "Tag visão geral para: ",
    'entries_with_tag'	=> "Entradas neste site com ",
    'related_tags'	=> "Tags relacionadas",
    'no_related_tags'	=> "Não há tags relacionadas",
    'latest_on'	        => "Mais recente em",
    'flickr_images'	=> "Imagens Flickr para",
    'external_feeds'	=> "Feeds externos para",
    'nothing_on'	=> "Nada em",
    'click_icon'	=> "Clique no ícone para uma lista de links em",
    'on'                => "em",
    'for'               => "para",
    'found_on'	        => "encontrado em",
    'tag_ext_link'      => "Links externos Tagged (marcados):",
    'other_posts_with_tag'	=> "Outras entradas sobre",
    'used_tags'		=> "Tags usadas",
    'suggested_tags' => "Tags sugeridas",
    'insert_tag' => "Inserir uma Tag",
    'insert_tag_desc' => "Inserir uma tag em sua entrada com um link opcional. Você pode também selecionar uma tag da Tag Nuvem (parcial) abaixo."
);

// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

	$groups = count($lang);
	$total = 0;
	foreach ($lang as $langgroup) {
		$total += count($langgroup);
	}
	echo "<h2>Arquivo de idioma correto! (01.12.2006)</h2>";
	echo "Esse arquivo contém $groups grupos e um total de $total marcações.";

}

?>
