# Registry

## Propósito

Implementar um armazenamento central para objetos frequentemente usados em toda 
a aplicação. É tipicamente implementado usando uma classe abstrata com apenas 
métodos estáticos -- ou o Padrão Singleton.

## Exemplos

* Zend Framework: `Zend_Registry` armazena o objeto de log da aplicação, front 
controller etc
* Yii Framework: `CWebApplication` armazena todos os componentes da aplicação, 
como `CWebUser`, `CUrlManager` etc

## Diagrama UML

![Alt Registry UML Diagram](uml/diagrama.png)
