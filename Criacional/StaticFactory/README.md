# Static Factory

## Propósito

Similarmente à Abstract Factory, esse padrão é usado para criar uma série de 
objetos dependentes ou relacionados. A diferença entre um e outro é que o Padrão 
Static Factory usa apenas um método estático para criar todos os tipos de objetos
que ele pode criar. Geralmente, é chamado "factory" ou "build".

## Exemplos

* Zend Framework: `Zend_Cache_Backend` or `_Frontend` usa um método factory para 
criar cache de backends ou frontends

## Diagrama UML

![Alt StaticFactory UML Diagram](uml/diagrama.png)
