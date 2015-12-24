<%

Sub CheckError
 Select Case Err.Number
  Case 3
   Response.Write " Return sem GoSub"
  Case 5
   Response.Write "Chamada de Procedimento Inválida"
  Case 6
   Response.Write "Sobrecarga"
  Case 7
   Response.Write "Sem Memória"
  Case 9
   Response.Write "SubScript fora de área"
  Case 10
   Response.Write "Este Array está fixo ou temporariamente travado"
  Case 11
   Response.Write "Divisão Por Zero"
  Case 13
   Response.Write "Tipos Incompatíveis"
  Case 14
   Response.Write "Fora de Espaço de String"
  Case 16
   Response.Write "Expressão muito Complexa"
  Case 17
   Response.Write "Não pode recuperar a operação"
  Case 18
   Response.Write "Interrupção do usuário ocorrida"
  Case 20
   Response.Write "Resume Without Error"
  Case 28
   Response.Write "Fora de Espaço de Pilha"
  Case 35
   Response.Write "Sub ou Function não Definida"
  Case 47
   Response.Write "Muitas DLL na aplicação cliente"
  Case 48
   Response.Write "Erro carregando DLL"
  Case 49
   Response.Write "DLL com problemas de chamada"
  Case 51
   Response.Write "Erro Interno"
  Case 52
   Response.Write "Nome ou número do arquivo errado"
  Case 53
   Response.Write "Arquivo não Encontrado"
  Case 54
   Response.Write "Modo de arquivo errado"
  Case 55
   Response.Write "Arquivo já está Aberto"
  Case 57
   Response.Write "Device I/O Error"
  Case 58
   Response.Write "Arquivo jé existente"
  Case 59
   Response.Write "Tamanho do registro errado"
  Case 61
   Response.Write "Disco Cheio"
  Case 62
   Response.Write "Entrada passa do final do arquivo"
  Case 63
   Response.Write "Número de registros errados"
  Case 67
   Response.Write "Muitos arquivos"
  Case 68
   Response.Write "Ferramenta não disponível"
  Case 70
   Response.Write "Permissão Negada"
  Case 71
   Response.Write "Disco não Preparado"
  Case 74
   Response.Write "Não posso renomear com discos diferentes"
  Case 75
   Response.Write "Caminho/Arquivos Erro de acesso"
  Case 76
   Response.Write "Caminho não encontrado"
  Case 91
   Response.Write "Variável de objeto não definida"
  Case 92
   Response.Write "Loop For não foi inicializado"
  Case 94
   Response.Write "Uso inválido de Null"
  Case 322
   Response.Write "Não posso criar Arquivos temporários nescessários"
  Case 325
   Response.Write "Formato inválido no arquivo"
  Case 380
   Response.Write "Valor da propriedade inválida"
  Case 400
   Response.Write "ERRO HTTP 1.1 --- pedido ruim"
  Case 401.1
   Response.Write "ERRO HTTP 1.1 --- não autorizado: falha no logon"
  Case 401.2
   Response.Write "ERRO HTTP 1.1 --- não autorizado: falha no logon devido a configuração do servidor"
  Case 401.3
   Response.Write "ERRO HTTP 1.1 --- não autorizado: não autorizado devido a ACL no recurso"
  Case 401.4
   Response.Write "ERRO HTTP 1.1 --- não autorizado: falha na autorização pelo filtro"
  Case 401.5
   Response.Write "ERRO HTTP 1.1 --- não autorizado: falha na autorização por ISAPI/CGI App"
  Case 403.1
   Response.Write "ERRO HTTP 1.1 --- proibido: acesso a execução proibido"
  Case 403.2
   Response.Write "ERRO HTTP 1.1 --- proibido: acesso de leitura proibido"
  Case 403.3
   Response.Write "ERRO HTTP 1.1 --- proibido: acesso de escrever proibido"
  Case 403.4
   Response.Write "ERRO HTTP 1.1 --- proibido: requer SSL"
  Case 403.5
   Response.Write "ERRO HTTP 1.1 --- proibido: requer SSL 128"
  Case 403.6
   Response.Write "ERRO HTTP 1.1 --- proibido: endereço de IP rejeitado"
  Case 403.7
   Response.Write "ERRO HTTP 1.1 --- proibido: requer certificação do cliente"
  Case 403.8
   Response.Write "ERRO HTTP 1.1 --- proibido: acesso ao site negado"
  Case 403.9
   Response.Write "ERRO HTTP 1.1 --- acesso proibido: Muitos usuários estão conectados"
  Case 403.10
   Response.Write "ERRO HTTP 1.1 --- acesso proibido: configuração inválida"
  Case 403.11
   Response.Write "ERRO HTTP 1.1 --- acesso proibido: senha alterada"
  Case 403.12
   Response.Write "ERRO HTTP 1.1 --- acesso proibido: negado acesso ao mapa"
  Case 404
   Response.Write "ERRO HTTP 1.1 --- não encontrado"
  Case 405
   Response.Write "ERRO HTTP 1.1 --- método não permitido"
  Case 406
   Response.Write "ERRO HTTP 1.1 --- não aceitável"
  Case 407
   Response.Write "ERRO HTTP 1.1 --- requer autenticação do Proxy"
  Case 412
   Response.Write "ERRO HTTP 1.1 --- falha em pré condições"
  Case 414
   Response.Write "ERRO HTTP 1.1 --- pedido - URI muito grande"
  Case 423
   Response.Write "Propriedade ou metodo não encontrado"
  Case 424
   Response.Write "Objeto Requerido"
  Case 429
   Response.Write "OLE Automation não pode ser criado no servidor"
  Case 430
   Response.Write "Classe não suportada pelo OLE Automation"
  Case 432
   Response.Write "Nome do arquivo ou de classe nõ encontrado durante a operação OLE Automation"
  Case 438
   Response.Write "Objeto não suporta esta propriedade ou método"
  Case 440
   Response.Write "Erro na OLE Automation"
  Case 442
   Response.Write "Connection to type library or object library for remote process has been lost. Press OK for dialog to remove reference"
  Case 443
   Response.Write "Objeto OLE Automation não contém um valor padrão"
  Case 445
   Response.Write "Objeto não suporta esta ação"
  Case 446
   Response.Write "Objeto não suporta o nome do argumento"
  Case 447
   Response.Write "Objeto não suporta a definição do local atual"
  Case 448
   Response.Write "Nome de argumentos não encontrados"
  Case 449
   Response.Write "Este argumento não é opcional"
  Case 450
   Response.Write "Número de argumentos errado ou definição de propriedade inválida"
  Case 451
   Response.Write "Objeto não é uma coleção"
  Case 452
   Response.Write "Número ordinal inválido"
  Case 453
   Response.Write "Função DLL especificada não foi encontrada"
  Case 454
   Response.Write "código de origem não encontrado"
  Case 455
   Response.Write "Erro de trava no código"
  Case 457
   Response.Write "Esta chave já está associada a um elemento desta coleção"
  Case 458
   Response.Write "Tipos de variáveis usadas na OLE Automation não são suportadas pelo Visual Basic"
  Case 462
   Response.Write "A máquina do servidor remoto não existe ou não está disponível"
  Case 481
   Response.Write "Figura Inválida"
  Case 500
   Response.Write "Variável não definida"
  Case 501
   Response.Write "Variável não pode ser atribuída"
  Case 502
   Response.Write "Objeto não é seguro para script"
  Case 503
   Response.Write "Objeto não é seguro para inicialização"
  Case 504
   Response.Write "Objeto não é seguro para criação"
  Case 505
   Response.Write "Referência inválida ou não qualificada"
  Case 506
   Response.Write "Classe não definida"
  Case 1001
   Response.Write "Sem memória"
  Case 1002
   Response.Write "Erro de Sintaxe"
  Case 1003
   Response.Write "Esperado ':'"
  Case 1004
   Response.Write "Esperado ';'"
  Case 1005
   Response.Write "Esperado '('"
  Case 1006
   Response.Write "Esperado ')'"
  Case 1007
   Response.Write "Esperado ']'"
  Case 1008
   Response.Write "Esperado '{'"
  Case 1009
   Response.Write "Esperado '}'"
  Case 1010
   Response.Write "Esperado Identificador"
  Case 1011
   Response.Write "Esperado '='"
  Case 1012
   Response.Write "Esperado 'If'"
  Case 1013
   Response.Write "Esperado 'To'"
  Case 1014
   Response.Write "Esperado 'End'"
  Case 1015
   Response.Write "Esperado 'Function'"
  Case 1016
   Response.Write "Esperado 'Sub'"
  Case 1017
   Response.Write "Esperado 'Then'"
  Case 1018
   Response.Write "Esperado 'Wend'"
  Case 1019
   Response.Write "Esperado 'Loop'"
  Case 1020
   Response.Write "Esperado 'Next'"
  Case 1021
   Response.Write "Esperado 'Case'"
  Case 1022
   Response.Write "Esperado 'Select'"
  Case 1023
   Response.Write "Esperado expressão"
  Case 1024
   Response.Write "Esperado declaração"
  Case 1025
   Response.Write "Esperado final da declaração"
  Case 1026
   Response.Write "Esperado inteiro constante"
  Case 1027
   Response.Write "Esperado 'While' , 'Until'"
  Case 1028
   Response.Write "Esperado 'While' , 'Until' ou final de declaração"
  Case 1029
   Response.Write "Esperado 'With'"
  Case 1030
   Response.Write "Identificador Muito Longo"
  Case 1031
   Response.Write "Número Inválido"
  Case 1032
   Response.Write "Caracter Inválido"
  Case 1033
   Response.Write "Constante de String não Terminada"
  Case 1034
   Response.Write "Comentário não Terminado"
  Case 1035
   Response.Write "Nested Comment"
  Case 1036
   Response.Write "'Me' não pode ser usado como saída de rotina"
  Case 1037
   Response.Write "Uso Inválido da Palavra Chave 'Me'"
  Case 1038
   Response.Write "'Loop' sem 'Do'"
  Case 1039
   Response.Write "Declaração 'Exit' Inválida"
  Case 1040
   Response.Write "Variável de Controle de Loop 'for' Inválida"
  Case 1041
   Response.Write "Variável Redefinida"
  Case 1042
   Response.Write "Tem que ser a primeira declaração da linha"
  Case 1043
   Response.Write "Não pode atribuir non-By Val para um argumento"
  Case 1044
   Response.Write "Não pode usar parêntesis para chamar uma sub"
  Case 1045
   Response.Write "Esperada Constante Literal"
  Case 1046
   Response.Write "Esperado 'In'"
  Case 1047
   Response.Write "Esperado 'Class'"
  Case 1048
   Response.Write "Tem que ser definido dentro de uma Classe"
  Case 1049
   Response.Write "Esperado Let ou Set ou Get na declaração de propriedade"
  Case 1050
   Response.Write "Esperado 'Property'"
  Case 1051
   Response.Write "Número de argumentos tem que ser consistente em especificações de propriedades"
  Case 1052
   Response.Write "Não pode haver método/ propriedade padrão múltiplo em uma Classe"
  Case 1053
   Response.Write "Class initialize ou terminate não tem argumentos"
  Case 1054
   Response.Write "Propriedade Set ou Let tem que ter pelo menos um argumento"
  Case 1055
   Response.Write "'Next' inesperado"
  Case 1056
   Response.Write "'Default' pode ser especificado somente em 'Property' ou 'Function' ou 'Sub'"
  Case 1057
   Response.Write "Especificação 'Default' precisa especificar também 'Public'"
  Case 1058
   Response.Write "Especificação 'Default' só pode estar em Property Get"

  Case 3000
   Response.Write "O provedor não concluiu a ação pedida"
  Case 3001
   Response.Write "A aplicação está usando argumentos do tipo errado, estão fora do âmbito aceitável ou em conflito com alguma outra aplicação"
  Case 3002
   Response.Write "Ocorreu um erro durante a abertura do arquivo pedido"
  Case 3003
   Response.Write "Erro na leitura do arquivo especificado"
  Case 3004
   Response.Write "Erro ao escrever no arquivo"
  Case 3021
   Response.Write "BOF ou EOF é True ou o registro atual foi deletado. A operação pedido pela aplicação requer um registro atual"
  Case 3219
   Response.Write "A operação pedida pela aplicação não é permitida neste contexto"
  Case 3246
   Response.Write "A aplicação não pode fechar explicitamente um objeto connection no meio de uma transação"
  Case 3251
   Response.Write "O provedor não oferece suporte a operação pedida pela aplicação"
  Case 3265
   Response.Write "ADO não pode achar o objeto na coleção"
  Case 3367
   Response.Write "Não é anexar, objeto já está na coleção"
  Case 3420
   Response.Write "O objeto referenciado pela aplicação não aponta mais para um objeto válido"
  Case 3421
   Response.Write "A aplicação está usando um valor do tipo errado para a aplicação atual"
  Case 3704
   Response.Write "A operação pedida pela aplicação não é permitida se o objeto estiver fechado"
  Case 3705
   Response.Write "A operação pedida pela aplicação não é permitida se o objeto estiver aberto"
  Case 3706
   Response.Write "ADO não pode achar o provedor especificado"
  Case 3707
   Response.Write "A aplicação não pode alterar a propriedade ActiveConnect de um objeto Recordset com um objeto Command como fonte"
  Case 3708
   Response.Write "A aplicação definiu de modo impróprio um objeto Parameter"
  Case 3709
   Response.Write "A aplicação pediu uma operação em um objeto com uma referência a um objeto Connection inválido ou fechado"
  Case 3710
   Response.Write "A operação não é reentrante"
  Case 3711
   Response.Write "A operação ainda está executando"
  Case 3712
   Response.Write "Operação cancelada"
  Case 3713
   Response.Write "A operação ainda está conectando"
  Case 3714
   Response.Write "A transação é inválida"
  Case 3715
   Response.Write "A operação não está sendo executada"
  Case 3716
   Response.Write "A operação não é segura sob estas circunstâncias"
  Case 3717
   Response.Write "A operação fez com que aparecesse uma caixa de diálogo"
  Case 3718
   Response.Write "A operação fez com que aparecesse um cabeçalho de caixa de diálogo"
  Case 3719
   Response.Write "A ação falhou devido a uma violação na integridade dos dados"
  Case 3720
   Response.Write "O provedor não pode ser modificado"
  Case 3721
   Response.Write "Dados longos demais para o tipo de dados apresentados"
  Case 3722
   Response.Write "Ação causou uma violação do esquema"
  Case 3723
   Response.Write "A expressão continha sinais não coincidentes"
  Case 3724
   Response.Write "O valor não pode ser convertido"
  Case 3725
   Response.Write "O recurso não pode ser criado"
  Case 3726
   Response.Write "A coluna especificada não existe nesta fileira"
  Case 3727
   Response.Write "O URL não existe"
  Case 3728
   Response.Write "Você não tem permissão para ver a árvore do diretório"
  Case 3729
   Response.Write "O URL apresentado é inválido"
  Case 3730
   Response.Write "Recurso travado"
  Case 3731
   Response.Write "Recurso já existente"
  Case 3732
   Response.Write "A ação não pode ser concluída"
  Case 3733
   Response.Write "O volume de arquivo não foi encontrado"
  Case 3734
   Response.Write "Falha na operação porque o servidor não pode obter espaço suficiente para completar a operação"
  Case 3735
   Response.Write "Recurso fora de âmbito"
  Case 3736
   Response.Write "Comando não está disponível"
  Case 3737
   Response.Write "O URL na fileira identificada não existe"
  Case 3738
   Response.Write "O recurso não pode ser deletado porque está fora do escopo permitido"
  Case 3739
   Response.Write "Esta propriedade é inválida para a coluna selecionada"
  Case 3740
   Response.Write "Você apresentou uma opção inválida para esta propriedade"
  Case 3741
   Response.Write "Você apresentou um valor inválido para esta propriedade"
  Case 3742
   Response.Write "A definição desta propriedade causou um conflito com outras propriedades"
  Case 3743
   Response.Write "Nem todas as propriedades podem ser definidas"
  Case 3744
   Response.Write "A propriedade não foi definida"
  Case 3745
   Response.Write "A propriedade não pode ser definida"
  Case 3746
   Response.Write "A propriedade não tem suporte"
  Case 3747
   Response.Write "A ação não pode ser concluída porque o catálogo não está definido"
  Case 3748
   Response.Write "A conexão não pode ser alterada"
  Case 3749
   Response.Write "O método Update da coleção Fields falhou"
  Case 3750
   Response.Write "Não é possível definir permissão Deny porque o provedor não oferece suporte para tanto"
  Case 3751
   Response.Write "o provedor não oferece suporte ao tipo de pedido"
 End Select
End Sub

On Error Resume Next

IF Err > 0 Then Call CheckError

%>
