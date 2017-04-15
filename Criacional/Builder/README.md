# Builder

## Propósito

Builder é uma interface que constrói partes de um objeto complexo.

Às vezes, se o Builder tem um melhor entendimento sobre o quê está sendo 
construído, essa interface pode ser uma classe abstrata com métodos padrão ( 
também conhecidos como Adapter).

Se você tem uma árvore de herança complexa de objetos, é lógico ter uma árvore 
complexa de para Builders também.

Nota: Builders frequentemente possuem uma interface fluida (fluent interface). 
Veja o mock builder do PHPUnit, por exemplo.

## Exemplos

* PHPUnit: Mock Builder

## Diagrama UML

![Alt Builder UML Diagram](uml/diagrama.png)
