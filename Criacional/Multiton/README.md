# Multiton

**ISSO É CONSIDERADO UM ANTI-PATTERN! PARA UMA MELHOR TESTABILIDADE E 
MANTENIBILIDADE, USE INJEÇÃO DE DEPENDÊNCIA!**

# Propósito

Ter apenas uma lista de instâncias nomeadas que serão usadas, tal como Singleton, 
mas com N instâncias.

# Exemplos

* 2 DB Connectors, por exemplo, 1 para MySQL e outro para SQLite
* Múltiplos Loggers (1 para mensagens de debug e outro para erros)

## Diagrama UML

![Alt Multiton UML Diagram](uml/diagrama.png)
