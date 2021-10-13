# PHP REST

Simple vanilla [PHP](https://www.php.net/) CRUD application with [mongoDB](https://www.mongodb.com/) database with its [mflix](https://github.com/neelabalan/mongodb-sample-dataset/tree/main/sample_mflix) dataset that I use for my thesis about benchmarking [REST API](https://restfulapi.net/) and [GraphQL](https://graphql.org/).

## Installation

Use the package manager [composer](https://getcomposer.org/) to install the required package.

```bash
composer install
```

## Usage

This app provides the following endpoints:

* `GET /movies`: return all movies data with limit from query string (default: 10)
* `POST /comments`: creates new comment
* `PUT /comments/$id`: updates an existing comment
* `DELETE /comments/$id`: deletes a comment

## Related Repository

Below is another repository used for my thesis.

* [PHP GraphQL](https://github.com/adrianedy/php-graphql)
* [Go REST](https://github.com/adrianedy/go-rest)
* [Go GraphQL](https://github.com/adrianedy/go-graphql)