# Simple Todo App

This project is intended to be another todo app. The main focus here is to learn how PHP work, actually the whole codebase is done by learning at Laracasts. You can check the course series at his website called [The PHP Practitioner](https://laracasts.com/series/php-for-beginners/).

## Getting started

To get started with this app, you can follow the following step:

```
$ git clone https://github.com/ibnumalik/php.git my-todo

$ cd my-todo

// Create env file so you can put your own config such as port binding
$ cp .env.example .env

$ docker-compose up -d
```

You can now open the http://localhost:${NGINX_PORT} on your browser to start using the todo app.
Replace ${NGINX_PORT} with the port you specified in the .env file earlier.

## Dependencies

This app uses the following package to make project development faster.

1. [Simple PHP router](https://github.com/skipperbent/simple-php-router) by [skipperbent](https://github.com/skipperbent).
2. [Pixie Query Builder](https://github.com/usmanhalalit/pixie) by [Usman](https://github.com/usmanhalalit)
3. Docker
