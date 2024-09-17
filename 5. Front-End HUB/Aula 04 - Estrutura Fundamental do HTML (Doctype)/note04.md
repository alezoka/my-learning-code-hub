# Aula 4 - Estrutura Fundamental do HTML (Doctype)

## Nessa aula vamos aprender a criar a estrutura fundamental do arquivo HTML. Isto é, quais as tags que sempre vão iniciar o arquivo e o que colocar dentro dessas tags

## A tag !DOCTYPE
### Formas de iniciar o !doctype
- **Digitando manualmente**
  - você pode usar o autocomplete do vscode para inserir a tag de forma mais rápida
>
    <!DOCTYPE html>

- Digitando `!` e selecionando a opção que vai aparecer na tela
  - vai ser gerado a estrutura inicial do html completa de **forma automática**

O `html` é um atributo da tag `!doctype` e indica a **versão atual** do html
  - pode ser 5, 4 e etc...
  - por padrão vai ser html 5

**O que a tag !doctype faz?**
  - Ela fala para o navegador que o arquivo é um arquivo html e que ele é de uma versão html 5+

###  Abrindo uma lista de todas as tags do HTML
Basta você digitar `<` e vai abrir uma janela com todas as tags

O doctype é uma tag que começa com `!`, então por isso que ele aparece em primeiro lugar nessa lista

## A tag <**html**>
É dentro dessa tag que você vai escrever todo o código do seu projeto
  - mais especificadamente, dentro da tag <**body**> 

Por isso essa tag é conhecida como a **RAÍZ**

## A tag <**head**>
Aqui vai ter toda informação do nosso site/projeto que vamos dar somente para o BROWSER

Ou seja, não vai ficar visível para o usuário na página

No head podemos colocar o título do site, que fica mostrando na guia do browser, por exemplo.
    - O título fica dentro da tag <**title**>

## A tag <**body**>
Vai ser aqui de fato que vai ficar todo o código da sua página/projeto

## A tag <**meta**>
É uma tag SEM fechamento

Nessa tag vamos colocar atributos com informações importantes que o BROWSER vai usar para poder ler nosso arquivo html

- `charset`:
  - atributo que informa como os caracteres da nossa página serão interpretados
  - o padrão para pt-br é usar UTF-8
  - por causa dos acentos, para os navegadores conseguirem ler e interpretar os acentos corretamente
    - navegadores mais antigos podem ter problemas ao ler arquivos em pt-br por causa dos acentos
    - nisso aparecem símbolos estranhos ao invés da palavra com acento