# Iterator

## Propósito

Fazer um objeto "interagível" e fazê-lo parecer como uma coleção de objetos.

## Exemplos

* Processar um arquivo linha a linha passando por todas as linhas (que têm uma 
representação de objeto) por um arquivo (que, claro, é um objeto, também)

## Nota

Standard PHP Library (SPL) define uma interface Iterator que é adequada para isso! 
Frequentemente você vai querer implementar a interface Countable, também, para 
permitir `count($object)` em seu objeto iterável.

## Diagrama UML

![Alt Iterator UML Diagram](uml/diagrama.png)
