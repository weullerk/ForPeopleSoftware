# Prova Técnica Aix


## Apresentação
API com endpoints para interagir com os registros da entidade de funcionários.

## Requisitos

A aplicação foi desenvolvida sob o framework Laravel na linguagem PHP; informações no link abaixo:

https://laravel.com/

http://php.net/

## Executar aplicação

Para executar essa aplicação em seu computador, siga os passos abaixo:

1 - Após clonar o reposítorio em um diretório de sua preferencia.

```shell
$ git clone https://github.com/weullerk/ForPeopleSoftware.git
```

2 - Execute o comando "composer install" para baixar as dependências, caso não possua o composer você pode baixa lo para fazer a instalação no link abaixo:

```shell
composer install
```

https://getcomposer.org/

3 - Crie uma database e configure no arquivo .env os dados da conexão e o nome da database e execute o comando para migrar a database.

```shell
php artisan migrate
```

4 - Rode a seed para criar o usuário padrão: admin@forpeoplesoftware.com / 123456

```shell
php artisan db:seed
```

5 - Execute o comando php artisan serve para iniciar a applicação e acesse a documentação para visualizar os endpoints.
Faça a autenticação para executar os serviços.

```shell
php artisan serve
```

http://lacalhost:8000/public/api/v1/doc

## Plugins
JWT Auth - Autenticação com JWT

https://github.com/tymondesigns/jwt-auth

Laravel Cors (Gerênciar CORS)

https://github.com/fruitcake/laravel-cors

Swagger (Documentação da API)

https://github.com/DarkaOnLine/L5-Swagger
