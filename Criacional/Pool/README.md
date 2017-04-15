Pool
====

## Propósito

Ser um Padrão de Projeto que usa uma série de objetos 
inicializados mantidos prontos para uso -- uma "pool" (poço, tanque) -- ao invés 
de os instânciar e destruir conforme a demanda. Um cliente requererá um objeto da 
poll e fará operações neste objeto retornado. Quando o cliente tiver terminado, 
retornará o objeto -- que é um tipo específico de objeto "factory" -- para a poll 
ao invés de destruí-lo.

Usar este Padrão pode oferecer uma melhoria significativa de performance em 
situações em que o custo de inicializar um objeto é alto, a taxa de instânciação 
é alta e o número de instâncias em uso a qualquer momento é baixo. O objeto 
retirado da poll é obtido em um tempo previsível quando a criação de novos 
objetos (especialmente através da rede) pode levar algum tempo.

Entretanto, esses benefícios são em sua maioria verdadeiros para objetos que são 
dispendiosos em relação ao tempo, tal como conexões a BDs, conexões a sockets, 
threads e grandes objetos de gráficos como fontes e bitmaps. Em certas situações, 
"object pooling" (que não armazena nenhum recurso externo, mas ocupa memória) 
pode não ser eficiente e pode ocasionar decréscimo de performance.

## Diagrama UML

![Alt Pool UML Diagram](uml/diagrama.png)
