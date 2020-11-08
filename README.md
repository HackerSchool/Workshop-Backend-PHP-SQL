# Workshop Backend PHP/SQL
Workshop de iniciação na utilização de PHP e SQL para construir o Backend de um website. O site é constituido por um sistema de login, que dá acesso a um forum onde todos os que iniciaram sessão poderão publicar mensagens. O workshop está feito para ser implementado usando os serviços de bases de dados e alojamentos providenciados pelo Instituto Supeior Técnico. Quem não for membro do IST tera de usar um outro serviço de alojamento web, com PHP instalado e acesso a bases de dados.

## Requisitos
Tanto para utilizadores Linux como MS Windows ou Mac é necessário:
 
 * Cliente FTP - Recomendo o FileZilla: https://filezilla-project.org/download.php?type=client
 * Editor de Texto - Qualquer um serve, mas se estiverem a procura de um novo editor de texto recomendo Visual Studio Code: https://code.visualstudio.com/
 * Activar os serviços de alojamento oferecidos aos membros do IST - Usando o link: https://selfservice.dsi.tecnico.ulisboa.pt/ activar os serviços: afs, shell, web e cgi.

## Estrutura de ficheiros

````
.
├── sql
│   └── create_tables         # Codigo SQL gerador das tabelas usadas neste workshop
├── web
│   ├── authentication.php    # Credencias para autenticar na base de dados
│   ├── home.php              # Apresenta o fórum com as mensagens
│   ├── index.htm             # Formulário de login
│   ├── login.php             # Procede a autenticação
│   ├── logo_HS.png           # Logotipo da HS
│   ├── logout.php            # Procede ao logout
│   └── new_message.php       # Cria uma nova mensagem
├── README.md                 # Este ficheiro
└── GUIA.md                   # Guia pratico para a realização do workshop
````

## Estrutura da base de dados

![Estrutura da base de dados](/sql_database.png)

## Guia

Está também disponível um guia para facilitar o acompanhamento da workshop em [GUIA.md](./GUIA.md).

Consultar https://www.w3schools.com/ para ajuda adicional em qualquer linguagem aqui mencionada ou usada isto é HTML, JS, CS, SQL e PHP.