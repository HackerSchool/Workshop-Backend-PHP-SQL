# Guia prático do workshop

1. Construir o ficheiro **create_tables.sql**, capaz de criar uma tabela para guardar os dados do utilizador e outra tabela para guardar os dados associados à mensagem.

2. Abrir o programa FileZilla e carregar no botão existente no canto superior esquerdo da janela (Open the site manager).

3. Carregar no botão New site e configurar os parametros da seguinte forma:
	* Protocol: SFTP
	* Host: sigma.tecnico.ulisboa.pt
	* Logon Type: Normal
	* User: *istXXXXXX*
	* Password *password_do_fenix*

4. Carregar no botão Connect

5. A partir deste momento estás conectado ao servidor do IST, permitindo fazer transferências de ficheiros para a tua area pessoal do mesmo. Transfere o ficheiro **create_tables.sql**, para isso basta arrasta o ficheiro que criaste para o directório raiz da tua area pessoal isto é a pasta *istXXXXXX*. 

6. Abrir uma linha de comandos (PowerShell se estiveres em Windows) e executar o comando `ssh istXXXXXX@sigma.tecnico.ulisboa.pt`, de forma a abrir uma linha de comandos remota no servidor do IST. Quando for pedida a password, colocar a password do fénix.

7. Executando o comando `ls` na linha de comandos vizualizas uma listagem dos ficheiros no teu directorio remoto do servidor do IST. A partir deste momento deve ser possivel vizulizar o ficheiro **create_table.sql** que foi transferido para o servidor.

8. Executa o comando `mysql_reset`, este comando gera uma nova password para a base de dados no servidor do IST. Copia a password originada nesse comando para um ficheiro de texto, uma vez que vamos precisar dela durante todo o workshop.

9. Executa o comando `mysql -h db.tecnico.ulisboa.pt -u istXXXXXX -p`, assim que a password for pedida coloca a password gerada no comando anterior. Este comando permite ligar à base de dados, gerindo a base de dados recorrendo a codigo SQL.

10. Escreve `USE istXXXXXX` para usar a base de dados criada no servidor do IST associada ao teu utilizador.

11. Escreve `SHOW TABLES;` para ver as tabelas existentes na base de dados. Se é a primeira vez que usas este serviço certamente não teras qualquer tabela.

12. Escreve `SOURCE create_tables.sql;`, isto permite correr o codigo SQL a partir de um ficheiro, gerando assim as tabelas pretendidas.

13. Escrevedo novamente `SHOW TABLES;` é possivel vizualizar as tabelas recem criadas.

14. Escreve `SELECT * FROM member;` para vizualizar o conteudo da tabela member. 

15. Escreve `INSERT INTO member VALUES("XXX","XXX","XXX")` para inserir na tabela member os valores colocados em values.

16. Escreve `SELECT * FROM member;` para vizualizar o conteudo da tabela member.

17. Escreve `INSERT INTO member VALUES("*ola*","XXX","XXX")` para inserir na tabela member os valores colocados em values.

