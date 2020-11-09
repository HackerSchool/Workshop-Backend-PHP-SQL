# Guia prático do workshop

## SQL

1. Construir o ficheiro **create_tables.sql**, capaz de criar uma tabela para guardar os dados do utilizador e outra tabela para guardar os dados associados à mensagem.

2. Abrir o programa FileZilla e carregar no botão existente no canto superior esquerdo da janela (Open the site manager).

3. Carregar no botão New site e configurar os parametros da seguinte forma:
	* Protocol: SFTP
	* Host: sigma.tecnico.ulisboa.pt
	* Logon Type: Normal
	* User: *istXXXXXX*
	* Password: *password_do_fenix*

4. Carregar no botão Connect

5. A partir deste momento estás conectado ao servidor do IST, permitindo fazer transferências de ficheiros para a tua area pessoal do mesmo. Transfere o ficheiro **create_tables.sql**, para isso basta arrasta o ficheiro que criaste para o directório raiz da tua area pessoal isto é a pasta *istXXXXXX*. 

6. Abrir uma linha de comandos e executar o comando `ssh istXXXXXX@sigma.tecnico.ulisboa.pt`, de forma a abrir uma linha de comandos remota no servidor do IST. Quando for pedida a password, colocar a password do fénix.

7. Executando o comando `ls` na linha de comandos vizualizas uma listagem dos ficheiros no teu directorio remoto do servidor do IST. A partir deste momento deve ser possivel vizulizar o ficheiro **create_table.sql** que foi transferido para o servidor.

8. Executa o comando `mysql_reset`, este comando gera uma nova password para a base de dados no servidor do IST. Copia a password originada nesse comando para um ficheiro de texto, uma vez que vamos precisar dela durante todo o workshop.

9. Executa o comando `mysql -h db.tecnico.ulisboa.pt -u istXXXXXX -p`, assim que a password for pedida coloca a password gerada no comando anterior. Este comando permite ligar à base de dados, gerindo a base de dados recorrendo a codigo SQL.

10. Escreve `USE istXXXXXX` para usar a base de dados criada no servidor do IST associada ao teu utilizador.

11. Escreve `SHOW TABLES;` para ver as tabelas existentes na base de dados. Se é a primeira vez que usas este serviço certamente não teras qualquer tabela.

12. Escreve `SOURCE create_tables.sql;`, isto permite correr o codigo SQL a partir de um ficheiro, gerando assim as tabelas pretendidas.

13. Escrevedo novamente `SHOW TABLES;` é possivel vizualizar as tabelas recem criadas.

14. Escreve `SELECT * FROM member;` para vizualizar o conteudo da tabela member. 

15. Escreve `INSERT INTO member VALUES("XXX","XXX");` para inserir na tabela member uma fila com os valores colocados em values.

16. Escreve `SELECT * FROM member;` para vizualizar o conteudo da tabela member.

17. Escreve `INSERT INTO member VALUES("XXX","XXX");` para inserir na tabela member mais uma fila.

18. Escreve `INSERT INTO messages VALUES("XXX","YYYY-MM-DD HH:MI:SS","XXX");` para inserir na tabela messages uma nova fila.

19. Escreve `SELECT * FROM member WHERE name="XXX";` para vizualizar as filas da tabela member que respeitem o filtro colocado.

20. Escreve `SELECT * FROM member, messages;` para ver uma união entre as duas tabelas.

21. Escreve `SELECT * FROM member, messages WHERE messages.email=member.email;` para ver uma união das duas tabelas onde as colunas das tuas tabelas estão relacionadas.

22. Escreve `SELECT * FROM messages WHERE text LIKE "%XXX%";` para ver uma mensagem cujo o conteudo inclua o valor *XXX*.

23. Escreve `SELECT * FROM messages ORDER BY date ASC;` para ver as mensagens por ordem ascendente.

22. Escreve `DELETE FROM messages WHERE email="XXX";` para apagar as filas da tabela onde a condição exposta se verifica.

23. Escreve `DELETE FROM member;` para todas as filas da tabela member.

## PHP/HTML

26. Criar a pagina **index.htm** e vizualiza-la no browser localmente.

23. Criar uma pasta na area pessoal do servidor do IST usando o FileZilla, esta pasta tem o nome HS e sera criada dentro do directório web. Ficando com o seguinte caminho para essa pasta **istXXXXXX/web/HS**.

24. Fazer upload destas duas paginas atravez do FileZilla para a pasta recem criada.

25. Vizualizar o funcionamento destas duas paginas abrindo o browser na pagina **http://web.tecnico.ulisboa.pt/istXXXXXX/HS/**

26. Criar as paginas **authentication.php**, **login.php**, **home.php**. Vizualizar as paginas no browser, corroborando o incorrecto funcionamento das mesmas, uma vez que as paginas não foram processadas no servidor.
	Nota - Utilizar o seguinte codigo para facilitar a contrução da pagina **home.php**

````
<html>
	<head>
		<title>HackerSchool Forum</title>
	</head>
	<body>
		<table style="margin: auto; max-width: 800px; width: 100%; border: 3px solid green;">
			<tr>
				<th style="text-align: left;"><img src="logo_HS.png" width="200"></th>
				<th style="text-align: right;"><p>Nome de utilizador<a href="logout.php">Log-out</a></p></th>
			</tr>
			<tr>
				<th colspan="2" style="text-align: left;">Nome do utilizador at data:</th>
			</tr>
			<tr>
				<th colspan="2" style="text-align: justify;">mensagem</th>
			</tr>
			<tr>
				<th colspan="2">
					<form action="new_message.php" method="post">
						<textarea name="text" rows="4" cols="50"></textarea>
						<input type="submit" value="Send message">
					</form>
				</th>
			</tr>
		</table>
	</body>
</html>

````

29. Fazer upload das paginas recem criadas para a pasta HS na area pessoal do servidor do IST e verificar o seu correcto funcionamento.

28. Criar a pagina **logout.php** e fazer upload da mesma para o servidor, verificando o seu correcto funcionamento.

29. Completar a pagina **home.php** e ainda **new_message.php**. Fazer upload das mesmas e verificar o seu correcto funcionamento.

## Apagar os conteudos do workshop

1. Ligar à tua area pessoal do servidor do IST usando o Filezilla usando os passos 2,3,4 deste guia se já tiveres o Filezilla configurado para aceder ao servidor do IST basta seguir o passo 2 selecionar o servidor do IST já criado e carregar em Connect.

2. Eliminar o ficheiro **create_tables.sql** no directório raiz da tua area pessoal isto é a pasta *istXXXXXX*.

3. Executar os passos 6, 9 e 10 do guia de modo a abrir uma sessão de ssh com o servidor do IST e de seguida abrir uma ligação com a base de dados usando o comando mysql.

4. Escrever `drop table if exists messages;` para eliminar a tabela de mensagens da base de dados.

5. Escrever `drop table if exists member;` para eliminar a tabela de membros da base de dados.
