# Chain Of Responsibilities

## Propósito

Construir uma cadeia de objetos para lidar com chamadas em ordem sequencial. Se 
um objeto não pode lidar com uma chamada, delega essa chamada para o próximo na 
cadeira (chain) e assim por diante.

## Exemplos

* Framework de log, onde cada elemento da cadeia decide autonomamente o que fazer 
com uma mensagem de log
* Filtro de Spam
* Caching: primeiro objeto é uma instância de, por exemplo, uma interface 
Memcached; se ela não souber lidar com a requisição, passa para uma interface de 
banco de dados
* Yii Framework: CFilterChain é uma cadeia de filtros de ação de controller. O 
ponto de execução é passado de um filtro para o próximo na cadeia e, apenas se 
todos os filtros disserem "sim", a ação pode ser invocada.

## Diagrama UML

![Alt ChainOfResponsibility UML Diagram](uml/diagrama.png)
