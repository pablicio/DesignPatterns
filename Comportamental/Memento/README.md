# Memento

## Propósito

Prover a habilidade de restaurar um objeto a seu estado anterior ("desfazer" 
através de rollback).

O Padrão Memento é implementado com 3 objetos: Originator (originador), Caretaker 
(zelador) e Memento (memória). 

O Originator é algum objeto que tem um estado interno.

Caretaker vai fazer alguma coisa para o Originator, mas espera ser apto para 
desfazer (undo) a mudança. O Caretaker primeiro pergunta ao Originator pelo 
objeto Memento. Então ele faz qualquer operação (ou sequência de operações) que 
foi designado. Para reverter (roll back) ao estado anterior às operações, ele 
retorna o objeto Memento ao Originator. O objeto Memento, em si, é opaco -- um 
que o Caretaker não pode (ou não deveria) mudar.

Ao usar este Padrão, deve-se tomar cuidado se o Originator puder alterar outros 
objetos ou recuros -- Memento opera em um objeto único.

## Exemplos

* A semente (seed) de um pseudo-gerador de números
* O estado numa máquina de estados finitos

## Diagrama UML

![Alt Momento UML Diagram](uml/diagrama.png)
