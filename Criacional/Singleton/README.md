# Singleton

**ISSO É CONSIDERADO UM ANTI-PATTERN! PARA UMA MELHOR TESTABILIDADE E 
MANTENIBILIDADE, USE INJEÇÃO DE DEPENDÊNCIA!**

# Propósito

Ter apenas uma instância de um objeto na aplicação que irá lidar com as chamadas.

# Exemplos

* DB Connector
* Logger (também pode ser um Multiton se houver vários arquivos de log para vários 
propósitos diferentes
* Travar um arquivo para a aplicação (há somente um no sistema de arquivos...)

## Diagrama UML

![Alt Singleton UML Diagram](uml/diagrama.png)
