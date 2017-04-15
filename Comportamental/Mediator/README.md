# Mediator

## Propósito

Desacoplar vários componentes que trabalham juntos.

É uma boa alternativa em relação ao Observer SE você tem uma "inteligência 
central", como um controller (não no sentido do MVC).

Todos componentes -- chamados Colleague (Colega) -- são acoplados apenas à 
MediatorInterface e isso é uma boa coisa em OOP: um bom amigo é melhor que 
vários. Essa é a característica-chave desse Padrão.

## Diagrama UML

![Alt Mediator UML Diagram](uml/diagrama.png)
