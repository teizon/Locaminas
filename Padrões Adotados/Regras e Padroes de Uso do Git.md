# Regras e Padrões de Uso do Git

## Regras de commit:

```
A identificação ocorre por meio de uma palavra e emoji que identifica se aquele commit realizado
se trata de uma alteração de código, atualização de pacotes, documentação, alteração de visual, teste…

O Commit semântico possui os elementos estruturais abaixo(tipos),que informam 
a intenção do seu commit ao utilizador(a)de seu código.
```

### Tipo e descrição:

```
feat- Commits do tipo feat indicam que seu trecho de código está incluindo um novo recurso 
(se relaciona com o MINOR do versionamento semântico).

fix - Commits do tipo fix indicam que seu trecho de código commitado está solucionando um problema(bug fix),
(se relaciona com o PATCH do versionamento semântico).

docs - Commits do tipo docs indicam que houveram mudanças na documentação, como por exemplo
no Readme do seu repositório. (Não inclui alterações em código).

test - Commits do tipo test são utilizados quando são realizadas alterações em testes, seja criando,
alterando ou excluindo testes unitários. (Não inclui alterações em código)

chore - Commits do tipo chore indicam atualizações de tarefas de build, configurações de administrador,
pacotes... como por exemplo adicionar um pacote no gitignore. (Não inclui alterações em código)
```

### Recomendações:

```
Adicione um título consistente com o título do conteúdo;

Recomendamos que na primeira linha deve ter no máximo 4 palavras;

Para descrever com detalhes, usar a descrição do commit;

Usar um emoji no início da mensagem de commit representando sobre o commit;

Um link precisa ser adicionado em sua forma mais autêntica, ou seja: sem 
encurtadores de link e links afiliados;
```

### Padrões de emojis:



| Tipo de commit |  Emojis  | Palavra-chave  |
| ------------------- | ------------------- | ------------------ |
|  Documentação |  📚 : books : | docs |
| Testes |  🧪 : test_tube : | test |
| Teste de aprovação | ✔️ : heavy_check_mark : | test |
|  git commit -m ":lipstick: feat: Estilizaçao CSS do formulario" |  ✨ : sparkles : | feat |
|  Mover/Renomear |  🚚 : truck : | chore |
|  Bugfix |  🐛 : bug : | fix |

````
observação: em emojis, a forma correta de escrever nao tem espaço entre os 
dois pontos e a palavra chave dele, nem no começo nem no final, como por exemplo :books:
````


### Exemplos

| Comando git | Resultado no GitHub |
| ------------------- | ------------------- |
| git commit -m ": books : docs: Atualizaçao do README" |  📚 docs: Atualizaçao do README |
| git commit -m ": test_tube : test: Criando novo teste" |  🧪 test: Criando novo teste |
| git commit -m ": sparkles : feat: Novo recurso" |  ✨ feat: Novo recurso |
| git commit -m ": sparkles : chore: Adicionar um pacote no gitignore" | ✨ chore: adicionar um pacote no gitignore |
| git commit -m ": bub : fix: Arrumar cadastro de carros" |  🐛 fix: Arrumar cadastro de carros |
 
````
observação: Assim como, mencionado acima, após a primeira aspas nao tem espaço entre os 
dois pontos e a palavra chave dele, nem no começo nem no final, como por exemplo :books:
````

## Definições de Pastas:

````
O projeto terá três pastas principais, uma de requisitos, uma de padrões adotados e outra de código
````
