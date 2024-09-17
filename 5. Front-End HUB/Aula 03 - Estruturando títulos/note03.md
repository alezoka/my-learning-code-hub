# Aula 3 - Estruturando títulos

## Nessa aula vamos praticar um pouco a hierarquia dos títulos no site

## Sobre o h1
Quando você usa o H1, não precisa usar <**br**>, porque o H1 já vai dar uma quebra de linha por si próprio 
> linha 1

Na verdade, eu acho que o que acontece é que: **quando você começa a marcar cada conteúdo com as tags, o navegador vai meio que dividindo esses conteúdos em blocos separados, e isso gera uma quebra de linha...**

## Aninhamento de tags
No html você consegue usar TAGS dentro de outras tags. Na verdade, o uso consolidado do HTML vai ser desse jeito: você vai ver diversas tags aninhadas dentro de outras tags, dando ao site uma estrutura completa e complexa.
Usei a mesma estrutura de código, mas coloquei a tag de link dentro da tag de parágrafo
> linha 14 a 15

## Dúvidas?
Eu tentei criar uma quebra de linha com o <**br**> no final da linha 9, mas a linha não quebrou... 
No entanto, quando eu uso o <**br**> no final da linha 11 dá certo.
Para resolver isso, eu criei uma linha vazia, com duas tags:
> linha 11
>
      <p></p><br>