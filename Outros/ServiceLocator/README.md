# Service Locator

## Propósito

Implementar uma arquitetura de baixo acoplamento para se ter um código mais 
testável, manutenível e extensível.

O Padrão DI e Service Locator são implementações de Inversão de Controle.

## Uso

Com `ServiceLocator` é possível registrar serviços de uma dada interface. Ao usar 
a interface você pode retornar o serviço e usá-lo nas classes da aplicação sem 
conhecer suas respectivas implementações. Você pode configurar e injetar o objeto 
Service Locator num bootstrap.

## Exemplos

* Zend Framework 2 usa Service Locator para criar e compartilhar serviços usados 
no framework (exemplos: EventManager, ModuleManager etc)

## Diagrama

![Alt ServiceLocator UML Diagram](uml/diagrama.png)
