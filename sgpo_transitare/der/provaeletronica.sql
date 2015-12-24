CREATE TABLE funcao (
  funcao_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  funcao_desc CHAR(30) NULL,
  PRIMARY KEY(funcao_id)
);

CREATE TABLE menu (
  menu_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  menu_ordem INTEGER UNSIGNED NULL,
  menu_codigo CHAR(10) NOT NULL,
  menu_desc CHAR(20) NULL,
  menu_url CHAR(100) NULL,
  menu_ativo BOOL NULL,
  PRIMARY KEY(menu_id),
  UNIQUE INDEX menu_codigo(menu_codigo)
);

CREATE TABLE dificuldade (
  dificuldade_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  dificuldade_desc CHAR(20) NULL,
  PRIMARY KEY(dificuldade_id)
);

CREATE TABLE disciplina (
  disciplina_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  disciplina_descricao VARCHAR(40) NULL,
  PRIMARY KEY(disciplina_id)
);

CREATE TABLE natureza (
  natureza_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  natureza_desc CHAR(100) NULL,
  PRIMARY KEY(natureza_id)
);

CREATE TABLE ref_legal_status (
  ref_legal_status_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  ref_legal_status_desc CHAR(20) NULL,
  PRIMARY KEY(ref_legal_status_id)
);

CREATE TABLE status_equip (
  status_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  status_desc CHAR(40) NULL,
  PRIMARY KEY(status_id)
);

CREATE TABLE opcao (
  opcao_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  opcao_desc CHAR(50) NULL,
  opcao_ativado BOOL NULL,
  PRIMARY KEY(opcao_id)
);

CREATE TABLE prova_status (
  status_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  status_desc CHAR(25) NULL,
  PRIMARY KEY(status_id)
);

CREATE TABLE cargo (
  cargo_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cargo_desc CHAR(30) NULL,
  PRIMARY KEY(cargo_id)
);

CREATE TABLE candidato (
  cand_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cand_nome CHAR(60) NULL,
  cand_renach CHAR(50) NULL,
  cand_bio CHAR(80) NULL,
  PRIMARY KEY(cand_id)
);

CREATE TABLE bnq_satus (
  bnq_satus_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  bnq_satus_desc CHAR(20) NULL,
  PRIMARY KEY(bnq_satus_id)
);

CREATE TABLE cliente_tipo (
  tipo_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tipo_desc CHAR(30) NULL,
  PRIMARY KEY(tipo_id)
);

CREATE TABLE curso (
  curso_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  curso_descricao VARCHAR(40) NULL,
  PRIMARY KEY(curso_id)
);

