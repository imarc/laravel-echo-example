# Laravel + Echo Server Example

This is a Laravel + Laravel Echo Server example that is deployed with
[Docker](https://www.docker.com/) and [Traefik](https://docs.traefik.io/).

Docker, Composer, and NPM are required to install and run this example.

## Installation

Clone this repo and then run:

    # install php dependencies
    composer install
    composer run-script install-tasks

    # install npm dependencies
    npm install
    npm run prod

    # start docker services
    DOMAIN=localtest.me docker-compose up -d

Once started, visit http://www.localtest.me to view.

## License

This example is licensed under the [MIT license](https://opensource.org/licenses/MIT).
