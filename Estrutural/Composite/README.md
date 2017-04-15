# Composite

## Propósito

Tratar um grupo de objetos da mesma maneira, como se fossem uma instância de um 
único objeto.

## Exemplos

* Uma instância de uma classe de formulário lida com todos seus elementos como 
se uma única instância desse formumário, quando `render()` é chamado, ele 
subsequentemente roda através de todos seus elementos-filhos e chama `render()` 
neles
* `Zend_Config`: uma árvore de opções de configuração, cada uma é um objeto `Zend_Config`

## Diagrama UML

![Alt Composite UML Diagram](uml/diagrama.png)
