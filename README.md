# Project Environment Setup

This project uses [Laravel Sail](https://laravel.com/docs/sail) for its local development environment. Laravel Sail provides a simple command-line interface for interacting with Laravel's default Docker development environment.

## Setting up the Environment with Sail

To set up the environment for this project, we utilized the following command which setups Laravel along with MySQL and Mailhog services:

```bash
curl -s "https://laravel.build/blog-blog?with=mysql,mailpit" | bash