CREATE TABLE cliente (
  cliente_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  matriz_id INTEGER UNSIGNED NOT NULL,
  tipo_id INTEGER UNSIGNED NOT NULL,
  cliente_status BOOL NULL,
  cliente_razao CHAR(60) NULL,
  cliente_fantasia CHAR(60) NULL,
  cliente_cnpj CHAR(14) NULL,
  cliente_ie CHAR(20) NULL,
  cliente_horario CHAR(30) NULL,
  cliente_site CHAR(60) NULL,
  cliente_email CHAR(60) NULL,
  cliente_cep CHAR(8) NULL,
  cliente_fones CHAR(60) NULL,
  cliente_numero CHAR(10) NULL,
  cliente_complemento CHAR(60) NULL,
  cliente_cidade CHAR(60) NULL,
  cliente_uf CHAR(2) NULL,
  cliente_logo CHAR(60) NULL,
  cliente_bairro INTEGER UNSIGNED NULL,
  PRIMARY KEY(cliente_id),
  INDEX cliente_tipo_id(tipo_id),
  INDEX cliente_matriz_id(matriz_id),
  INDEX cliente_FKIndex1(tipo_id),
  INDEX cliente_FKIndex2(matriz_id),
  FOREIGN KEY(tipo_id)
    REFERENCES cliente_tipo(tipo_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(matriz_id)
    REFERENCES cliente(cliente_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE ref_legal (
  ref_legal_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  ref_legal_status_id INTEGER UNSIGNED NOT NULL,
  ref_legal_diploma CHAR(20) NULL,
  ref_legal_numero CHAR(20) NULL,
  ref_legal_capitulo CHAR(20) NULL,
  ref_legal_secao CHAR(20) NULL,
  ref_legal_paragrafo CHAR(20) NULL,
  ref_legal_inciso CHAR(20) NULL,
  ref_legal_alinea CHAR(20) NULL,
  ref_legal_item CHAR(20) NULL,
  PRIMARY KEY(ref_legal_id),
  INDEX ref_legal_FKIndex1(ref_legal_status_id),
  FOREIGN KEY(ref_legal_status_id)
    REFERENCES ref_legal_status(ref_legal_status_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE param_sistema (
  cliente_id INTEGER UNSIGNED NOT NULL,
  opcao_id INTEGER UNSIGNED NOT NULL,
  INDEX param_sistema_cliente_id(cliente_id),
  INDEX param_sistema_opcao_id(opcao_id),
  INDEX param_sistema_FKIndex1(opcao_id),
  INDEX param_sistema_FKIndex2(cliente_id),
  FOREIGN KEY(opcao_id)
    REFERENCES opcao(opcao_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(cliente_id)
    REFERENCES cliente(cliente_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE parametro (
  param_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cliente_id INTEGER UNSIGNED NOT NULL,
  param_tipo CHAR(1) NULL,
  curso_id INTEGER UNSIGNED NOT NULL,
  param_nr_questoes INTEGER UNSIGNED NULL,
  param_nr_alternativas INTEGER UNSIGNED NULL,
  param_tx_aprovacao INTEGER UNSIGNED NULL,
  param_duracao INTEGER UNSIGNED NULL,
  param_msg_aprovacao TEXT NULL,
  param_msg_reprovacao TEXT NULL,
  PRIMARY KEY(param_id),
  INDEX parametros_FKIndex1(cliente_id),
  INDEX parametro_FKIndex2(curso_id),
  FOREIGN KEY(cliente_id)
    REFERENCES cliente(cliente_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(curso_id)
    REFERENCES curso(curso_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE equipamento (
  equip_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  status_id INTEGER UNSIGNED NOT NULL,
  cliente_id INTEGER UNSIGNED NOT NULL,
  equip_nome CHAR(20) NULL,
  equip_ip CHAR(40) NULL,
  equip_mac CHAR(20) NULL,
  equip_status CHAR(1) NULL,
  PRIMARY KEY(equip_id),
  INDEX equipamento_FKIndex1(cliente_id),
  INDEX equipamento_FKIndex2(status_id),
  FOREIGN KEY(cliente_id)
    REFERENCES cliente(cliente_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(status_id)
    REFERENCES status_equip(status_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE param_disciplina (
  param_id INTEGER UNSIGNED NOT NULL,
  disciplina_id INTEGER UNSIGNED NOT NULL,
  par_dis_dificuldade INTEGER UNSIGNED NULL,
  par_dis_nr_questao INTEGER UNSIGNED NULL,
  INDEX Table_11_FKIndex1(disciplina_id),
  INDEX Table_11_FKIndex2(param_id),
  FOREIGN KEY(disciplina_id)
    REFERENCES disciplina(disciplina_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(param_id)
    REFERENCES parametro(param_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE pessoa (
  pessoa_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cliente_id INTEGER UNSIGNED NOT NULL,
  funcao_id INTEGER UNSIGNED NOT NULL,
  cargo_id INTEGER UNSIGNED NOT NULL,
  pessoa_nome CHAR(60) NULL,
  pessoa_fones CHAR(30) NULL,
  pessoa_email CHAR(60) NULL,
  pessoa_horario CHAR(15) NULL,
  pessoa_master BOOL NULL,
  pessoa_login CHAR(20) NULL,
  pessoa_senha CHAR(80) NULL,
  pessoa_login_dt_expira DATETIME NULL,
  PRIMARY KEY(pessoa_id),
  INDEX contato_FKIndex1(cliente_id),
  INDEX contato_FKIndex2(cargo_id),
  INDEX contato_FKIndex3(funcao_id),
  FOREIGN KEY(cliente_id)
    REFERENCES cliente(cliente_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(cargo_id)
    REFERENCES cargo(cargo_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(funcao_id)
    REFERENCES funcao(funcao_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE bnq (
  bnq_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  bnq_simulado BOOL NULL,
  ref_legal_id INTEGER UNSIGNED NOT NULL,
  bnq_satus_id INTEGER UNSIGNED NOT NULL,
  natureza_id INTEGER UNSIGNED NOT NULL,
  dificuldade_id INTEGER UNSIGNED NOT NULL,
  disciplina_id INTEGER UNSIGNED NOT NULL,
  bnq_pergunta TEXT NULL,
  bnq_qtd_uso TINYINT UNSIGNED NULL,
  PRIMARY KEY(bnq_id),
  INDEX bnq_FKIndex1(disciplina_id),
  INDEX bnq_FKIndex2(dificuldade_id),
  INDEX bnq_FKIndex3(natureza_id),
  INDEX bnq_FKIndex5(bnq_satus_id),
  INDEX bnq_FKindex6(ref_legal_id),
  INDEX bnq_ref_legal_id(ref_legal_id),
  FOREIGN KEY(disciplina_id)
    REFERENCES disciplina(disciplina_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(dificuldade_id)
    REFERENCES dificuldade(dificuldade_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(natureza_id)
    REFERENCES natureza(natureza_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(bnq_satus_id)
    REFERENCES bnq_satus(bnq_satus_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(ref_legal_id)
    REFERENCES ref_legal(ref_legal_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE prova (
  prova_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cliente_prova_destino INTEGER UNSIGNED NOT NULL,
  cliente_prova_realizado INTEGER UNSIGNED NOT NULL,
  pessoa_id INTEGER UNSIGNED NOT NULL,
  cand_id INTEGER UNSIGNED NOT NULL,
  curso_id INTEGER UNSIGNED NOT NULL,
  status_id INTEGER UNSIGNED NOT NULL,
  equip_id INTEGER UNSIGNED NOT NULL,
  prova_agenda_data DATE NULL,
  prova_agenda_hora CHAR(5) NULL,
  prova_motivo_status CHAR(150) NULL,
  PRIMARY KEY(prova_id),
  INDEX prova_FKIndex2(status_id),
  INDEX prova_FKIndex5(equip_id),
  INDEX prova_FKIndex6(curso_id),
  INDEX prova_FKIndex7(pessoa_id),
  INDEX prova_cliente_prova_realizado(cliente_prova_realizado),
  INDEX prova_cliente_prova_destino(cliente_prova_destino),
  INDEX prova_cand_id(cand_id),
  FOREIGN KEY(status_id)
    REFERENCES prova_status(status_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(equip_id)
    REFERENCES equipamento(equip_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(curso_id)
    REFERENCES curso(curso_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(cand_id)
    REFERENCES candidato(cand_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(pessoa_id)
    REFERENCES pessoa(pessoa_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(cliente_prova_destino)
    REFERENCES cliente(cliente_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(cliente_prova_realizado)
    REFERENCES cliente(cliente_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE prova_questao (
  prova_id INTEGER UNSIGNED NOT NULL,
  prova_pergunta BLOB NULL,
  prova_opcao1 BLOB NULL,
  prova_opcao2 BLOB NULL,
  prova_opcao3 BLOB NULL,
  prova_opcao4 BLOB NULL,
  prova_opcao5 BLOB NULL,
  prova_dispensavel INTEGER UNSIGNED NULL,
  prova_correta INTEGER UNSIGNED NULL,
  prova_resp_cand. INTEGER UNSIGNED NULL,
  INDEX prova_questao_prova_id(prova_id),
  FOREIGN KEY(prova_id)
    REFERENCES prova(prova_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE bnq_opcao (
  opcao_id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  bnq_id INTEGER UNSIGNED NOT NULL,
  opcao_desc TEXT NULL,
  opcao_correta BOOL NULL,
  opcao_dispensavel BOOL NULL,
  opcao_posicao TINYINT UNSIGNED NULL,
  opcao_fixa TINYINT UNSIGNED NULL,
  PRIMARY KEY(opcao_id),
  INDEX bnq_opcao_FKIndex1(bnq_id),
  FOREIGN KEY(bnq_id)
    REFERENCES bnq(bnq_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE bnq_curso (
  bnq_curso_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  bnq_id INTEGER UNSIGNED NOT NULL,
  curso_id INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(bnq_curso_id),
  INDEX bnq_curso_FKIndex1(curso_id),
  INDEX bnq_curso_FKIndex2(bnq_id),
  FOREIGN KEY(curso_id)
    REFERENCES curso(curso_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(bnq_id)
    REFERENCES bnq(bnq_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE nivel (
  pessoa_id INTEGER UNSIGNED NOT NULL,
  menu_id INTEGER UNSIGNED NOT NULL,
  menu_codigo CHAR(5) NULL,
  nivel_permissao CHAR(3) NULL,
  INDEX nivel_FKIndex1(menu_id),
  INDEX nivel_FKIndex2(pessoa_id),
  FOREIGN KEY(menu_id)
    REFERENCES menu(menu_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(pessoa_id)
    REFERENCES pessoa(pessoa_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


