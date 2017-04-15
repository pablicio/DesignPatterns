# Null Object

## Propósito

NullOutput é um exemplo do Padrão Null Object. Não é formalmente um Padrão de 
Projeto pelo GoF, mas é um esquema (schema) que aparece frequentemente, ao ponto 
de ser um Padrão. Além disso, ao ser analisado, é realmente um bom Padrão:

* O código no cliente é simples
* Reduz a chande de null pointer exception
* Menos `if`s => menos casos de uso

Toda vez que se tem um método que retorna um objeto ou `null`, você deveria 
retornar um objeto ou um `NullObject`. Com NullObject, você não precisa mais de 
uma declaração como `if (!is_null($obj)) { $obj->callSomething(); }`.

## Exemplos

* Symfony2: null logger do profiler
* Symfony2: null output em Symfony/Console
* null handler num Padrão Chain of Responsibilities
* null command num Padrão Command

## Diagrama UML

![Alt NullObject UML Diagram](uml/diagrama.png)
