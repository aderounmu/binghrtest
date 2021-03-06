
# 📝 Binghr Test 

Welcome to my Binghr Test Repo
## Requirements

 * [Docker Desktop](https://www.docker.com/products/docker-desktop/)

 * [Laravel](https://laravel.com/docs/9.x)

 * [git](https://git-scm.com/downloads)
## Installation

clone my-project with git

```bash
git clone https://github.com/aderounmu/binghrtest.git

cd binghrtest

```

Setup laravel with docker 

```bash
  docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

Starting localhost using sail `make sure docker or docker desktop is running, 
make sure mysql isn't running in the background`
```bash
./vendor/bin/sail up
```
once containers on docker have started start , in another terminal

Compile javacript and css 

```bash
npm run watch

```

Run migrations for laravel and seed database

```bash
./vendor/bin/sail php artisan migrate:fresh --seed  

```

once done start the site on  [localhost](http://localhost/)

## Features

- User Creation
- User Viewing
- User Updating
- User Deleting



### `Caveat`
- Roles are generated randomly from a list in the controller `Reason: Unknown List of od user roles`
- Permissions are selected from the dropdown *Select Role Type* `Reason: multiple checkbox UX intepretation`
## Appendix

Any additional information goes here

