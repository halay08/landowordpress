# Lando Wordpress - Apache 2

Stack PHP 7.x - Wordpress - Apache2 using Lando

## Prerequisites

- **Docker**. Follow the Docker document at [Offical Docker site](https://docs.docker.com/ "Docker document") guide.
- **Lando**. A tool to specify and painlessly spin up the services and tooling needed to develop. Download & Install [Lando](https://docs.lando.dev/basics/installation.html).

## Getting Started

```sh
$ cp .env.example .env
$ cp wp-config-local-sample.php wp-config-local.php
$ lando rebuild -y
```

Start lando services

```sh
$ lando start
```
