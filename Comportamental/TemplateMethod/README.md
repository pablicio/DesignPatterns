# Template Method

## Propósito

Permitir que subclasses de uma template abstrato "termine" o comportamento de 
um algoritmo. Também é conhecido como Princípio de Hollywood: "Não nos chame, 
nós chamamos você" ("Don't call us, we call you"). 

Essa classe não é chamada por subclasses; pelo contrário. Mas como? Com 
abstração, evidentemente. Em outras palavras, é um esqueleto do algoritmo, ideal 
para bibliotecas de frameworks. Quem está usando deve somente implementar um 
método e a superclasse faz o restante do serviço.

Essa é uma maneira fácil de desacoplar classes concretas e reduzir o copiar-colar, 
e é por isso que você encontra esse Padrão por toda parte.

## Diagrama UML

![Alt TemplateMethod UML Diagram](uml/diagrama.png)
