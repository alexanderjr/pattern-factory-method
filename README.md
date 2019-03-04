#Factory Method

###Cenário de Aplicação
Contextos que exigem a instanciação de vários objetos em diversos lugares, o objetivo desse pattern é concentrar a criação dos objetos em objetos chamados de fábricas e reduzir acoplamento das classes junto ao sistema.

Com a utilização de interfaces padronizadas, são atribuidos alguns papéis junto a esse padrão, são eles

- Product, interface que define os contratos das classes concretas
- Concrete Product, classe que segue o contrato (Product)
- Creator, interface que define os métodos de criação de Concrete Product
- Concrete Creator, representa a classe que implementa Creator e facilita a crição dos objetos (Concrete Product)

###Vantagens
- Redução do acoplamento das classes concretas junto ao sistema, uma vez que concentramos a criação dos objetos nas factories, sendo assim temos apenas um único ponto para alterar caso necessário.
- Utilização de interfaces para definição de contratos das factories e classes concretas


####Perguntas
*Conforme a definição no livro Design Patterns (GAMMA; HELM; JOHNSON; VLISSIDES, 1994), os autores sugerem que o objetivo do padrão é definir uma interface para a criação dos objetos e transferir a responsabilidade de criação para as subclasses.*
- Ao utilizar esse método, estamos nós abrindo mão da utilização de construtores, isto é pode ser considerado bom ? Pode-se utilizar como retorno o caminho da classe para então permitir ao desenvolvedor a utilização do operador new para instanciar e então utilizar o construtor da classe ?

#####Referências 
[Source Making](https://sourcemaking.com/design_patterns/factory_method)

[Livro de Design Patterns com PHP7](https://www.casadocodigo.com.br/products/livro-design-paterns-php)