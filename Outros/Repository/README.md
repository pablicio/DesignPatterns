# Repository

## Propósito

Fazer a mediação entre domínio e camadas de data mapping usando interfaces tipo 
coleção para acessar objetos de domínio.

Esse Padrão encapsula o conjunto de objetos persistidos em armazenamento de dados 
e as operações feitas nele, provendo uma visão mais orientada a objetos da 
camada de persistência.

Repository também suporta o objetivo de alcançar uma separação clara e dependência 
de mão única entre o domínio e camadas de data mapping.

## Exemplos

* Doctrine2 ORM: há um Repository que faz a mediação entre Entity e DBAL e 
contém métodos para retornar objetos
* Framework Laravel

## Diagrama UML

![Alt Repository UML Diagram](uml/diagrama.png)
