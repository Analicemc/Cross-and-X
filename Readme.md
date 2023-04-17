## Problema
Refatore o primeiro código para escrever a cruz e o x no console utilizando o paradigma da orientação a objetos.
## Solução
Utilizar uma classe desenho que terá como um dos atributos o array linhas de desenho, ele deverá guardar todas as linhas diferentes que o desenho apresentará, e também o atributo de posições dessas linhas que informará ao método draw() qual linha de desenho ele deverá mostrar em cada iteração.
## Como utilizar
1. Pense no desenho que deseja fazer e com que padrões de linhas é possível fazê-lo. Guarde essas informações no array do atributo lines. Exemplo, no caso de uma cruz utilizamos apenas dois tipos de linhas para montar o desenho "...*...." e ".*****." 
2. Agora que já informou como serão as linhas do desenho, indique em quais posições elas deverão aparecer. Guarde essa informação no array do atributo linesPosition, nesse array estão os dados de:
[x] => posição no array lines da linha a ser desenhada na iteração x
Sendo x o índice númerico do vetor linesPosition.
