# Facade

## Propósito

O propósito primário do Padrão Facade (pronuncia-se "façade") não é evitar que 
você leia o manual de uma API complexa. Isso é somente um efeito colateral. Seu 
propósito primário é reduzir o acoplamento e seguir a Lei de Demeter.

Um Facade pretende desacoplar um cliente e um subsistema ao fazer embedding de 
várias interfaces (mas às vezes pode ser somente uma) e, claro, reduzir 
complexidade.

* Um Facade não  proíbe o acesso ao subsistema
* É possível (e desejável) ter múltiplos Facades, um para cada subsistema

Esse é o motivo pelo qual um bom Facade não tem um `new`. Se houver múltiplas 
criações para cada método isso não é um Facade, é um Builder ou [Abstract|Static|Simple] Factory [Method]

O melhor Facade não tem `new` e um construtor com parâmetros de interface/type hint. 
Se você precisa criar novas instâncias, use um Factory como argumento.

## Diagrama UML

![Alt Facade UML Diagram](uml/diagrama.png)
