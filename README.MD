Título: Formulário de busca por caracteres
Autor: Leonardo Araújo

Como funciona: O sistema é composto por uma API que possui uma rota POST e uma GET, que consulta os carros no Banco de dados e serve para que o frontend renderize os dados de acordo com os caracteres que o usuário digitar.

A base de dados é composta por 12 Filmes:
        A Lista de Schindler;
        Avatar;
        Gladiador;
        Intocáveis;
        Matrix;
        O Poderoso Chefão;
        O Rei Leão;
        O Senhor dos Anéis - As Duas Torres;
        Os Caça-Fantasmas;
        Vingadores: Guerra Infinita;
        Vingadores: Ultimato;
        Wall-E;

Base de dados pequena, desenvolvida para testar o projeto, apenas.
A base de dados se encontra na pasta Database, para que você possa importar para testar.

O Servidor, não foi utilizado o Apache, portanto, a API está rodando no endereço "http://localhost:8080"
e o restante da aplicação está rodando em "http://localhost:3333". Assim a aplicação principal (Formulário)
irá rodar em "http://localhost:3333" e essa mesma, irá consultar a API em "http://localhost:8080".

Para que funcione, caminhe até o diretório da API e rode o comando "php -S localhost:8080". Após isso,
caminhe até o diretório raiz de toda aplicação e rode o comando "php -S localhost:3333" e assim, a plicação estará rodando.

OBS: caso vc não tenha o servidor nativo do PHP, Baixe o PHP na su máquina, no link:
    https://windows.php.net/download#php-7.4;
    Para que isso tudo funcione, você precisa ter importado a base de dados.