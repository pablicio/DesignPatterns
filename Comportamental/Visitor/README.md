# Visitor

## Propósito

Permite terceirizar operações de objetos para outros objetos. A razão principal 
para se fazer isso é manter a separação de interesses. Mas classes têm de definir 
um "contrato" para permitir visitantes (o método `Role::accept` no exemplo).

O contrato é uma classe abstrata, mas também é possível se ter uma interface. 
Nesse caso, cada Visitor (Visitante) deve escolher qual método invocar no 
visitante.

## Diagrama UML

![Alt Visitor UML Diagram](uml/diagrama.png)
