# Aula 02 - Tags

## Nessa aula vamos aprender mais sobre o funcionamento das tags no HTML

### Aspas duplas ou simples para colocar VALOR do href?
As aspas depois do href= deve ser sempre **DUPLAS...**

---
### Atributo e Valor
Não basta colocar um texto entre a tag para ele virar um link...  Você tem que colocar o recheio do bolo = os atributos da tag
Bolo = tags
Recheio = atributos
Sabor do recheio = valor dos atributos
>
    <a href="https://www.google.com.br/?gws_rd=ssl">Google</a>
**Output:**
<a href="https://www.google.com.br/?gws_rd=ssl">Google</a>

O valor do atributo não é visível ao usuário na página
> só se ele for em Inspecionar código

O texto que fica dentro das tags é visível ao usuário na página

---
### Semântica do seu código HTML
A importância de usar uma boa semântica ao escrever um documento html é para que seu site consiga ser lido por robôs de pesquisa (robô do google) e leitores de tela (leitores de acessibilidade), e para que você consiga pegar elementos html para poder estilizar ou alterar o comportamento do site

As tags do HTML vão dar semântica ao seu documento
> ou seja, vai dar SENTIDO ao conteúdo do seu documento

---
### Sobre espaçamento no HTML
Espaços e quebras de linha no HTML são geralmente ignorados...
> quebra de linha = ENTER