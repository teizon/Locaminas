#Regras e Padrões de Uso do Git

##Regras de commit:

```
A identificação ocorre por meio de uma palavra e emoji que identifica se aquele commit realizado se trata de uma alteração de código, atualização de pacotes, documentação, alteração de visual, teste…

O Commit semântico possui os elementos estruturais abaixo(tipos),que informam a intenção do seu commit ao utilizador(a)de seu código.
```
````
###Tipo e descrição:
````
``````````
feat- Commits do tipo feat indicam que seu trecho de código está incluindo um novo recurso (se relaciona com o MINOR do versionamento semântico).

fix - Commits do tipo fix indicam que seu trecho de código commitado está solucionando um problema (bug fix), (se relaciona com o PATCH do versionamento semântico).

docs - Commits do tipo docs indicam que houveram mudanças na documentação, como por exemplo no Readme do seu repositório. (Não inclui alterações em código).

test - Commits do tipo test são utilizados quando são realizadas alterações em testes, seja criando, alterando ou excluindo testes unitários. (Não inclui alterações em código)

chore - Commits do tipo chore indicam atualizações de tarefas de build, configurações de administrador, pacotes... como por exemplo adicionar um pacote no gitignore. (Não inclui alterações em código)
``````````
```
###Recomendações:
```

``````
Adicione um título consistente com o título do conteúdo;
Recomendamos que na primeira linha deve ter no máximo 4 palavras;
Para descrever com detalhes, usar a descrição do commit;
Usar um emoji no início da mensagem de commit representando sobre o commit;
Um link precisa ser adicionado em sua forma mais autêntica, ou seja: sem encurtadores de link e links afiliados;
``````

###Padrões de emojis:


Tipo de commit
Emojis
Palavra-chave
Acessibilidade
♿ :wheelchair:


Adicionando um teste
✅ :white_check_mark:
test
Adicionando uma dependência
➕ :heavy_plus_sign:
build
Alterações de revisão de código
👌 :ok_hand:
style
Animações e transições
💫 :dizzy:


Bugfix
🐛 :bug:
fix
Comentários
💡 :bulb:
docs
Commit inicial
🎉 :tada:
init
Configuração
🔧 :wrench:
chore
Deploy
🚀 :rocket:


Documentação
📚 :books:
docs



	
💻 Exemplos


 
Comando git
Resultado no GitHub
git commit -m ":tada: Commit inicial"
🎉 Commit inicial
git commit -m ":books: docs: Atualizaçao do README"
📚 docs: Atualizaçao do README
git commit -m ":bug: fix: Loop infinito na linha 50"
🐛 fix: Loop infinito na linha 50
git commit -m ":sparkles: feat: Pagina de login"
✨ feat: Pagina de login
git commit -m ":bricks: ci: Modificaçao no Dockerfile"
🧱 ci: Modificaçao no Dockerfile
git commit -m ":recycle: refactor: Passando para arrow functions"
♻️ refactor: Passando para arrow functions
git commit -m ":zap: perf: Melhoria no tempo de resposta"
⚡ perf: Melhoria no tempo de resposta
git commit -m ":boom: fix: Revertendo mudanças ineficientes"
💥 fix: Revertendo mudanças ineficientes
git commit -m ":lipstick: feat: Estilizaçao CSS do formulario"
💄 feat: Estilizaçao CSS do formulario
git commit -m ":test_tube: test: Criando novo teste"
🧪 test: Criando novo teste
git commit -m ":bulb: docs: Comentários sobre a função LoremIpsum( )"
💡 docs: Comentários sobre a função LoremIpsum( )



Definições de Pastas:
O projeto terá apenas duas pastas principais, uma de documentos e outra de codificação
